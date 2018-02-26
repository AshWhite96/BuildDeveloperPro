<?php
   include 'system/init.php';
?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gojs/1.7.26/go-debug.js"></script>
	<script src="js/GuidedDraggingTool.js"></script>
	<script src="js/DimensioningLink.js"></script>
	<script src="js/DataInspector"></script>
		<link rel="stylesheet" type="text/css" href="css/custom.css">

  <script>
  	function goIntro(){
			go.licenseKey = "54ff44e7b11c28c702d95d76423d6cbc5cf07f21de824da35e5041a7ba5c6f17759def7053d6d8c9d1fd1dfa1d7990de8dc76a7e9249506cef23c3db16b287f9e56370e1140f418bf65626c39caf28a0ac7c73f2c5b324a0df2bd8f6bcfcc79f09eef4dc189808ba29280735017bf84eb7ab8d69e904991f6d6dcaf7fbfbbf4afb6c719b9ee5488aee";

//The start of the application - return to this function after the gojs documentation has been completed and noted.
			/*var $ = go.GraphObject.make;

			
			var diagram = new go.Diagram("myDiagramDiv");
			diagram.initialContentAlignment = go.Spot.Center;
			diagram.allowDrop = true;

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
				{ key: "Beta", color: "Orange" },
				{ key: "Camp", color: "Red" }
			];
			//var linkDataArray = [ //creates a lonk from one node to another
			//	{ from: "Alpha", to: "Beta"}
			//];


			diagram.model = new go.GraphLinksModel(nodeDataArray/*, linkDataArray);
			diagram.grid.visible = true;
 			diagram.toolManager.draggingTool.isGridSnapEnabled = true;
  			diagram.toolManager.resizingTool.isGridSnapEnabled = true;
		}*/
		
//CREATES A SINGLE NODE IN THE LESS EFFICIENT WAY -----------------------------------------------------------------------------------------------------------------
		/*var diagram = new go.Diagram("myDiagramDiv");//creates the element passed in the div 

		var node = new go.Node(go.Panel.Auto);//create a new node called node
		var shape = new go.Shape();//create a new shape called shape
		shape.figure = "RoundedRectangle";//set shape figure to rounded rectangle
		shape.fill = "lightblue";//set colour to lightblue
		node.add(shape);//add the shape to the node
		var textBlock = new go.TextBlock();//create a new textblock
		textBlock.text = "This is a Wall";//set the text within the textblock
		textBlock.margin = 5;//set the margin
		node.add(textBlock);//add the textblock to the node
		diagram.add(node);//add the node to the diagram

		diagram.grid.visible = true;
 		diagram.toolManager.draggingTool.isGridSnapEnabled = true;*/
		

		//SIMPLIFIED TO PREVIOUS FUNCTION USING STRING ARGUMENTS
		/*var diagram = new go.Diagram("myDiagramDiv");//must name or refer to the div HTML element
		
		var $ = go.GraphObject.make;
		
		diagram.add(
			$(go.Node, "Auto",
				$(go.Shape, "RoundedRectangle", 
					{ fill: "blue" }),
				$(go.TextBlock, "This is a Wall", 
					{ margin: 5})
			));
		diagram.grid.visible = true;
 		diagram.toolManager.draggingTool.isGridSnapEnabled = true;*/
//CREATES A MODEL USING AN ARRAY OF 4 DIFFERENT OBJECTS -------------------------------------------------------------------------------------------------------------
 		/*var $ = go.GraphObject.make;//sets $ as a variable to create a new object
 		var myDiagram = 
 			$(go.Diagram, "myDiagramDiv",//creates the element passed in the div
 			{
 				initialContentAlignment: go.Spot.Center, //centers the diagram components
 				"undoManager.isEnabled": true //enables keyboard shortcuts to undo etc
 			});

 		var myModel = $(go.Model); //creates a new model object
 		//in the model data, each node is represented by a javascript object
 		myModel.nodeDataArray = [
 			{ key: "Wall 1"},
 			{ key: "Wall 2"},
 			{ key: "wall 3"},
 			{ key: "Wall 4"}

 		];
 		myDiagram.model = myModel;

 		myDiagram.grid.visible = true;
 		myDiagram.toolManager.draggingTool.isGridSnapEnabled = true;*/
//DIAGRAM EVENT LISTENER TO CREATE A DIAGRAM, CALLS FOR METHOD TO LOAD DIAGRAM PROPERTIES ------------------------------------------------------------------------------
 		/*var $ = go.GraphObject.make;

 		var myDiagram =
 				$(go.Diagram, "myDiagramDiv",// must name or refer to the div HTML element
 					{
 						// any initial diagram is centered in the viewport
 						initialContentAlignment:go.Spot.Center,
 						//dont initialise some properties until after a new model has been loaded
 						"InitialLayoutCompleted": loadDiagramProperties,//a DiagramEvent listener
 						"toolManager.mouseWheelBehavior": go.ToolManager.WheelZoom,//mouse wheel will zoom in and out instead of scroll
 						"clickCreatingTool.archetypeNodeData": { text: "new node" } // specify a data object to copy for eachnew node that is created by double clicking
 					});
 				//listener for when initial layout is completed 
 				function loadDiagramProperties(e){
 					
				}
 					var violetbrush = $(go.Brush, "Linear", {0.0: "Violet", 1.0: "Lavender"});//creat ion of the brush which is called in fill:

 					myDiagram.add(
 						$(go.Node, "Auto",
 							$(go.Shape, "RoundedRectangle",
 								{fill: violetbrush}),
 							$(go.TextBlock, "This is a Wall",
 								{margin: 5})
 							));

 					myDiagram.add(
 						$(go.Node, "Auto",
 							$(go.Shape, "Rectangle",
 								{fill: violetbrush}),
 							$(go.TextBlock, "This is a Wall 2",
 								{margin: 5})
 							)); */

//TEXTBLOCKS----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 				/*var $ = go.GraphObject.make;
				var myDiagram =
  					$(go.Diagram, "myDiagramDiv");
//DIFFERENT TEXT STYLES FOR TEXTBLOCKS
 				myDiagram.add(
 					$(go.Part, "Vertical",
 						$(go.TextBlock, { text: "Hello, My Name is Ash"}),
 						$(go.TextBlock, { text: "Hello, My Name is Ash", stroke: "red"}),//sets text colour
 						$(go.TextBlock, { text: "Hello, My Name is Ash", background: "lightgreen"}),//sets background
 						$(go.TextBlock, { text: "Hello, My Name is Ash", font: "bold 14pt serif"})//font family size 

 						));
//DIFFERENT SIZES AND CLIPPING TEXTBLOCKS
 				myDiagram.add(
 					$(go.Part, "Vertical",
 						$(go.TextBlock, { text: "Hello There", background: "orange", margin: 5}),
 						$(go.TextBlock, { text: "Hello There", background: "orange", margin: 2, width: 100, height: 33}),
 						$(go.TextBlock, { text: "Hello There", background: "orange", margin: 2, width: 50, height: 22}),
 						$(go.TextBlock, { text: "Hello There", background: "orange", margin: 2, width: 100, height: 100})
 						));
//TEXT WRAPPING TO FIT/UNFIT BOXES/LINES
				myDiagram.add(
					$(go.Part, "Vertical",
						$(go.TextBlock, { text: "Hello There", background: "orange", margin: 5}),
						$(go.TextBlock, { text: "Hello There", background: "orange", margin: 2, width:50, wrap: go.TextBlock.None}),
						$(go.TextBlock, { text: "Hello There", background: "orange", margin: 2, width:50, wrap: go.TextBlock.WrapDesiredSize}),
						$(go.TextBlock, { text: "Hello There", background: "orange", margin: 2, width:50, wrap: go.TextBlock.WrapFit})
						));
//TEXT EDITING BY THE USER
				myDiagram.add(
					$(go.Part,
						$(go.TextBlock,
							{ text: "Select Me, and then click to edit", background: "lightblue", editable: true, isMultiline: false, isUnderline: true })
						));

				myDiagram.add(
					$(go.Part,
						$(go.TextBlock,
							{ text: "Select Me, and then click to edit", background: "lightblue", editable: true, textAlign: "center"})
						)); */

//SHAPES -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
				/*var $ = go.GraphObject.make;
				var myDiagram =
  					$(go.Diagram, "myDiagramDiv");

  					myDiagram.add(
  						$(go.Part, "Horizontal",
  							$(go.Shape, "Rectangle", { width: 40, height: 60, margin: 4}),//height width and margin can all be set, fill set to none will leave white background none will be black
  							$(go.Shape, "Circle", { width: 40, height: 60, margin: 4, fill: "green" }),
  							$(go.Shape, "Ellipse", { width: 40, height: 60, margin: 4, fill: null, stroke: "green"}),//stroke sets outline to a colour 
  							$(go.Shape, "Triangle", { width: 40, height: 60, margin: 4, fill: null, strokeWidth: 3 }),//stroke width changes the weight of line
  							$(go.Shape, "Diamond", { width: 40, height: 60, margin: 4, fill: "orange", background: "yellow" })//sets background of the object
  							));//null fill also means that when the shape is clicked it will not respond to the draging etc */
//GEOMETRY INTRODUCTION ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
				/*var $ = go.GraphObject.make;
				var myDiagram = 
					$(go.Diagram, "myDiagramDiv");

				var W_geometry = go.Geometry.parse("M 0,0 L 10,50 20,10 30,50 40,0", false);
				myDiagram.add(
					$(go.Part, "Horizontal",
						$(go.Shape, { geometry: W_geometry, strokeWidth: 2}),
						$(go.Shape, { geometry: W_geometry, stroke: "blue", strokeWidth: 10, strokeJoin: "miter", strokeCap: "butt" }),//strokejoin sets the join to rounder square etc
     	 				$(go.Shape, { geometry: W_geometry, stroke: "blue", strokeWidth: 10, strokeJoin: "miter", strokeCap: "round" }),//strokeCap sets the appearance of the end of the diagram
      					$(go.Shape, { geometry: W_geometry, stroke: "blue", strokeWidth: 10, strokeJoin: "miter", strokeCap: "square" }),
      					$(go.Shape, { geometry: W_geometry, stroke: "green", strokeWidth: 10, strokeJoin: "bevel", strokeCap: "butt" }),
      					$(go.Shape, { geometry: W_geometry, stroke: "green", strokeWidth: 10, strokeJoin: "bevel", strokeCap: "round" }),
      					$(go.Shape, { geometry: W_geometry, stroke: "green", strokeWidth: 10, strokeJoin: "bevel", strokeCap: "square" }),
      					$(go.Shape, { geometry: W_geometry, stroke: "red", strokeWidth: 10, strokeJoin: "round", strokeCap: "butt" }),
      					$(go.Shape, { geometry: W_geometry, stroke: "red", strokeWidth: 10, strokeJoin: "round", strokeCap: "round" }),
      					$(go.Shape, { geometry: W_geometry, stroke: "red", strokeWidth: 10, strokeJoin: "round", strokeCap: "square" }),
      					$(go.Shape, { geometry: W_geometry, stroke: "purple", strokeWidth: 2, strokeDashArray: [4, 2] }),//Dash array sets how the dashes present themselves
      					$(go.Shape, { geometry: W_geometry, stroke: "purple", strokeWidth: 2, strokeDashArray: [6, 6, 2, 2] })
						));*/
//ANGLE AND SCALE OF GEOMETRY AND FIGURES
			/*var $ = go.GraphObject.make;
			var myDiagram = 
				$(go.Diagram, "myDiagramDiv");

			myDiagram.add(
				$(go.Part, "Table",
					$(go.Shape, { row: 0, column: 1, figure: "Club", fill: "green", width: 40, height: 40,}),
					$(go.Shape, { row: 0, column: 2, figure: "Club", fill: "green", width: 40, height: 40, angle: 30}),
					$(go.Shape, { row: 0, column: 3, figure: "Club", fill: "green", width: 40, height: 40, scale: 1.5}),
					$(go.Shape, { row: 0, column: 4, figure: "Club", fill: "green", width: 40, height: 40, scale: 3.0, angle: 180})
					));*/
//DEVELOPING CUSTOM FIGURES THE CORRECT WAY - INTRO INTO DATA BINDING 
			/*var $ = go.GraphObject.make;
			var myDiagram = 
				$ (go.Diagram, "myDiagramDiv");

			go.Shape.defineFigureGenerator("RoundedTopRectangle", function(shape, w, h){//define a new shape
				//this figure takes one parameter, the size of the corner
				var p1 = 5;
				if (shape !== null){
					var param1 = shape.parameter1;
					if (!isNaN(param1) && param1 >= 0) p1 = param1;//cant be negative
				}
				p1 = Math.min(p1, w / 2);
				p1 = Math.min(p1, h / 2);//limit the whole height or by half
				var geo = new go.Geometry();

				geo.add(new go.PathFigure(0, p1)
					.add(new go.PathSegment(go.PathSegment.Arc, 180, 90, p1, p1, p1, p1))
					.add(new go.PathSegment(go.PathSegment.Line, w - p1, 0))
					.add(new go.PathSegment(go.PathSegment.Arc, 270, 90, w - p1, p1, p1, p1))
					.add(new go.PathSegment(go.PathSegment.Line, w, h))
             		.add(new go.PathSegment(go.PathSegment.Line, 0, h).close()));

				geo.spot1 = new go.Spot(0, 0, 0.3 * p1, 0.3 * p1);
				geo.spot2 = new go.Spot(1, 1, -0.3 * p1, 0);
				return geo;
			});

			go.Shape.defineFigureGenerator("RoundedBottomRectangle", function(shape, w, h){
				var p1 = 5;
				if (shape !== null) {
      				var param1 = shape.parameter1;
      				if (!isNaN(param1) && param1 >= 0) p1 = param1;  // can't be negative or NaN
    			}
    			p1 = Math.min(p1, w / 2);
    			p1 = Math.min(p1, h / 2);  // limit by whole height or by half height?
    			var geo = new go.Geometry();
    			// a single figure consisting of straight lines and quarter-circle arcs
    			geo.add(new go.PathFigure(0, 0)
             		.add(new go.PathSegment(go.PathSegment.Line, w, 0))
             		.add(new go.PathSegment(go.PathSegment.Line, w, h - p1))
             		.add(new go.PathSegment(go.PathSegment.Arc, 0, 90, w - p1, h - p1, p1, p1))
             		.add(new go.PathSegment(go.PathSegment.Line, p1, h))
             		.add(new go.PathSegment(go.PathSegment.Arc, 90, 90, p1, h - p1, p1, p1).close()));
    			// don't intersect with two bottom corners when used in an "Auto" Panel
    			geo.spot1 = new go.Spot(0, 0, 0.3 * p1, 0);
    			geo.spot2 = new go.Spot(1, 1, -0.3 * p1, -0.3 * p1);
    			return geo;
			});

			myDiagram.nodeTemplate = 
				$(go.Part, "Spot",
					{
						selectionAdorned: false, //dont show the standard selection handle
						resizable: true, resizeObjectName: "SHAPE", //user can resize the shapes
						rotatable: true, rotateObjectName: "SHAPE",//user can rotate the shape 
																	//without the label rotating
					},
					$(go.Shape,
						{
							name: "SHAPE",
							fill: $(go.Brush, "Linear", {0.0: "white", 1.0: "gray"}),
							desiredSize: new go.Size(100, 50)
						},
						new go.Binding("figure", "fig"),
						new go.Binding("parameter1", "p1")),
					$(go.Panel, "Vertical",
						$(go.TextBlock,
							new go.Binding("text", "fig")),
						$(go.TextBlock, { stroke: "blue" },
						    new go.Binding("text", "parameter1", function(p1) { return p1; }).ofObject("SHAPE"))
						)
					);

			myDiagram.model = new go.Model([
				{ fig: "RoundedTopRectangle"},
				{ fig: "RoundedTopRectangle", p1: 0},
				{ fig: "RoundedTopRectangle", p1: 3},
				{ fig: "RoundedTopRectangle", p1: 10},
				{ fig: "RoundedTopRectangle", p1: 50},
				{ fig: "RoundedTopRectangle", p1: 250},
				{ fig: "RoundedBottomRectangle"},
				{ fig: "RoundedBottomRectangle", p1: 0},
				{ fig: "RoundedBottomRectangle", p1: 3},
				{ fig: "RoundedBottomRectangle", p1: 10},
				{ fig: "RoundedBottomRectangle", p1: 50},
				{ fig: "RoundedBottomRectangle", p1: 250},
				
				]);*/

//PANELS -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//PANEL POSITION
			/*var $ = go.GraphObject.make;
			var myDiagram = 
				$ (go.Diagram, "myDiagramDiv");		

			myDiagram.add(
				$(go.Part, go.Panel.Position,//add panel positions
					{background: "lightblue"},//change entire part to light blue
					$(go.TextBlock, "default, at (0,0)", {background: "lightgreen"}),//set first point
					$(go.TextBlock, "(100, 0)", {position: new go.Point(100, 0), background: "lightgreen"}),//first position is across, second is up/down
					$(go.TextBlock, "(0, 100)", { position: new go.Point(0, 100), background: "lightgreen" }),
					$(go.TextBlock, "(60, 50)", { position: new go.Point(55, 28), background: "lightgreen" }),
      				$(go.TextBlock, "(90, 33)", { position: new go.Point(33, 70), background: "lightgreen" }),
      				$(go.TextBlock, "(100, 100)", { position: new go.Point(100, 100), background: "lightgreen" })


					));*/
//VERTICAL PANELS
			/*var $ = go.GraphObject.make;
			var myDiagram = 
				$ (go.Diagram, "myDiagramDiv");	


			myDiagram.add(
				$(go.Part, go.Panel.Vertical,
					{background: "lightgrey"},
					$(go.TextBlock, "A Long String", {background:"lightgreen"}),
					$(go.TextBlock, "Shorter", {background: "lightgreen", alignment: go.Spot.Left}),
					$(go.TextBlock, "Short", {background: "lightgreen", alignment: go.Spot.Center}),
					$(go.TextBlock, "Right", {background: "lightgreen", alignment: go.Spot.Right}),
					$(go.TextBlock, "Stretch", {background: "lightgreen", stretch: go.GraphObject.Fill})
					));*/
//CONSTRAINED WIDTH VERTICAL PANELS 
			/*var $ = go.GraphObject.make;
			var myDiagram = 
				$ (go.Diagram, "myDiagramDiv");	


			myDiagram.add(
				$(go.Part, go.Panel.Vertical,
					{background: "lightgrey", width:140},//this sets the width of the vertical panel so that text isnt clipped
					$(go.TextBlock, "LEFT", {background: "lightgreen", alignment: go.Spot.Left}),
					$(go.TextBlock, "CENTER", {background: "lightgreen", alignment: go.Spot.Center}),
					$(go.TextBlock, "RIGHT", {background: "lightgreen", alignment: go.Spot.Right}),
					$(go.TextBlock, "STRETCH", {background: "lightgreen", stretch: go.GraphObject.Fill})
					));*/
//HORIZONTAL PANELS 
			/*var $ = go.GraphObject.make;
			var myDiagram = 
				$ (go.Diagram, "myDiagramDiv");	

			myDiagram.add(
				$(go.Part, go.Panel.Horizontal,
					{position: new go.Point(0,0), background: "lightgrey"},
					$(go.Shape, { width: 30, fill: "lightgreen", height: 100}),
					$(go.Shape, { width: 30, fill: "lightgreen", height: 50, alignment: go.Spot.Top}),
					$(go.Shape, { width: 30, fill: "lightgreen", height: 50, alignment: go.Spot.Center}),
					$(go.Shape, { width: 30, fill: "lightgreen", height: 50, alignment: go.Spot.Bottom}),
					$(go.Shape, { width: 30, fill: "lightgreen", stretch: go.GraphObject.Fill})//Stretch to fill
					));

			myDiagram.add(
				$(go.Part, go.Panel.Horizontal,
					{position: new go.Point(200, 0), background: "lightgrey", height: 120},//sets a new part
					$(go.Shape, { width: 30, fill: "lightgreen", height: 50, alignment: go.Spot.Top}),
					$(go.Shape, { width: 30, fill: "lightgreen", height: 50, alignment: go.Spot.Center}),
					$(go.Shape, { width: 30, fill: "lightgreen", height: 50, alignment: go.Spot.Bottom}),
					$(go.Shape, { width: 30, fill: "lightgreen", stretch: go.GraphObject.Fill})
					));*/
//FILLING HORIZONTAL AND VERTICAL PANELS IN OPPOSITE DIRECTION
			/*var $ = go.GraphObject.make;
			var myDiagram = 
				$ (go.Diagram, "myDiagramDiv");

			myDiagram.add(
				$(go.Part, "Horizontal",
					{background: "lightblue", isOpposite: true},//isOpposite allows the data to be put in backwards
					$(go.TextBlock, "0", {margin: 5, background:"lightgrey"}),
					$(go.TextBlock, "1", {margin: 5, background:"lightgrey"}),
					$(go.TextBlock, "2", {margin: 5, background:"lightgrey"}),
					$(go.TextBlock, "3", {margin: 5, background:"lightgrey"}),
					$(go.TextBlock, "4", {margin: 5, background:"lightgrey"}),
					$(go.TextBlock, "5", {margin: 5, background:"lightgrey"})
					));

			myDiagram.add(
				$(go.Part, "Vertical",
					{background: "lightblue", isOpposite: true},//printed 5,4,3,2,1,0
					$(go.TextBlock, "0", {margin: 5, background:"lightgrey"}),
					$(go.TextBlock, "1", {margin: 5, background:"lightgrey"}),
					$(go.TextBlock, "2", {margin: 5, background:"lightgrey"}),
					$(go.TextBlock, "3", {margin: 5, background:"lightgrey"}),
					$(go.TextBlock, "4", {margin: 5, background:"lightgrey"}),
					$(go.TextBlock, "5", {margin: 5, background:"lightgrey"})
					));

			myDiagram.add(
				$(go.Part, "Vertical",
					{background: "lightblue", isOpposite: false},//to see the comparison, printed 0,1,2,3,4,5
					$(go.TextBlock, "0", {margin: 5, background:"lightgrey"}),
					$(go.TextBlock, "1", {margin: 5, background:"lightgrey"}),
					$(go.TextBlock, "2", {margin: 5, background:"lightgrey"}),
					$(go.TextBlock, "3", {margin: 5, background:"lightgrey"}),
					$(go.TextBlock, "4", {margin: 5, background:"lightgrey"}),
					$(go.TextBlock, "5", {margin: 5, background:"lightgrey"})
					));*/
//DEFAULT ALIGNMENT AND STRETCH
			/*var $ = go.GraphObject.make;
			var myDiagram = 
				$ (go.Diagram, "myDiagramDiv");

			myDiagram.add(
				$(go.Part, "Horizontal",
					{background: "lightgrey", height: 90, defaultAlignment: go.Spot.Bottom},//sets the default position to the bottom
					$(go.Shape, { width: 30, margin: 2, fill: "lightgreen", height: 60}),//creates a barchart looking diagram
					$(go.Shape, { width: 30, margin: 2, fill: "lightgreen", height: 50}),
					$(go.Shape, { width: 30, margin: 2, fill: "lightgreen", height: 40}),
					$(go.Shape, { width: 30, margin: 2, fill: "lightgreen", height: 30}),
					$(go.Shape, { width: 30, margin: 2, fill: "lightgreen", height: 90}),
					));*/
//SPOTS
			/*var $ = go.GraphObject.make;
			var myDiagram = 
				$ (go.Diagram, "myDiagramDiv");

			myDiagram.add(
				$(go.Part, go.Panel.Spot,
					$(go.Shape, "Rectangle",
						{fill: "lightgreen", stroke: "Red", width: 100, height: 50}),
					$(go.TextBlock, "0,0",	   {alignment: new go.Spot(0, 0)}),//creates a coordinate system within the shape, allowing certain points to be aligned
					$(go.TextBlock, "0.5,0",   {alignment: new go.Spot(0.5, 0)}),
					$(go.TextBlock, "1,0",	   {alignment: new go.Spot(1, 0)}),
					$(go.TextBlock, "0,0.5",   {alignment: new go.Spot(0, 0.5) }),
      				$(go.TextBlock, "0.5,0.5", {alignment: new go.Spot(0.5, 0.5) }),
      				$(go.TextBlock, "1,0.5",   {alignment: new go.Spot(1, 0.5) }),
      				$(go.TextBlock, "0,1",     {alignment: new go.Spot(0, 1) }),
      				$(go.TextBlock, "0.5,1",   {alignment: new go.Spot(0.5, 1) }),
     				$(go.TextBlock, "1,1",     {alignment: new go.Spot(1, 1) })
					));*/
//AUTO PANELS 
			/*var $ = go.GraphObject.make;
			var myDiagram = 
				$ (go.Diagram, "myDiagramDiv");

			//Auto Elements where no margin has been suggested showing how elements are created to fit snuggly
			myDiagram.add(
				$(go.Part, "Auto",
					{position: new go.Point(0,0), background: "lightgrey"},//This shows how the need for margin is required as it just about makes elements big enough to fit within the border
					$(go.Shape, "Rectangle", {fill: "lightgreen"}),
					$(go.TextBlock, "I Have a Big Penis", {background: "yellow"})
					));
			myDiagram.add(
				$(go.Part, "Auto",
					{position: new go.Point(100,0), background: "lightgrey"},
					$(go.Shape, "RoundedRectangle", {fill: "lightgreen"}),
					$(go.TextBlock, "I Have a Tiny Penis", {background: "yellow"})
					));
			myDiagram.add(
				$(go.Part, "Auto",
					{position: new go.Point(200,0), background: "lightgrey"},
					$(go.Shape, "Ellipse", {fill: "lightgreen"}),
					$(go.TextBlock, "I have a Micro-Penis", {background: "yellow"})
					));

			//This uses margins to make elements fit better and prvide more room by adding a margin
			myDiagram.add(
				$(go.Part, "Auto",
					{position: new go.Point(200,0), background: "lightgrey"},
					$(go.Shape, "Ellipse", {fill: "lightgreen"}),
					$(go.TextBlock, "I have a Micro-Penis", {margin: 2, background: "yellow"})
					));
			myDiagram.add(
				$(go.Part, "Auto",
					{position: new go.Point(100,0), background: "lightgrey"},
					$(go.Shape, "RoundedRectangle", {fill: "lightgreen"}),
					$(go.TextBlock, "I Have a Tiny Penis", {margin: 2, background: "yellow"})
					));
			myDiagram.add(
				$(go.Part, "Auto",
					{position: new go.Point(0,0), background: "lightgrey"},
					$(go.Shape, "Rectangle", {fill: "lightgreen"}),
					$(go.TextBlock, "I Have a Big Penis", {margin: 2, background: "yellow"})
					));*/

//BRUSHES-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
			/*var $ = go.GraphObject.make;
			var myDiagram = 
				$(go.Diagram, "myDiagramDiv");

			myDiagram.add($(go.Part,
				$(go.Shape, "Circle", 
					{fill: $(go.Brush, { color: "palegreen"})
				})
			));

			myDiagram.add($(go.Part,
				$(go.Shape, "Circle",
					{fill: "palegreen"
				})
			));*/

//SIZING GRAPHOBJECTS ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
			/*var $ = go.GraphObject.make;
			var myDiagram = 
				$(go.Diagram, "myDiagramDiv");

			 myDiagram.add(
    $(go.Part,
      $(go.Panel, "Table",
        { defaultAlignment: go.Spot.Left },
        $(go.RowColumnDefinition, { column: 0, width: 200 }),
        $(go.RowColumnDefinition, { column: 1, width: 15 }),
        $(go.Shape, "Rectangle",
          { row: 0, column: 0, fill: "green",
            width: 100, height: 20 }),
        $(go.TextBlock, { row: 0, column: 2,
                          text: "desiredSize: 100x20, no minSize, no maxSize" }),
        $(go.Shape, "Rectangle",
          { row: 1, column: 0, fill: "red",
            width: 100, height: 20,
            minSize: new go.Size(150, 10) }),
        $(go.TextBlock, { row: 1, column: 2,
                          text: "desired: 100x20, min: 150x10" }),
        $(go.Shape, "Rectangle",
          { row: 2, column: 0, fill: "yellow",
            width: 100, height: 20,
            maxSize: new go.Size(50, 300) }),
        $(go.TextBlock, { row: 2, column: 2,
                          text: "desired: 100x20, max: 50x300" }),
        $(go.Shape, "Rectangle",
          { row: 3, column: 0, fill: "red",
            width: 100, height: 20,
            minSize: new go.Size(150, 10), maxSize: new go.Size(50, 300) }),
        $(go.TextBlock, { row: 3, column: 2,
                          text: "desired: 100x20, min: 150x10, max: 50x300" })
      )
    ));*/

//USING MODELS AND TEMPLATES ---------------------------------------------------------------------------------------------------------------------------------------------------------------------
		/*var $ = go.GraphObject.make;
			var myDiagram = 
				$(go.Diagram, "myDiagramDiv");

		var node1 = //creation of the first node
		$(go.Node, "Auto", //setting its personalisations
			$(go.Shape, {figure: "RoundedRectangle", fill: "lightgreen"}),
			$(go.TextBlock, {text: "Wall One", margin: 5}))
		myDiagram.add(node1);//adding it to the diagram

		var node2= //creation of the second node
		$(go.Node, "Auto",
			$(go.Shape, {figure: "RoundedRectangle", fill: "lightblue"}),
			$(go.TextBlock, {text: "Wall Two", margin: 5}))
		myDiagram.add(node2);//adding it to the diagram 

		myDiagram.add(
			$(go.Link, {fromNode: node1, toNode: node2},//adding the link between the two nodes. 
				$(go.Shape)
				));*/
//USING LINK AND DATA ARRAYS
		/*var $ = go.GraphObject.make;
			var myDiagram = 
				$(go.Diagram, "myDiagramDiv");

		var nodeDataArray = [//node array, sets the keys with their reference text
			{ key: "Node One"},
			{ key: "Node Two"},
			{ key: "Node Three"},
			{ key: "Node Four"},
			{ key: "Node Five"}
		];

		var linkDataArray = [//lnik arrays, sets from and to with reference to nodes
			{ from: "Node One", to: "Node Two" },
			{ from: "Node Two", to: "Node Three"},
			{ from: "Node Three", to: "Node Four"},
			{ from: "Node Four", to: "Node Five"}
		];

		myDiagram.model = new go.GraphLinksModel(nodeDataArray, linkDataArray);*/

//USING NODE TEMPLATES AND LINK/DATA ARRAYS
		/*var $ = go.GraphObject.make;
			var myDiagram = 
				$(go.Diagram, "myDiagramDiv");

		myDiagram.nodeTemplate = //Provide a custom Node Appearance
			$(go.Node, "Auto",
				$(go.Shape, {figure: "Rectangle", fill: "white"}),
					$(go.TextBlock, {text: "Wall One", margin: 5})
					);

		var nodeDataArray = [//node array, sets the keys with their reference text
			{ key: "Node One"},
			{ key: "Node Two"},//here the keys merely act as a variable 
			{ key: "Node Three"},
			{ key: "Node Four"},
			{ key: "Node Five"}
		];

		var linkDataArray = [//lnik arrays, sets from and to with reference to nodes
			{ from: "Node One", to: "Node Two" },
			{ from: "Node Two", to: "Node Three"},
			{ from: "Node Three", to: "Node Four"},
			{ from: "Node Four", to: "Node Five"}
		];

		myDiagram.model = new go.GraphLinksModel(nodeDataArray, linkDataArray);*/
		//It is important to note that the nodes have not been parameterised - they are identical. this parameterisation by using data binding

//PARAMETERISING NODES USING DATA BINDING !IMPORTANT!
		/*var $ = go.GraphObject.make;
			var myDiagram = 
				$(go.Diagram, "myDiagramDiv");

		myDiagram.nodeTemplate =
			$(go.Node, "Auto",
				$(go.Shape,
					{figure: "Rectangle", fill: "white"},//sets the shape and default fill colour
					new go.Binding("fill", "color")),//creates a new binding which takes the text and then the colour when defined in nodeDataArray
				$(go.TextBlock,//sets the text within the block
					{margin: 5},
					new go.Binding("text", "key"))//makes the key a text string
				);

		var nodeDataArray = [
			{key: "Wall One", color: "lightgreen"},//sets the key and colour
			{key: "Wall Two"},//just sets the key, uses default fill colour
			{key: "Wall Three", color: "lightgreen"}
		];

		var linkDataArray = [
			{from: "Wall One", to: "Wall Two"},
			{from: "Wall Two", to: "Wall Three"},
			{from: "Wall Three", to: "Wall One"}
		];
		myDiagram.model = new go.GraphLinksModel(nodeDataArray, linkDataArray);*/

//TREE MODEL
		/*var $ = go.GraphObject.make;
			var myDiagram = 
				$(go.Diagram, "myDiagramDiv");

		myDiagram.nodeTemplate = //creates a node template to follow on for the data array
			$(go.Node, "Auto", {resizable: true, rotatable: true},
				$(go.Shape,
					{figure: "Ellipse" },
					new go.Binding("fill", "color")),
				$(go.TextBlock,
					{margin: 5},
					new go.Binding("text", "key"))
			);

		var nodeDataArray = [
			{key: "Alpha", color: "lightgreen"},
			{key: "Beta", parent: "Alpha", color: "yellow"},
			{key: "Gamma", parent: "Alpha", color: "orange"},
			{key: "Delta", parent: "Alpha", color: "lightgreen"}
		];
		myDiagram.model = new go.TreeModel(nodeDataArray);//set the model to TreeModel
		myDiagram.grid.visible = true;
 		myDiagram.toolManager.draggingTool.isGridSnapEnabled = true;
  		myDiagram.toolManager.resizingTool.isGridSnapEnabled = true;*/

//DATA BINDING --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//BINDING STRING AND NUMBER PROPERTIES & USE OF BINDING OF OBJECTS VIA LOCATION

		/*var $ = go.GraphObject.make;
			var myDiagram = 
				$(go.Diagram, "myDiagramDiv");

		myDiagram.nodeTemplate =
    		$(go.Node, "Auto",
    			new go.Binding("location", "loc"),
      			$(go.Shape, "RoundedRectangle",
        			{ fill: "white" },
        			new go.Binding("fill", "color")),  // shape.fill = data.color
      			$(go.TextBlock,
        			{ margin: 5 },
        			new go.Binding("text", "key"))  // textblock.text = data.key
    		);

  		myDiagram.linkTemplate =
    		$(go.Link,
      			$(go.Shape,
        			new go.Binding("stroke", "color"),  // shape.stroke = data.color
        			new go.Binding("strokeWidth", "thick")),  // shape.strokeWidth = data.thick
      			$(go.Shape,
        			{ toArrow: "OpenTriangle", fill: null },
        			new go.Binding("stroke", "color"),  // shape.stroke = data.color
        			new go.Binding("strokeWidth", "thick"))  // shape.strokeWidth = data.thick
    );

  var nodeDataArray = [
    { key: "Alpha", color: "lightblue", loc: new go.Point(100,50) },
    { key: "Beta", color: "pink", loc: new go.Point(400,200) }
  ];
  var linkDataArray = [
    { from: "Alpha", to: "Beta", color: "blue", thick: 2 }
  ];
  myDiagram.model = new go.GraphLinksModel(nodeDataArray, linkDataArray);*/

//BINDING BY CONVERSION FUNCTIONS - LOCATION TO POINT 
		/*var $ = go.GraphObject.make;
			var myDiagram = 
				$(go.Diagram, "myDiagramDiv");

		myDiagram.nodeTemplate =
			$(go.Node, "Auto",
				new go.Binding("location", "loc", go.Point.parse),
				$(go.Shape, "Rectangle",
					{fill: "yellow", stroke: "orange", strokeWidth: 2},//sets the default values to orange and yellow
					new go.Binding("fill", "highlight", function(v) {return v ? "pink" : "lightgrey"; }),//if true returns the pink colour, hence why Beta is pink and Alpha blue
					new go.Binding("stroke", "highlight", function(v) {return v ? "red" : "blue"; }),//if true returns red stroke, hency why Beta is red and alpha is blue
					new go.Binding("strokeWidth", "highlight", function(v) {return v ? 3 : 1; })),//sets the width depending on true/false
				$(go.TextBlock,
					{margin: 5},
					new go.Binding("text", "key"))
				);

			var nodeDataArray = [
				{key: "Alpha", loc: "100 0", highlight: false},//sets location by parsing point into loc
				{key: "Beta", loc: "100 50", highlight: true},
				{key: "Gamma", loc: "400, 200"}
			];

			var linkDataArray = [
				{from: "Alpha", to: "Beta"},
				{from: "Beta", to: "Gamma"}
			]; 
			myDiagram.model = new go.GraphLinksModel(nodeDataArray, linkDataArray);*/
//WHEN SELECTED THE PART TURNS BLUE USE THIS FOR DISSERTATION
			/*var $ = go.GraphObject.make;
			var myDiagram = 
				$(go.Diagram, "myDiagramDiv");

			 myDiagram.nodeTemplate =
   				$(go.Node, "Auto",
   				{selectionAdorned: false},
     				$(go.Shape, "Rectangle",
        				{ fill: "white", stroke: "black", strokeWidth: 2 },
        				new go.Binding("fill", "isSelected", function(sel) {
              				return sel ? "gray" : "lightgray";
            				}).ofObject()),
      				$(go.TextBlock,		
       					{ margin: 5 },
        				new go.Binding("text", "descr"))
    		);

  			myDiagram.model.nodeDataArray = [
    			{ descr: "Select me!"},
    			{ descr: "I turn blue when selected." }
  			];*/

//WORKING PALLETE USE THIS FOR DISSERTATION!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!--------------------------------------------------------------------------------
			/*var $ = go.GraphObject.make;
			var diagram = 
				$(go.Diagram, "myDiagramDiv");

			diagram.allowDrop = true;  // permit accepting drag-and-drops

  diagram.nodeTemplate =
    $(go.Node, "Auto",
      $(go.Shape, "Rectangle",
        { fill: "white" },
        new go.Binding("fill", "color"),
        { portId: "", fromLinkable: true, toLinkable: true, cursor: "pointer" }),
      $(go.TextBlock, { margin: 5 },
        new go.Binding("text", "key"))
    );

  // start off with no Parts
  diagram.undoManager.isEnabled = true;

  // create the Palette
  var myPalette =
    $(go.Palette, "myPaletteDiv");

  // the Palette's node template is different from the main Diagram's
  myPalette.nodeTemplate =
    $(go.Node, "Horizontal",
      $(go.Shape,
        { width: 14, height: 14, fill: "white" },
        new go.Binding("fill", "color")),
      $(go.TextBlock,
        new go.Binding("text", "color"))
    );

  // the list of data to show in the Palette
  myPalette.model.nodeDataArray = [
    { key: "C", color: "cyan" },
    { key: "LC", color: "lightcyan" },
    { key: "A", color: "aquamarine" },
    { key: "T", color: "turquoise" },
    { key: "PB", color: "powderblue" },
    { key: "LB", color: "lightblue" },
    { key: "LSB", color: "lightskyblue" },
    { key: "DSB", color: "deepskyblue" }
  ];*/

 










//RULERED DIAGRAM USE THIS FOR MY DISSERTATION!!!!!!!!!!!!!!!!!!!!!!!!!!!------------------------------------------------------------------------------------------------------!!!!!!!!!!!!!!!!!!!!!!
	/*
    var $ = go.GraphObject.make;  // for conciseness in defining templates

    myDiagram = 
      $(go.Diagram, "myDiagramDiv",  // create a Diagram for the DIV HTML element
        {
          initialContentAlignment: go.Spot.Center,  // center the content
          "undoManager.isEnabled": true,  // enable undo & redo
          scrollMode: go.Diagram.InfiniteScroll,  // allow the diagram to be scrolled beyond content
          padding: 0,  // scales should be allowed right up against the edges of the viewport
          "grid.visible": true
        });

    myDiagram.nodeTemplate =
      $(go.Node, "Auto",
        $(go.Shape, "RoundedRectangle",
        { strokeWidth: 0, portId: "", fromLinkable: true, toLinkable: true },
          new go.Binding("fill", "color")),
        $(go.TextBlock,
          { margin: 8 },
          new go.Binding("text", "key"))
      );

    myDiagram.model = new go.GraphLinksModel(
    [
      { key: "Alpha", color: "lightblue" },
      { key: "Beta", color: "orange" },
      { key: "Gamma", color: "lightgreen" },
      { key: "Delta", color: "pink" }
    ],
    [
      { from: "Alpha", to: "Beta" },
      { from: "Alpha", to: "Gamma" },
      { from: "Beta", to: "Beta" },
      { from: "Gamma", to: "Delta" },
      { from: "Delta", to: "Alpha" }
    ]);

    // Keep references to the scales and indicators to easily update them
    var gradScaleHoriz = 
      $(go.Node, "Graduated",
        { 
          graduatedTickUnit: 10, pickable: false, layerName: "Foreground",
          isInDocumentBounds: false, isAnimated: false
        },
        $(go.Shape, { geometryString: "M0 0 H400" }),
        $(go.Shape, { geometryString: "M0 0 V3", interval: 1 }),
        $(go.Shape, { geometryString: "M0 0 V15", interval: 5 }),
        $(go.TextBlock, 
          { 
            font: "10px sans-serif",
            interval: 5,
            alignmentFocus: go.Spot.TopLeft,
            segmentOffset: new go.Point(0, 7)
          }
        )
      );
    
    var gradScaleVert = 
      $(go.Node, "Graduated",
        { 
          graduatedTickUnit: 10, pickable: false, layerName: "Foreground",
          isInDocumentBounds: false, isAnimated: false
        },
        $(go.Shape, { geometryString: "M0 0 V400" }),
        $(go.Shape, { geometryString: "M0 0 V3", interval: 1, alignmentFocus: go.Spot.Bottom }),
        $(go.Shape, { geometryString: "M0 0 V15", interval: 5, alignmentFocus: go.Spot.Bottom }),
        $(go.TextBlock, 
          { 
            font: "10px sans-serif",
            segmentOrientation: go.Link.OrientOpposite,
            interval: 5,
            alignmentFocus: go.Spot.BottomLeft,
            segmentOffset: new go.Point(0, -7)
          }
        )
      );

    // These indicators are globally defined so they can be accessed by the div's mouseevents
    gradIndicatorHoriz = 
      $(go.Node,
        { 
          pickable: false, layerName: "Foreground", visible: false,
          isInDocumentBounds: false, isAnimated: false,
          locationSpot: go.Spot.Top
        },
        $(go.Shape, { geometryString: "M0 0 V15", strokeWidth: 2, stroke: "red" })
      );

    gradIndicatorVert = 
      $(go.Node,
        { 
          pickable: false, layerName: "Foreground", visible: false,
          isInDocumentBounds: false, isAnimated: false,
          locationSpot: go.Spot.Left
        },
        $(go.Shape, { geometryString: "M0 0 H15", strokeWidth: 2, stroke: "red" })
      );

    // Add listeners to keep the scales/indicators in sync with the viewport
    myDiagram.addDiagramListener("InitialLayoutCompleted", setupScalesAndIndicators);
    myDiagram.addDiagramListener("ViewportBoundsChanged", updateScales);
    myDiagram.addDiagramListener("ViewportBoundsChanged", updateIndicators);
    // Override mousemove Tools such that doMouseMove will keep indicators in sync
    myDiagram.toolManager.doMouseMove = function() {
      go.ToolManager.prototype.doMouseMove.call(this);
      updateIndicators();
    }
    myDiagram.toolManager.linkingTool.doMouseMove = function() {
      go.LinkingTool.prototype.doMouseMove.call(this);
      updateIndicators();
    }
    myDiagram.toolManager.draggingTool.doMouseMove = function() {
      go.DraggingTool.prototype.doMouseMove.call(this);
      updateIndicators();
    }
    myDiagram.toolManager.dragSelectingTool.doMouseMove = function() {
      go.DragSelectingTool.prototype.doMouseMove.call(this);
      updateIndicators();
    }
    // No need to override PanningTool since the ViewportBoundsChanged listener will fire

    function setupScalesAndIndicators() {
      var vb = myDiagram.viewportBounds;
      myDiagram.startTransaction("add scales");
      updateScales();
      // Add each node to the diagram
      myDiagram.add(gradScaleHoriz);
      myDiagram.add(gradScaleVert);
      myDiagram.add(gradIndicatorHoriz);
      myDiagram.add(gradIndicatorVert);
      myDiagram.commitTransaction("add scales");
    }

    function updateScales() {
      var vb = myDiagram.viewportBounds;
      myDiagram.startTransaction("update scales");
      // Update properties of horizontal scale to reflect viewport
      gradScaleHoriz.location = new go.Point(vb.x, vb.y);
      gradScaleHoriz.graduatedMin = vb.x;
      gradScaleHoriz.graduatedMax = vb.x + vb.width;
      gradScaleHoriz.elt(0).width = vb.width;
      // Update properties of vertical scale to reflect viewport
      gradScaleVert.location = new go.Point(vb.x, vb.y);
      gradScaleVert.graduatedMin = vb.y;
      gradScaleVert.graduatedMax = vb.y + vb.height;
      gradScaleVert.elt(0).height = vb.height;
      myDiagram.commitTransaction("update scales");
    }

    function updateIndicators() {
      var vb = myDiagram.viewportBounds;
      var mouseCoords = myDiagram.lastInput.documentPoint;
      myDiagram.startTransaction("update indicators");
      // Keep the indicators in line with the mouse as viewport changes or mouse moves
      gradIndicatorHoriz.location = new go.Point(Math.max(mouseCoords.x, vb.x), vb.y);
      gradIndicatorVert.location = new go.Point(vb.x, Math.max(mouseCoords.y, vb.y));
      myDiagram.commitTransaction("update indicators");
      
    }
  }

  // Show indicators on mouseover of the diagram div
  function showIndicators() {
    myDiagram.startTransaction("show indicators");
    gradIndicatorHoriz.visible = true;
    gradIndicatorVert.visible = true;
    myDiagram.commitTransaction("show indicators");
  }

  // Hide indicators on mouseout of the diagram div
  function hideIndicators() {
    myDiagram.startTransaction("hide indicators");
    gradIndicatorHoriz.visible = false;
    gradIndicatorVert.visible = false;
    myDiagram.commitTransaction("hide indicators");
    
}*/

//TESTESTESTESTESTESTESTEST
 var $ = go.GraphObject.make;//Always required at the start of a diagram

 	//CREATING A DIAGRAM
 	 myDiagram = 
      $(go.Diagram, "myDiagramDiv",  // create a Diagram for the DIV HTML element
        {
           //Initial Diagram Settings
          initialContentAlignment: go.Spot.Default, // center the content
          draggingTool: new GuidedDraggingTool(),//create a new draggingtool function called draggingTool
          rotatingTool: $(TopRotatingTool),// defined below
          "undoManager.isEnabled": true,  // enable undo & redo

          //DraggingTool Settings
          "draggingTool.horizontalGuidelineColor": "blue",//set dragging tool colours
          "draggingTool.verticalGuidelineColor": "blue",
          "draggingTool.centerGuidelineColor": "green",
          "draggingTool.guidelineWidth": 1,//set its width
          "draggingTool.isGridSnapEnabled": true,//enable grid snapping
          "resizingTool.isGridSnapEnabled": true,
          //"draggingTool.gridSnapCellSize": new go.Size(5,5),
          //RotatingTool Settings
		  "rotatingTool.snapAngleMultiple": 5,//set the rotation angles, every 5 degrees
          "rotatingTool.snapAngleEpsilon": 5,
  		  //MISC Settings
          scrollMode: go.Diagram.InfiniteScroll,  // allow the diagram to be scrolled beyond content
          padding: 0,  // scales should be allowed right up against the edges of the viewport
       });



//DEVELOPING A DOOR NODE USING GEOMETRY STRINGS - DOORNODERIGHT
	 	var doorNodeRight = "F M0 0 L50 0 V5 H0 V0 H5" + "F M0 5 V50 B90 -90 0 5 50 45z";
	 	var doorNodeLeft = "F M0 0 L50 0 V5 H0 V0 H5" + "F M0 5 V50 B90 -90 0 5 50 45z";

 		var DoorNode = go.Geometry.parse(doorNodeRight);//parses geometry string
 		var DoorNodeLeft = go.Geometry.parse(doorNodeLeft);

 		DoorNode.normalize();
		DoorNodeLeft.normalize();

		go.Shape.defineFigureGenerator("DoorNodeRight", function(shape, w, h){//A function to define the previous geometry as an actual figure: "DoorNodeRight"
			var geo = DoorNode.copy();//create a copy
			geo.scale(1, -1);//flips the image the correct way
			return geo; //returns the figure
		});


//DEVELOPING A DOOR NODE USING GEOMETRY STRINGS - DOORNODELEFT
		
		

		go.Shape.defineFigureGenerator("DoorNodeLeft", function(shape, w, h){
			var geo2 = DoorNodeLeft.copy();
			geo2.scale(-1, 1);
			geo2.scale(1, -1);
			
			return geo2; 
		});

   		//More MyDiagram Settings
    	myDiagram.grid.visible = true;
        myDiagram.grid.gridCellSize = new go.Size(5,5);
	    myDiagram.allowDrop = true;
	    myDiagram.commandHandler.selectAll();

	    defaultWallHeight = "240";

	    var txtHeight = document.getElementById("num1");
	    txtHeight.value = defaultWallHeight;


myDiagram.addDiagramListener("PartResized", function (shp) {
	document.getElementById("num2").value = "";
	var txtWidth = document.getElementById("num2");
	txtWidth.value = txtWidth.value + shp.subject.width;
    //alert(shp.subject.width);
});

myDiagram.addDiagramListener("ObjectSingleClicked", function (shp){
	document.getElementById("num2").value = "";
	var txtWidth = document.getElementById("num2");
	txtWidth.value = txtWidth.value + shp.subject.width;
}); 

myDiagram.doFocus = function() {
  var x = window.scrollX || window.pageXOffset;
  var y = window.scrollY || window.pageYOffset;
  go.Diagram.prototype.doFocus.call(this);
  window.scrollTo(x, y);
}





//CREATING A NODE TEMPLATE, THIS ONE ADDS A DEFAULT SHAPE WITH DEFAULT SETTINGS AND PERSONALISATIONS - USED FOR WALLS
myDiagram.nodeTemplateMap.add("",
	$(go.Node, "Spot",
		{resizable: true, resizeObjectName: "SHAPE", rotatable: true, locationSpot: go.Spot.Top,
		 resizeAdornmentTemplate:
			$(go.Adornment, "Spot",//set an adornment
            	$(go.Placeholder),  // takes size and position of adorned object
            		$(go.Shape, "Circle",  // creates left resize handle
              			{alignment: go.Spot.Left, cursor: "col-resize",//sets the spot to the left and sets cursor
                		desiredSize: new go.Size(9, 9), fill: "lightblue", stroke: "dodgerblue" }),//sets its size, and colour
            		$(go.Shape, "Circle",  // creates right resize handle
              			{alignment: go.Spot.Right, cursor: "col-resize",
                		desiredSize: new go.Size(9, 9), fill: "lightblue", stroke: "dodgerblue" }),
            				$(go.TextBlock, //Shows the width of the object as text
              					{alignment: go.Spot.Top, alignmentFocus: new go.Spot(0.5, 1),//sets its position above figure
                				stroke: "black" },
              					new go.Binding("text", "adornedObject",
                             		function(shp) { return shp.naturalBounds.width.toFixed(0); })
                  				.ofObject())
          	),
          		selectionAdorned: false 
		},
		new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
		$(go.Shape, "Rectangle",
			{strokeWidth: 1, fill: "grey", name:"SHAPE", margin: 0},
			new go.Binding("figure", "figure"),//Sets the shapes bindings so they can be changed
			new go.Binding("fill", "fill"),
			new go.Binding("stroke", "stroke"),
			new go.Binding("width", "width"),
			new go.Binding("height", "height")
		),
	));


//CREATING A DOOR NODE - USED FOR DOORNODERIGHT
myDiagram.nodeTemplateMap.add("DoorRight",//Set its category to DoorLeft so when developing model category can be called
	$(go.Node, "Spot",
		{resizable: false, rotatable: true, selectionAdorned: false, locationSpot: go.Spot.Bottom},//Set its personalisations
		$(go.Shape, "DoorNodeRight",//Set its figure
			{stroke: "blue", fill: "blue"},
			new go.Binding("fill", "fill"),
			new go.Binding("stroke", "stroke")
			)));


//CREATING A DOOR NODE - USED FOR DOORNODELEFT
myDiagram.nodeTemplateMap.add("DoorLeft",//Set its category to DoorLeft so when developing model category can be called
	$(go.Node, "Spot",
		{resizable: false, rotatable: true, selectionAdorned: false, locationSpot: go.Spot.Bottom},//Set its personalisations
		$(go.Shape, "DoorNodeLeft",//Set its figure
			{stroke: "blue", fill: "blue"},
			new go.Binding("fill", "fill"),
			new go.Binding("stroke", "stroke")
			)));


myDiagram.nodeTemplateMap.add("InsideWall",
	$(go.Node, "Spot",
		{dragComputation: avoidNodeOverlap, resizable: true, resizeObjectName: "SHAPE", rotatable: true, locationSpot: go.Spot.Top,
		 resizeAdornmentTemplate:
			$(go.Adornment, "Spot",//set an adornment
            	$(go.Placeholder),  // takes size and position of adorned object
            		$(go.Shape, "Circle",  // creates left resize handle
              			{alignment: go.Spot.Left, cursor: "col-resize",//sets the spot to the left and sets cursor
                		desiredSize: new go.Size(9, 9), fill: "lightblue", stroke: "dodgerblue" }),//sets its size, and colour
            		$(go.Shape, "Circle",  // creates right resize handle
              			{alignment: go.Spot.Right, cursor: "col-resize",
                		desiredSize: new go.Size(9, 9), fill: "lightblue", stroke: "dodgerblue" }),
            				$(go.TextBlock, //Shows the width of the object as text
              					{alignment: go.Spot.Top, alignmentFocus: new go.Spot(0.5, 1),//sets its position above figure
                				stroke: "black" },
              					new go.Binding("text", "adornedObject",
                             		function(shp) { return shp.naturalBounds.width.toFixed(0); })
                  				.ofObject())
          	),
          		selectionAdorned: false 
		},
		new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
		$(go.Shape, "Rectangle",
			{strokeWidth: 1, fill: "grey", name:"SHAPE", margin: 0},
			new go.Binding("figure", "figure"),//Sets the shapes bindings so they can be changed
			new go.Binding("fill", "fill"),
			new go.Binding("stroke", "stroke"),
			new go.Binding("width", "width"),
			new go.Binding("height", "height")
		),
	));




//THE PALETTE WHICH SHOWS ALL THE NODES WHICH CAN BE DRAGGED ONTO THE DIAGRAM
   	myPalette = new go.Palette("myPaletteDiv");//Create a new palette
    myPalette.nodeTemplateMap = myDiagram.nodeTemplateMap;//Set the palette  node template to the diagram node template
    myPalette.model = new go.GraphLinksModel([//Create a new palette model 
    	{category: "", fill: "grey", stroke: "grey", width: 160, height: 10},//The Wall
    	{category: "", stroke: "black", figure: "LineH", width: 100, height: 10},//window element
    	{category: "InsideWall", fill: "white", stroke: "white", width: 70, height: 10},
    	{category: "DoorLeft", fill: "white", stroke: "black"},
    	{category: "DoorRight", fill: "white", stroke: "black"}//The Right Door Model
    	]);

/*Context Menu - NEEDS REVISING
  myDiagram.contextMenu = $(go.HTMLInfo, {
  	show: showContextMenu,
  	hide: hideContextMenu
  });

  function showContextMenu(obj, diagram, tool){
  	SomeDOMElement.style.display = "block";
  }

  function hideContextMenu(){
  	SomeDOMElement.style.display = "none";
  }

  function buttonClick(){
  	myDiagram.currentTool.stopTool();
  }*/



//THE SNAPPING LINES ICONS
    var gradScaleHoriz = //Creation of the horizontal lines when objects are close
      $(go.Node, "Graduated",
        { 
          graduatedTickUnit: 10, pickable: false, layerName: "Foreground",
          isInDocumentBounds: false, isAnimated: false
        },
        $(go.Shape, { geometryString: "M0 0 H400" }),//creates simple lines using geometry strings
        $(go.Shape, { geometryString: "M0 0 V3", interval: 1 }),
        $(go.Shape, { geometryString: "M0 0 V15", interval: 5 }),
        $(go.TextBlock, 
          { 
            font: "10px sans-serif",
            interval: 5,
            alignmentFocus: go.Spot.TopLeft,
            segmentOffset: new go.Point(0, 7)
          }
        )
      );
    
    var gradScaleVert = //Creation of the vertical lines when objects are being aligned
      $(go.Node, "Graduated",
        { 
          graduatedTickUnit: 10, pickable: false, layerName: "Foreground",
          isInDocumentBounds: false, isAnimated: false
        },
        $(go.Shape, { geometryString: "M0 0 V400" }),
        $(go.Shape, { geometryString: "M0 0 V3", interval: 1, alignmentFocus: go.Spot.Bottom }),
        $(go.Shape, { geometryString: "M0 0 V15", interval: 5, alignmentFocus: go.Spot.Bottom }),
        $(go.TextBlock, 
          { 
            font: "10px sans-serif",
            segmentOrientation: go.Link.OrientOpposite,
            interval: 5,
            alignmentFocus: go.Spot.BottomLeft,
            segmentOffset: new go.Point(0, -7)
          }
        )
      );

    // These indicators are globally defined so they can be accessed by the div's mouseevents
    gradIndicatorHoriz = 
      $(go.Node,
        { 
          pickable: false, layerName: "Foreground", visible: false,
          isInDocumentBounds: false, isAnimated: false,
          locationSpot: go.Spot.Top
        },
        $(go.Shape, { geometryString: "M0 0 V15", strokeWidth: 2, stroke: "red" })
      );

    gradIndicatorVert = 
      $(go.Node,
        { 
          pickable: false, layerName: "Foreground", visible: false,
          isInDocumentBounds: false, isAnimated: false,
          locationSpot: go.Spot.Left
        },
        $(go.Shape, { geometryString: "M0 0 H15", strokeWidth: 2, stroke: "red" })
      );

    // Add listeners to keep the scales/indicators in sync with the viewport
    myDiagram.addDiagramListener("InitialLayoutCompleted", setupScalesAndIndicators);
    myDiagram.addDiagramListener("ViewportBoundsChanged", updateScales);
    myDiagram.addDiagramListener("ViewportBoundsChanged", updateIndicators);
    // Override mousemove Tools such that doMouseMove will keep indicators in sync
    myDiagram.toolManager.doMouseMove = function() {
      go.ToolManager.prototype.doMouseMove.call(this);
      updateIndicators();
    }
    myDiagram.toolManager.linkingTool.doMouseMove = function() {
      go.LinkingTool.prototype.doMouseMove.call(this);
      updateIndicators();
    }
    myDiagram.toolManager.draggingTool.doMouseMove = function() {
      go.DraggingTool.prototype.doMouseMove.call(this);
      updateIndicators();
    }
    myDiagram.toolManager.dragSelectingTool.doMouseMove = function() {
      go.DragSelectingTool.prototype.doMouseMove.call(this);
      updateIndicators();
    }
    // No need to override PanningTool since the ViewportBoundsChanged listener will fire

    function setupScalesAndIndicators() {
      var vb = myDiagram.viewportBounds;
      myDiagram.startTransaction("add scales");
      updateScales();
      // Add each node to the diagram
      myDiagram.add(gradScaleHoriz);
      myDiagram.add(gradScaleVert);
      myDiagram.add(gradIndicatorHoriz);
      myDiagram.add(gradIndicatorVert);
      myDiagram.commitTransaction("add scales");
    }

    function updateScales() {
      var vb = myDiagram.viewportBounds;
      myDiagram.startTransaction("update scales");
      // Update properties of horizontal scale to reflect viewport
      gradScaleHoriz.location = new go.Point(vb.x, vb.y);
      gradScaleHoriz.graduatedMin = vb.x;
      gradScaleHoriz.graduatedMax = vb.x + vb.width;
      gradScaleHoriz.elt(0).width = vb.width;
      // Update properties of vertical scale to reflect viewport
      gradScaleVert.location = new go.Point(vb.x, vb.y);
      gradScaleVert.graduatedMin = vb.y;
      gradScaleVert.graduatedMax = vb.y + vb.height;
      gradScaleVert.elt(0).height = vb.height;
      myDiagram.commitTransaction("update scales");
    }

    function updateIndicators() {
      var vb = myDiagram.viewportBounds;
      var mouseCoords = myDiagram.lastInput.documentPoint;
      myDiagram.startTransaction("update indicators");
      // Keep the indicators in line with the mouse as viewport changes or mouse moves
      gradIndicatorHoriz.location = new go.Point(Math.max(mouseCoords.x, vb.x), vb.y);
      gradIndicatorVert.location = new go.Point(vb.x, Math.max(mouseCoords.y, vb.y));
      myDiagram.commitTransaction("update indicators");
      
    }
  }

  // Show indicators on mouseover of the diagram div
  function showIndicators() {
    myDiagram.startTransaction("show indicators");
    gradIndicatorHoriz.visible = true;
    gradIndicatorVert.visible = true;
    myDiagram.commitTransaction("show indicators");
  }

  // Hide indicators on mouseout of the diagram div
  function hideIndicators() {
    myDiagram.startTransaction("hide indicators");
    gradIndicatorHoriz.visible = false;
    gradIndicatorVert.visible = false;
    myDiagram.commitTransaction("hide indicators");
    
}


