<script type="text/javascript">
	$(function () {
		$('#mychart_nfs').highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false
			},
			title: {
				useHTML: true,
				text: "<a href='gnoc.php?child=foundation&services=nfs-fs'>NFS-FS</a>"
			},
			tooltip: {
				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
			},
			exporting: {
				enabled: false
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
				name: 'NFS',
				data: [
					{ name: 'UP', y: 92, color: '#008F00'}, 
					{
						name: 'Down',
						y: 8,
						sliced: true,
						selected: true,
						color: '#FF0000',
					},
				]
			}]
		});
	});

</script>
