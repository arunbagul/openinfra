<script type="text/javascript">
	$(function () {
		$('#global_vms1').highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false
			},
			title: {
				useHTML: true,
				text: "<a href='?child=vms'>Total VMS <?php echo "(".$VC_TOTAL['CLS']['VMS'].")"; ?></a>"
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
						//formatter: function() {
						//	return '<div class="my-click">' + this.point.name + '</div>';
						//},			
						//enabled: true,
						//color: '#000000',
						//connectorColor: '#000000',
						//format: '<b>{point.name}</b>: {point.percentage:.1f} %'
					},
					showInLegend: true,
				}
			},
			series: [{
				type: 'pie',
				name: 'VM',
				data: [
					<?php
						foreach($ClsArray as $key => $line) {
						  foreach($line as $myCLS => $ClsData) {
							$myPer1 = ($ClsData['VM_COUNT'] / $VC_TOTAL['CLS']['VMS']) * 100;
							$myPer = round($myPer1,2);
							echo "{ name: '".$key."[".$myCLS."] (".$ClsData['VM_COUNT'].")', y: ".$myPer."},";
						  }
						}
					?>
				]
			}]
		});
	});

</script>
