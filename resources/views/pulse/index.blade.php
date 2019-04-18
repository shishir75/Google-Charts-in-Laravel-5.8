<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Range', 'Count'],
                ['85 to 90',     {{ $data['pulse_85_to_90'] }}],
                ['91 to 100',      {{ $data['pulse_91_to_100'] }}],
                ['1011 to 110',      {{ $data['pulse_101_to_110'] }}],
                ['111 to 120',      {{ $data['pulse_111_to_120'] }}],
            ]);

            var options = {
                title: 'Pulse Value Counting',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div id="piechart_3d" style="width: 900px; height: 500px;"></div>
</body>
</html>