//CREATE THE ROTATING TOOL TO SNAP TO GRID
function TopRotatingTool() {//creation of the rotating tool this allows grid snapping through angles of 5 degrees
    go.RotatingTool.call(this);
  }
  go.Diagram.inherit(TopRotatingTool, go.RotatingTool);

  TopRotatingTool.prototype.updateAdornments = function(part) {
    go.RotatingTool.prototype.updateAdornments.call(this, part);
    var adornment = part.findAdornment("Rotating");
    if (adornment !== null) {
      adornment.location = part.rotateObject.getDocumentPoint(new go.Spot(0.5, 0, 0, -30));  // above middle top
    }
  };

  TopRotatingTool.prototype.rotate = function(newangle) {
    go.RotatingTool.prototype.rotate.call(this, newangle + 90);
  };
  // end of TopRotatingTool function


//CREATION OF SVG CONVERTER SO USER CAN USE THE APP JUST TO MAKE A PRINT OUT, ADDITIONAL OPTION
function makeSVG() {//Needs editing to make a larger SVG Image opened on a new window
    var svg = myDiagram.makeSvg({//creates a new svg variable 
        scale: 0.5//sets the scale to half its original size
      });
    svg.style.border = "1px solid black";//sets svg properties
    obj = document.getElementById("SVGArea");// stores it in the found div
    obj.appendChild(svg);//appends the svg image
    if (obj.children.length > 0) {//replaces when something has changed
      obj.replaceChild(svg, obj.children[0]);
    }
}

