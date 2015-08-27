<?php
	$totalVMS = $VC_TOTAL['DC']['CAPACITY'] + $VC_TOTAL['DC']['VMS'];
	$myPer1 = ($VC_TOTAL['DC']['VMS'] / $totalVMS) * 100;
	$myPer2 = ($VC_TOTAL['DC']['CAPACITY'] / $totalVMS) * 100;
	$myPer3 = round($myPer1,2);
	$myPer4 = round($myPer2,2);
?>

<script type="text/javascript">
	$(function () {
		$('#my_chart01').highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false
			},
			title: {
				useHTML: true,
				text: "<a href='?child=reporting'>VM Capacity <?php echo "(".$totalVMS.")"; ?></a>"
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
					<?php echo "{ name: 'Provisioned (".$VC_TOTAL['DC']['VMS'].")', y: ".$myPer3.", color: '#0D233A'},"; 
						  echo "{ name: 'Additional CP (".$VC_TOTAL['DC']['CAPACITY'].")', y: ".$myPer4.", color: '#8bbc21',},";
						//sliced: true,
						//selected: true,
						//color: '#910000',
					?>	
				]
			}]
		});
	});

</script>
