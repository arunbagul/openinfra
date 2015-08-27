<script type="text/javascript">
	$(function () {
		$('#global_ds1').highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false
			},
			title: {
				useHTML: true,
				text: "<a href='?child=ds'>Datastore Count <?php echo "(".$TOTAL_DS_COUNT.")"; ?></a>"
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
				name: 'DS',
				data: [
					<?php
						foreach($DSSArray as $key => $line) {
						  $myPer1 = ($line['SIZE'] / $TOTAL_DS_SIZE) * 100;
						  $myPer = round($myPer1,2);
						  echo "{ name: '".$key." (".$line['COUNT'].")', y: ".$myPer."},";						  
						}
					?>
				]
			}]
		});
	});

</script>