//CREATING A TOOL SO THAT NODES WONT OVERLAP UNSURE IF I NEED THIS AT THIS TIME
function isUnoccupied(r, node){
	var diagram = node.diagram;

	function navig(obj) {
		var part = obj.part;
		if (part === node) return null;
		if (part instanceof go.Link) return null; 
		return part; 
	}

	var lit = diagram.layers;
	while (lit.next()) {
		var lay = lit.value;
		if (lay.isTemporary) continue;
		if (lay.findObjectsIn(r, navig, null, true).count > 0) return false;
	}
	return true; 
}


function avoidNodeOverlap(node, pt, gridpt){
	if (node.diagram instanceof go.Palette) return gridpt;
	var bnds = node.actualBounds; 
	var loc = node.location; 

	var r = new go.Rect(gridpt.x - (loc.x - bnds.x), gridpt.y - (loc.y - bnds.y), bnds.width, bnds.height);
	r.inflate(-0.5, -0.5);

	if (!(node.diagram.currentTool instanceof go.DraggingTool) && (!node._temp || !node.layer.isTemporary)){
		node._temp = true;
		while (!isUnoccupied(r, node)){
			r.x += 10;
			r.y += 10;
		}
		r.inflate(0.5, 0.5);
		return new go.Point(r.x - (loc.x - bnds.x), r.y - (loc.y - bnds.y));
	}
	if (isUnoccupied(r, node)) return gridpt;
	return loc;
}



  </script>             
