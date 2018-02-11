<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8"/>
	<title>Build Developer Pro App</title>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gojs/1.7.26/go-debug.js"></script>
	<link href="css/custom.css" rel="stylesheet">
	<script>
		function goIntro(){
			go.licenseKey = "54ff44e7b11c28c702d95d76423d6cbc5cf07f21de824da35e5041a7ba5c6f17759def7053d6d8c9d1fd1dfa1d7990de8dc76a7e9249506cef23c3db16b287f9e56370e1140f418bf65626c39caf28a0ac7c73f2c5b324a0df2bd8f6bcfcc79f09eef4dc189808ba29280735017bf84eb7ab8d69e904991f6d6dcaf7fbfbbf4afb6c719b9ee5488aee";


			var $ = go.GraphObject.make;

			
			var diagram = new go.Diagram("myDiagramDiv");
			diagram.initialContentAlignment = go.Spot.Center;


			//how each node should be constructed
			diagram.nodeTemplate = 
					$(go.Node, go.Panel.Auto,//the shape automatically fits around the textbox
						{ rotatable: true, locationSpot: go.Spot.Center },//allows the object to rotate from the centre of it
						{ selectionAdorned: false },//
						{ resizable: true },
						$(go.Shape,
							{ figure: "Rectangle" },//creates the rectangle shape
							new go.Binding("fill", "isSelected", function(sel) {
								return sel ? "dodgerblue" : "lightgray";
							}).ofObject()),
						$(go.TextBlock,
							{ margin: 3 },
							new go.Binding("text", "key")));

			var nodeDataArray = [
				{ key: "Alpha", color: "LightBlue" },
				{ key: "Beta", color: "Orange" }
			];
			//var linkDataArray = [ //creates a lonk from one node to another
			//	{ from: "Alpha", to: "Beta"}
			//];

			diagram.model = new go.GraphLinksModel(nodeDataArray/*, linkDataArray*/);
			diagram.grid.visible = true;
 			diagram.toolManager.draggingTool.isGridSnapEnabled = true;
  			diagram.toolManager.resizingTool.isGridSnapEnabled = true;
		}
	</script>
</head>


<body onload="goIntro()">

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div id="myDiagramDiv" style="border: solid 1px black;"></div>
		</div>
	</div>
</div>
</body>
</html>