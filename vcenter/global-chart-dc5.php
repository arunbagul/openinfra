<script type="text/javascript">
	$(function () {
		$('#global_cpu').highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false
			},
			title: {
				useHTML: true,
				text: "<a href='?child=esxi'>Host CPUs <?php echo "(".$VC_TOTAL['DC']['CPU'].")"; ?></a>"
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
				name: 'CPU',
				data: [
					<?php
						foreach($DCArray as $key => $line) {
						  $myPer1 = ($line['CPU'] / $VC_TOTAL['DC']['CPU']) * 100;
						  $myPer = round($myPer1,2);
						  echo "{ name: '".$key." (".$line['CPU'].")', y: ".$myPer."},";						  
						}
					?>				
				 /*	{ name: 'WT (170)', y: 25},
					{
						name: 'SAC (80)',
						y: 20,
						sliced: true,
						selected: true,
					}, */
				]
			}]
		});
	});

</script>
