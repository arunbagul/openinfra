<script type="text/javascript">
$(function () {
    $('#gnoc_chart').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'Monthly: Infra, Application and Foundation Service SLA'
        },
        subtitle: {
            text: 'Source: Nagios and vCenter'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Uptime in %'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false,
		stacking: 'percent',
            }
        },
        series: [
		{
		    name: 'infra',
		    data: [60,70,93,91,80,60,70,80,95.30,99.99]
		}, 
		{
		    name: 'infra',
		    data: [60,88,99,80,96,96,98,85,99.5,99.10]
		},
		{
		    name: 'foundation',
		    data: [90,85,30,40,50,60,98,85,99.5,99.10]
		}
	]
    });
});
</script>
