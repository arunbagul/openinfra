<script type="text/javascript">
	$(function () {
		$('#mychart_fs').highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false
			},
			title: {
				text: 'FS'
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
				name: 'FS',
				data: [
					['OK',   70],
					{
						name: 'Warn',
						y: 30,
						sliced: true,
						selected: true
					},
				]
			}]
		});
	});

</script>
