<script type="text/javascript">
	$(function () {
		$('#global_esxi1').highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false
			},
			title: {
				useHTML: true,
				text: "<a href='?child=esxi'>Total ESXi <?php echo "(".$VC_TOTAL['CLS']['HOST'].")"; ?></a>"
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
					showInLegend: true,
				}
			},
			series: [{
				type: 'pie',
				name: 'Host',
				data: [
					<?php
						foreach($ClsArray as $key => $line) {
						  foreach($line as $myCLS => $ClsData) {
							$myPer1 = ($ClsData['HOST'] / $VC_TOTAL['CLS']['HOST']) * 100;
							$myPer = round($myPer1,2);
							echo "{ name: '".$key."[".$myCLS."] (".$ClsData['HOST'].")', y: ".$myPer."},";
						  }
						}
					?>
				]
			}]
		});
	});

</script>
