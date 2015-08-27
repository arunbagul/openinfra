<script type="text/javascript">
	$(function () {
		$('#global_vms').highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false
			},
			title: {
				useHTML: true,
				text: "<a href='?child=vms'>Total VMS <?php echo "(".$VC_TOTAL['DC']['VMS'].")"; ?></a>"
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
				name: 'VM',
				data: [
					<?php
						foreach($DCArray as $key => $line) {
						  $myPer1 = ($line['VM_COUNT'] / $VC_TOTAL['DC']['VMS']) * 100;
						  $myPer = round($myPer1,2);
						  echo "{ name: '".$key." (".$line['VM_COUNT'].")', y: ".$myPer."},";						  
						}
					?>
					/*{
						{ name: 'WT (899)', y: 30.9},
						name: 'CAR (200)',
						y: 10.1,
						sliced: true,
						selected: true,
					}, */
				]
			}]
		});
	});

</script>
