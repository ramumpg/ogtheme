<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<main>
    <div class="container">
        <h1>Charts</h1>
        <div id="bar-chart" style="width: 600px;height:400px;"></div>
        <div id="line-chart" style="width: 600px;height:400px;"></div>
        <div id="pie-chart" style="width: 600px;height:400px;"></div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/echarts@5.2.2/dist/echarts.min.js"></script>
<script>
    var barChart = echarts.init(document.getElementById('bar-chart'));
    var lineChart = echarts.init(document.getElementById('line-chart'));
    var pieChart = echarts.init(document.getElementById('pie-chart'));

    var barOption = {
        xAxis: {
            type: 'category',
            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
        },
        yAxis: {
            type: 'value'
        },
        series: [{
            data: [120, 200, 150, 80, 70, 110, 130],
            type: 'bar'
        }]
    };

    var lineOption = {
        xAxis: {
            type: 'category',
            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
        },
        yAxis: {
            type: 'value'
        },
        series: [{
            data: [820, 932, 901, 934, 1290, 1330, 1320],
            type: 'line'
        }]
    };

    var pieOption = {
        series: [
            {
                name: 'Access From',
                type: 'pie',
                radius: '50%',
                data: [
                    { value: 1048, name: 'Search Engine' },
                    { value: 735, name: 'Direct' },
                    { value: 580, name: 'Email' },
                    { value: 484, name: 'Union Ads' },
                    { value: 300, name: 'Video Ads' }
                ]
            }
        ]
    };

    barChart.setOption(barOption);
    lineChart.setOption(lineOption);
    pieChart.setOption(pieOption);
</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
