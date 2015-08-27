<?php 
	$DSUsed = $TOTAL_DS_SIZE - $TOTAL_DS_FREE;
	$myPer1 = ($DSUsed / $TOTAL_DS_SIZE) * 100;
	$myPer2 = ($TOTAL_DS_FREE / $TOTAL_DS_SIZE) * 100;
	$myPer3 = round($myPer1,2);
	$myPer4 = round($myPer2,2);
?>
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
				text: "<a href='?child=reporting'>DS CP <?php echo "(".$TOTAL_DS_SIZE." GB)"; ?></a>"
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
				name: 'DS',
				data: [
					<?php echo "{ name: 'Provisioned (".$DSUsed." GB)', y: ".$myPer3.", color: '#0D233A'},"; 
						  echo "{ name: 'Additional CP (".$TOTAL_DS_FREE." GB)', y: ".$myPer4.", color: '#8bbc21',},";
						//sliced: true,
						//selected: true,
						//color: '#910000',
					?>					
					/* { name: 'Provisioned (20.30TB)', y: 75, color: '#0D233A'},
					{
						name: 'Additional CP (2TB)',
						y: 25,
						//sliced: true,
						//selected: true,
						//color: '#910000',
						color: '#8bbc21',
					}, */
				]
			}]
		});
	});

</script>
