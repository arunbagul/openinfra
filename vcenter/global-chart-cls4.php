<script type="text/javascript">
	$(function () {
		$('#global_mem1').highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false
			},
			title: {
				useHTML: true,
				text: "<a href='?child=esxi'>Host Mem <?php echo "(".$VC_TOTAL['CLS']['MEM']." GB)"; ?></a>"
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
				name: 'Mem',
				data: [
					<?php
						foreach($ClsArray as $key => $line) {
						  foreach($line as $myCLS => $ClsData) {
							$myPer1 = ($ClsData['MEM'] / $VC_TOTAL['CLS']['MEM']) * 100;
							$myPer = round($myPer1,2);
							echo "{ name: '".$key."[".$myCLS."] (".$ClsData['MEM'].")', y: ".$myPer."},";
						  }
						}
					?>
				]
			}]
		});
	});

</script>
