<script type="text/javascript">
	$(function () {
		$('#my_chart03').highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false
			},
			title: {
				useHTML: true,
				text: "<a href='?child=reporting'>VM Capacity(560)</a>"
			},
			tooltip: {
				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
			},
			plotOptions: {
				pie: {
					allowPointSelect: true,
					cursor: 'pointer',
					dataLabels: {
						enabled: false,			
						//useHTML: true,
						//distance: 1,
						//formatter: function() {
						//	return '<div class="my-click">' + this.point.name + '</div>';
						//},			
						//color: '#000000',
						//connectorColor: '#000000',
						//format: '{point.name}:<br>{point.percentage:.1f} %'
					},
				    //startAngle: -90,
                    //endAngle: 90,
                    //center: ['50%', '75%'],
					showInLegend: true,
				}
			},
			series: [{
				type: 'pie',
				name: 'VMs',
				//innerSize: '50%',
				data: [
					{ name: 'Provisioned (540)', y: 60, color: '#0D233A'},
					{
						name: 'Additional CP(210)',
						y: 40,
						//sliced: true,
						//selected: true,
						//color: '#910000',
						color: '#8bbc21',
					},
				]
			}]
		});
	});

</script>
