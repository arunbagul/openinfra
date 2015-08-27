<script type="text/javascript">
$(function () {
    $('#capacity_ds').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'DS Provisioning by DC'
        },
        xAxis: {
            /* categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas'] */
			categories: [
					<?php
						foreach($DSSArray as $key => $line) {
						  echo "'".$key."',";						  
						}
					?>
			]			
        },
        yAxis: {
            min: 0,
            title: {
                text: 'DS Size (GB)'
            },
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                }
            }
        },
        legend: {
            align: 'right',
            x: -70,
            verticalAlign: 'top',
            y: 20,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.x + '</b><br/>' +
                    this.series.name + ': ' + this.y + '<br/>' +
                    'Total: ' + this.point.stackTotal + ' GB';
            }
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                    style: {
                        textShadow: '0 0 3px black, 0 0 3px black'
                    }
                }
            }
        },
        series: [{
            name: 'Free',
			data: [
				<?php
					foreach($DSSArray as $key => $line) {
					  echo $line['FREE'].",";						  
					}				
				?>			
			]
        }, {
            name: 'Used',
            /* data: [20, 102, 3000, 2100, 150] */
			data: [
				<?php
					foreach($DSSArray as $key => $line) {
					  $DSUsed = $line['SIZE'] - $line['FREE'];
					  echo $DSUsed.",";						  
					}				
				?>			
			]			
        }
		]
    });
});
</script>