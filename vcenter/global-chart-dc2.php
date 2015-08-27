<script type="text/javascript">
	$(function () {
		$('#global_esxi').highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false
			},
			title: {
				useHTML: true,
				text: "<a href='?child=esxi'>Total ESXi <?php echo "(".$VC_TOTAL['DC']['HOST'].")"; ?></a>"
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
				name: 'Host',
				data: [
					<?php
						foreach($DCArray as $key => $line) {
						  $myDC = $DATACENTER[$key]['NAME'];
						  $myPer1 = ($line['HOST'] / $VC_TOTAL['DC']['HOST']) * 100;
						  $myPer = round($myPer1,2);
						  echo "{ name: '".$key." (".$line['HOST'].")', y: ".$myPer."},";
						}
					?>				
					/*{ name: 'WT (110)', y: 20},
					{
						name: 'CAR (30)',
						y: 29,
						sliced: true,
						selected: true,
					}, */
				]
			}]
		});
	});

</script>
