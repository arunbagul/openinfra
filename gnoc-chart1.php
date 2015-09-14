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
		//stacking: 'percent',
            }
        },
        series: [
		{
		    name: 'infra',
		    data: [75,70,93,91,80,88,70,80,95.30,99.99]
		}, 
		{
		    name: 'infra',
		    data: [60,88,99,80,96,96,98,89,99.5,98.10]
		},
		{
		    name: 'foundation',
		    data: [90,65,82,40,50,75,93,85,89.5,97.10]
		}
	]
    });
});
</script>
