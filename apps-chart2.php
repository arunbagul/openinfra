<script type="text/javascript">
	$(function () {
		$('#my_chart02').highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false
			},
			title: {
				useHTML: true,
				text: "<a href='gnoc.php?child=apps&type=other'>Other Cloud Apps(200)</a>"
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
				name: 'Premium Customers',
				data: [
					{ name: 'UP (170)', y: 85, color: '#008F00'},
					{
						name: 'Down (30)',
						y: 15,
						sliced: true,
						selected: true,
						color: '#FF0000',
					},
				]
			}]
		});
	});

</script>
