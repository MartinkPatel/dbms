<?php
include 'database.php';

$sql = "SELECT YEAR(p.date) AS year, s.specialization, COUNT(*) AS count
        FROM placement p
        INNER JOIN student s ON p.roll = s.roll
        GROUP BY YEAR(p.date), s.specialization";

$result = $connect->query($sql);

$dataPoints = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $specialization = $row['specialization'];
        $year = $row['year'];
        $count = $row['count'];
        if (!isset($dataPoints[$specialization])) {
            $dataPoints[$specialization] = array();
        }
        $dataPoints[$specialization][] = array("y" => $count, "label" => $year);
    }
}

$json = json_encode($dataPoints, JSON_NUMERIC_CHECK);

// Query to get highest and average CTC for each specialization for each year
$sql2 = "SELECT specialization, YEAR(date) AS year, MAX(ctc) AS highest_ctc, AVG(ctc) AS average_ctc FROM placement JOIN student ON placement.roll = student.roll GROUP BY specialization, YEAR(date)";
$result2 = $connect->query($sql2);

// Create the data points array
$dataPoints2 = array();
if ($result2->num_rows > 0) {
    while ($row = $result2->fetch_assoc()) {
        // Create the data point for each specialization for each year
        $dataPoint2 = array(
            "specialization" => $row["specialization"],
            "year" => $row["year"],
            "highest_ctc" => $row["highest_ctc"],
            "average_ctc" => $row["average_ctc"]
        );
        // Add the data point to the corresponding specialization array
        $dataPoints2[$row["specialization"]][] = $dataPoint2;
    }
}

// Convert the data points array to JSON format
$json2 = json_encode($dataPoints2);

?>


<!DOCTYPE html>
<html>

<head>
    <title>Trends</title>
    <script src="jquery.js"></script>
    <script src="canvas.js"></script>
    <style>
        #chartContainer {
            height: 400px;
            width: 100%;
        }
    </style>
</head>

<body>
    <h1>Branch-wise Placement Trend</h1>
    <div>
        <label for="specialization">Select specialization:</label>
        <select id="specialization">
            <?php foreach (array_keys($dataPoints) as $specialization) : ?>
                <option value="<?php echo $specialization ?>"><?php echo $specialization ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div id="chartContainer"></div>
    <script>
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title: {
                text: "Placement Trend by Year"
            },
            data: []
        });

        function updateChart(specialization) {
            chart.options.data = [];
            chart.options.title.text = "Placement Trend by Year for " + specialization;
            var highest_ctc = <?php echo $json2 ?>;
            chart.options.data.push({
                type: "column",
                dataPoints: <?php echo $json ?>[specialization].map(function(item) {
                    var year = item.label;
                    var ctcData = highest_ctc[specialization].find(function(item) {
                        return item.year == year;
                    });
                    var tooltipText = "Count: " + item.y;
                    if (ctcData) {
                        console.log(ctcData.highest_ctc);
                        tooltipText += "<br>Highest CTC: " + ctcData.highest_ctc + "<br>Average CTC: " + ctcData.average_ctc;
                    }
                    item.tooltip = tooltipText;
                    return item;
                })
            });
            chart.render();
        }

        $(document).ready(function() {
            var specialization = $('#specialization').val();
            updateChart(specialization);

            $('#specialization').on('change', function() {
                specialization = $(this).val();
                updateChart(specialization);
            });
        });
    </script>
    <div id="chartContainer2"></div>
    <script>
        var chart2 = new CanvasJS.Chart("chartContainer2", {
            animationEnabled: true,
            title: {
                text: "CTC Trend by Year"
            },
            axisX: {
                interval: 1
            },

            axisY: {
                title: "CTC (in lakhs)"
            },
            data: []
        });

        function updateChart2(specialization) {
            chart2.options.data = [];
            chart2.options.title.text = "CTC Trend by Year for " + specialization;
            var highest_ctc = <?php echo $json2 ?>;
            chart2.options.data.push({
                type: "line",
                showInLegend: true,
                legendText: "Highest CTC",
                name: "Highest CTC",
                dataPoints: <?php echo $json ?>[specialization].map(function(item) {
                    var year = item.label;
                    var ctcData = highest_ctc[specialization].find(function(item) {
                        return item.year == year;
                    });
                    var tooltipText = "Count: " + item.y;
                    if (ctcData) {
                        console.log(ctcData.highest_ctc);
                        tooltipText += "<br>Highest CTC: " + ctcData.highest_ctc + "<br>Average CTC: " + ctcData.average_ctc;
                    }
                    var h = Number(ctcData.highest_ctc);
                    var tt = 60;
                    return {
                        y: h,
                        x: year
                    };
                })
            });
            chart2.options.data.push({
                type: "line",
                showInLegend: true,
                legendText: "Average CTC",
                name: "Average CTC",
                dataPoints: <?php echo $json ?>[specialization].map(function(item) {
                    var year = item.label;
                    var ctcData = highest_ctc[specialization].find(function(item) {
                        return item.year == year;
                    });

                    var h = Number(ctcData.average_ctc);
                    var tt = 60;
                    return {
                        y: h,
                        x: year
                    };
                })
            });
            chart2.render();
        }

        $(document).ready(function() {
            var specialization = $('#specialization').val();
            updateChart2(specialization);

            $('#specialization').on('change', function() {
                specialization = $(this).val();
                updateChart2(specialization);
            });
        });
    </script>







</body>

</html>