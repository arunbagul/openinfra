<script type="text/javascript">
	$(function () {
		$('#mychart_sftp').highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false
			},
			title: {
				useHTML: true,
				text: "<a href='gnoc.php?child=foundation&services=sftp'>SFTP</a>"
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
					dataLabels: {
						enabled: false
					}
				}
			},
			series: [{
				type: 'pie',
				name: 'SFTP',
				data: [
					{ name: 'UP', y: 100, color: '#008F00'},
					{
						name: 'Down',
						y: 0,
						sliced: true,
						selected: true,
						color: '#FF0000',
					},
				]
			}]
		});
	});

</script>
