<script type="text/javascript">
$(function () {
    $('#capacity_vm1').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'VM Provisioning by Cls'
        },
        xAxis: {
            /* categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas'] */
            labels: {
                enabled: false
            },			
			categories: [
			<?php
				foreach($ClsArray as $key => $line) {
				  foreach($line as $myCLS => $ClsData) {
					echo "'".$myCLS."',";
				  }
				}
			?>
			]
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total VMs'
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
                    'Total: ' + this.point.stackTotal;
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
            name: 'Additional Capacity',
            data: [
			<?php
				foreach($ClsArray as $key => $line) {
				  foreach($line as $myCLS => $ClsData) {
					echo $ClsData['VM_CP'].",";
				  }
				}
			?>			
			]
        }, {
            name: 'Provisioned',
            data: [
			<?php
				foreach($ClsArray as $key => $line) {
				  foreach($line as $myCLS => $ClsData) {
					echo $ClsData['VM_COUNT'].",";
				  }
				}
			?>			
			]
        }
		]
    });
});
</script>