<body onload="goIntro()">
	<div class="row">
	<div class="panel-group" id="accordion">
    	<div class="panel panel-default col-lg-8 col-md-8 col-sm-8 col-xl-8">
      		<div class="panel-heading">
        		<h4 class="panel-title">
          			<a class="accordion-toggle" data-toggle="collapse" href="#collapse1">Calculator</a>
          		</h4>
      		</div>
      	<div id="collapse1" class="panel-collapse collapse">
        	<div class="panel-body">
				<form>
					<div class="formDivide col-lg-6 col-md-6 col-sm-6 col-xl-6">
					<div class="form-group">
						<label for="num1">Height of Wall Section (CM)</label>
							<input type="text" id="num1" class="form-control" placeholder="Height(cm)">
					</div>
					<div class="form-group">
						<label for="num2">Width of Wall Section (CM)</label>
							<input type="text" id="num2" class="form-control" placeholder="Width (cm)">
					</div><hr>
					<div class="form-group">
						<input type="button" onclick="BrickCalc()" class="btn btn-default" value="Brick Calculator"/>
						<input type="button" onclick="MortarCalc()" class="btn btn-default" value="Mortar Calculator"/>
						<input type="button" onclick="PlasterCalc()" class="btn btn-default" value="Plaster Calculator"/>
						<input type="button" onclick="BoardCalc()" class="btn btn-default" value="Plasterboard Calculator"/>
					</div>
					</div>
				</form>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xl-6 pull-right" id="details">Details
					<div id="brickdetails"></div>
				</div>
        	</div>
        		<div class="panel-footer"></div>
      	</div>
    	</div>

    	<div class="panel panel-default col-lg-4 col-md-4 col-sm-4 col-xl-4">
      		<div class="panel-heading">
        		<h4 class="panel-title">
          			<a class="accordion-toggle" data-toggle="collapse" href="#collapse3">Estimator</a>
        		</h4>
      		</div>
      	<div id="collapse3" class="panel-collapse collapse">
        	<div class="panel-body">Panel Body
				<form>
					<label for="num1">Height of Wall Section (CM)</label>
					<input type="text" id="num1" placeholder="Height(cm)">
					<label for="num2">Width of Wall Section (CM)</label>
					<input type="text" id="num2" placeholder="Width (cm)">
					<input type="button" onclick="BrickCalc()" value="Brick Calculator"/>
					<input type="button" onclick="MortarCalc()" value="Mortar Calculator"/>
					<input type="button" onclick="multi()" value="multi"/>
					<input type="button" onclick="div()" value="div"/>
				</form>




        	</div>
        		<div class="panel-footer">Panel Footer</div>
      	</div>

    	</div></div></div>
  	<div class="row">
			<div id="myPaletteDiv" class="Palette col-lg-2 col-md-2 col-sm-2 col-xl-2" style=" height: 300px; width: 16%; background-color: #ffc0cb;">
  					<h2>Build Items</h2>
  					<hr>
			</div>

	<div class="GraphHolder col-lg-10 col-md-10 col-sm-10 col-xl-10">
  		<div id="myDiagramDiv" class="" style="border: solid 1px black; height: 900px; width: 100%; background-color: #ffc0cb;"></div>
  		<!--<div id="myDiagramDiv" style="border: solid 1px black; width:400px; height:400px" onmouseover="showIndicators()" onmouseout="hideIndicators()" style="background-color: #DAE4E4;"></div>-->
	</div>
</div>
	<button onclick="makeSVG()">Render as SVG</button>
  <div id="SVGArea"></div>
  <div id="BDPcalc" class="col-md-12">
  	<?php 
  		include ('BDPcalc.php');
  	?>

  </div> 


</body>
</html>
