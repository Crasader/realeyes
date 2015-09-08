var base_url = 'http://172.16.71.230/realEyes/public/';

var dates = [[],[],[]];

function getXml() {
    //console.debug('va a cambiar');
    $.ajax({
        type: "GET",
        url: base_url + "getXml",
        success: function(data) {
            console.log(data);
            
        },
        error: function(xhr, ajaxOptions, thrownError) {
            
        }
    });
}

function convertXmlToJson() {
    //console.debug('va a cambiar');
    $.ajax({
        type: "GET",
        url: base_url + "convertXmlToJson",
        success: function(data) {
            //console.log(data);
            var model = $('.usuarios');
            model.empty();
            for (var i in data) {
                var item = data[i];
                for (var j in item.Cube) {
                	var itemV = item.Cube[j]
                	//console.debug(itemV.value)
                	//PageModel.dates = itemV.value.time;
                	dates [0].push( itemV.value.time);
                	//model.append("<div value='" + item.id + "'>" + itemV.value.time + "</div>");
                	for (var h in itemV.Cube) {
                		var itemH = itemV.Cube[h]
                		console.debug(itemH.value.currency)
                		console.debug(itemH.value.rate)
                		//model.append("<div value='" + item.id + "'>" + itemH.value.currency + "</div>");    			
                		//model.append("<div value='" + item.id + "'>" + itemH.value.rate + "</div>"); 
                		//PageModel.currency = itemH.value.currency;
                		//PageModel.rate = itemH.value.rate;  
                		dates[1].push(  itemH.value.currency);	
                		dates[2].push(  itemH.value.rate);  
                		
                	}
                };
                //model.append("<div value='" + item.id + "'>" + item.Cube.value + "</div>");
            }
            draw();
        },
        error: function(xhr, ajaxOptions, thrownError) {
            
        }
    });
}

function draw () {
	//var seriesData = [ [], [], [] ];
	//var random = new Rickshaw.Fixtures.RandomData(150);

	/*for (var i = 0; i < 150; i++) {
	    random.addData(seriesData);
	}*/

	// instantiate our graph!

	var graph = new Rickshaw.Graph( {
	    element: document.getElementById("chart"),
	    width: 960,
	    height: 500,
	    renderer: 'line',
	    series: [
	        {
	            color: "#c05020",
	            data: dates[1],
	            name: dates[1]
	        }
	    ]
	} );

	graph.render();

	var hoverDetail = new Rickshaw.Graph.HoverDetail( {
	    graph: graph
	} );

	var legend = new Rickshaw.Graph.Legend( {
	    graph: graph,
	    element: document.getElementById('legend')

	} );

	var shelving = new Rickshaw.Graph.Behavior.Series.Toggle( {
	    graph: graph,
	    legend: legend
	} );

	var axes = new Rickshaw.Graph.Axis.Time( {
	    graph: graph
	} );
	axes.render();
}


$(document).ready(function() {
    convertXmlToJson()
    draw();
});