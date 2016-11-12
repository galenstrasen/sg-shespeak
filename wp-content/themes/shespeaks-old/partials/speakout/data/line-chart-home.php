	
<script type="text/javascript">
	jQuery(document).ready(function($) {
		var options = {
			
			chart: {
				renderTo: '<?php echo $GLOBALS['chartID']; ?>',
				type: 'line',
				showAxes: true,
				backgroundColor:'transparent',
				marginBottom: 20, //margin between xAxis and legend
				marginRight: 30, //margin between data and yAxis
				
				zIndex: 0
				},
				
			colors: ['#FF0000', '#BCBEC0', '#4BA021', '#117291',  '#1B1B1B', '#24CBE5', '#64E572','#FF9655', '#FFF263', '#6AF9C4'],
			// color of lines from top down
			
			title: {
				text: ''
				},
			
			xAxis: {
				categories: [],
				lineWidth: 0, // horizontal (xaxis) line
				tickLength: 0,
				tickInterval: 2,
				
				labels:{
					align: 'center',
					y: 20,
					style: {
						font: '12px "Lato", sans-serif'
						}
					}
				},
				
			yAxis: {
				min: 0,
				title: {
					text: ''
					},
				
				labels:{
					align: 'right',
					x: 30,
					style: {
						font: '12px "Lato", sans-serif'
						},					},
				opposite: true, // false = left side - true = right side
				gridLineColor: '#252525',
				gridLineWidth: 1,
				minorGridLineWidth: 0
				},
		
			legend: {
				enabled: false,
				floating: true,
				borderWidth: 0,
				shadow: false,
				borderWidth: 0,
				width: 250,
				layout: 'horizontal',
				itemStyle: {
					font: '12px "Lato", sans-serif',
					color: 'black'
					},
				itemHoverStyle:{
					color: 'gray'
					}
				},
				
			tooltip: {
            shared: true,
            valueSuffix: ' <?php echo $GLOBALS['tooltip']; ?>'
        },
				
			plotOptions: {
				line: {
                	
                	pointPlacement: 'on'
					}
				},
				
			series: [],
			
			exporting: {
				enabled: false
				},
				
			credits: {
				enabled: false
				}
		};

		$.get('<?php echo $GLOBALS['chartCSV']; ?>', function(data) {
			
			// Split the lines
			var lines = data.split('\n');
			$.each(lines, function(lineNo, line) {
				var items = line.split(',');
				
				// header line containes categories
				if (lineNo == 0) {
					$.each(items, function(itemNo, item) {
						if (itemNo > 0) options.xAxis.categories.push(item);
						});
					}
					
				// the rest of the lines contain data with their name in the first position
				else {
					var series = { 
						data: []
						};
					$.each(items, function(itemNo, item) {
						if (itemNo == 0) {
							series.name = item;
							} 
						else {
							series.data.push(parseFloat(item));
							}
						});
					options.series.push(series);
					}
				});
				var chart = new Highcharts.Chart(options);
			});
		
		});


</script>		

