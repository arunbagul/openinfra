<script type="text/javascript">
	$(function () {
		$('#mychart_services').highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false
			},
			title: {
				useHTML: true,
				text: "<a href='gnoc.php?child=infra&type=services'>Service Status (7k)</a>"
			},
			tooltip: {
				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
			},
			plotOptions: {
				pie: {
					allowPointSelect: true,
					cursor: 'pointer',
					dataLabels: {
						useHTML: true,
						formatter: function() {
							return '<div class="my-click">' + this.point.name + '</div>';
						},			
						enabled: true,
						color: '#000000',
						connectorColor: '#000000',
						format: '<b>{point.name}</b>: {point.percentage:.1f} %'
					}
				}
			},
			series: [{
				type: 'pie',
				name: 'Service Status',
				data: [
					{ name: 'OK (6790)', y: 97, color: '#008F00'},
					{
						name: 'FAILED (210)',
						y: 3,
						sliced: true,
						selected: true,
						color: '#FF0000',
					},
				]
			}]
		});
	});

</script>
