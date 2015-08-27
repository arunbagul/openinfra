<script type="text/javascript">
$(function () {
    $('#esxi_cpumem').highcharts({

        chart: {
            type: 'column'
        },

        title: {
            text: 'ESXi CPU/Mem Provisioning by DC'
        },

        xAxis: {
			categories: [
				<?php
					foreach($DCArray as $key => $line) {
					  echo "'".$key."',";						  
					}				
				?>
			]
        },

        yAxis: {
            allowDecimals: false,
            min: 0,
            title: {
                text: '% vCPU and Mem (GB)'
            }
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
                stacking: 'normal'
            }
        },

        series: [{
            name: 'CPU  Free',
			data: [
				<?php
					foreach($DCArray as $key => $line) {
					 $CPUFree = 30;
					 $myPer1 = ($CPUFree / 100) * 100;
					 $myPer2 = round($myPer1,2);
					  echo $myPer2.",";				  
					}				
				?>			
			],
            stack: 'male'
        }, {
            name: 'CPU Used',
			data: [
				<?php
					foreach($DCArray as $key => $line) {
					 $CPU_Used = 70;
					 $myPer1 = ($CPU_Used / 100) * 100;
					 $myPer2 = round($myPer1,2);
					  echo $myPer2.",";					
					}				
				?>			
			],
            stack: 'male'
        }, {
            name: 'Mem Free',
			data: [
				<?php
					foreach($DCArray as $key => $line) {
					 $MemFree = $line['MEM'] - $line['VM_MEM'];
					 if ($MemFree < 0 ) { $MemFree = 5; }
					 $myPer1 = ($MemFree / $line['MEM']) * 100;
					 $myPer2 = round($myPer1,2);
					  echo $myPer2.",";			
					}				
				?>			
			],			
            stack: 'female'
        }, {
            name: 'Mem Used',
			data: [
				<?php
					foreach($DCArray as $key => $line) {
					 $myPer1 = ($line['VM_MEM'] / $line['MEM']) * 100;
					 $myPer2 = round($myPer1,2);					 
					  echo $myPer2.",";					  
					}				
				?>			
			],
            stack: 'female'
        }]
    });
});
</script>