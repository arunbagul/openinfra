<script type="text/javascript">
$(function () {
    $('#esxi_cpumem1').highcharts({

        chart: {
            type: 'column'
        },

        title: {
            text: 'ESXi CPU/Mem Provisioning by Cls'
        },

        xAxis: {
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
            name: 'CPU Free',
			data: [
				<?php
					foreach($ClsArray as $key => $line) {
					  foreach($line as $myCLS => $ClsData) {
						$CPUFree = 30;
						$myPer1 = ($CPUFree / 100) * 100;
						$myPer2 = round($myPer1,2);
						echo $myPer2.",";	
					  }
					}				
				?>			
			],
            stack: 'male'
        }, {
            name: 'CPU Used',
			data: [
				<?php
					foreach($ClsArray as $key => $line) {
					  foreach($line as $myCLS => $ClsData) {
						$CPU_Used = 70;
						$myPer1 = ($CPU_Used / 100) * 100;
						$myPer2 = round($myPer1,2);
						echo $myPer2.",";	
					  }
					}			
				?>			
			],
            stack: 'male'
        }, {
            name: 'Mem Free',
			data: [
				<?php
					foreach($ClsArray as $key => $line) {
					  foreach($line as $myCLS => $ClsData) {
						$MemFree = $ClsData['MEM'] - $ClsData['VM_MEM'];
						if ($MemFree < 0 ) { $MemFree = 5; }
						$myPer1 = ($MemFree / $ClsData['MEM']) * 100;
						$myPer2 = round($myPer1,2);
						echo $myPer2.",";	
					  }
					}				
				?>			
			],
            stack: 'female'
        }, {
            name: 'Mem Used',
			data: [
				<?php
					foreach($ClsArray as $key => $line) {
					  foreach($line as $myCLS => $ClsData) {
						$myPer1 = ($ClsData['VM_MEM'] / $ClsData['MEM']) * 100;
						$myPer2 = round($myPer1,2);
						echo $myPer2.",";	
					  }
					}			
				?>			
			],
            stack: 'female'
        }]
    });
});
</script>