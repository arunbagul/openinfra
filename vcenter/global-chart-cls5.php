<script type="text/javascript">
	$(function () {
		$('#global_cpu1').highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false
			},
			title: {
				useHTML: true,
				text: "<a href='?child=esxi'>Host CPUs <?php echo "(".$VC_TOTAL['CLS']['CPU'].")"; ?></a>"
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
					},
					//showInLegend: true,
				}
			},
			series: [{
				type: 'pie',
				name: 'CPU',
				data: [
					<?php
						foreach($ClsArray as $key => $line) {
						  foreach($line as $myCLS => $ClsData) {
							$myPer1 = ($ClsData['CPU'] / $VC_TOTAL['CLS']['CPU']) * 100;
							$myPer = round($myPer1,2);
							echo "{ name: '".$key."[".$myCLS."] (".$ClsData['CPU'].")', y: ".$myPer."},";
						  }
						}
					?>
				]
			}]
		});
	});

</script>
