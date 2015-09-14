<script type="text/javascript">
	$(function () {
		$('#mychart_ntp').highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false,
			},
			title: {
				useHTML: true,
				text: "<a href='gnoc.php?child=foundation&services=ntp'>NTP</a>"
			},
			exporting: {
				enabled: false
			},			
			tooltip: {
				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
			},
			plotOptions: {
				pie: {
					allowPointSelect: true,
					cursor: 'pointer',
					dataLabels: {
					 enabled: false
					}
				}
			},
			series: [{
				type: 'pie',
				name: 'NTP',
				data: [
					{ name: 'UP', y: 95, color: '#008F00'},
					{
						name: 'Down',
						y: 5,
						sliced: true,
						selected: true,
						color: '#FF0000',
					},
				]
			}]
		});
	});

</script>
