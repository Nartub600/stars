<script>
var canvas2, stage, exportRoot;

function initLoader() {
	canvas2 = document.getElementById("canvas2");
	images2 = images2||{};

	var manifest = [
		{src:"images/a.png", id:"a"},
		{src:"images/a2.png", id:"a2"},
		{src:"images/circle.png", id:"circle"},
		{src:"images/d.png", id:"d"},
		{src:"images/d2.png", id:"d2"},
		{src:"images/g.png", id:"g"},
		{src:"images/g2.png", id:"g2"},
		{src:"images/i.png", id:"i"},
		{src:"images/i2.png", id:"i2"},
		{src:"images/l.png", id:"l"},
		{src:"images/l2.png", id:"l2"},
		{src:"images/loader_logo_anim.png", id:"loader_logo_anim"},
		{src:"images/n.png", id:"n"},
		{src:"images/n2.png", id:"n2"},
		{src:"images/o.png", id:"o"},
		{src:"images/o2.png", id:"o2"},
		{src:"images/rays.png", id:"rays"},
		{src:"images/star_01.png", id:"star_01"},
		{src:"images/star_02.png", id:"star_02"}
	];

	var loader = new createjs.LoadQueue(false);
	loader.addEventListener("fileload", loaderFileLoad);
	loader.addEventListener("complete", loaderComplete);
	loader.loadManifest(manifest);
}

function loaderFileLoad(evt) {
	if (evt.item.type == "image") { images2[evt.item.id] = evt.result; }
}

function loaderComplete() {
	exportRoot = new lib2.loader();

	stage = new createjs.Stage(canvas2);
	stage.addChild(exportRoot);
	stage.update();

	createjs.Ticker.setFPS(48);
	createjs.Ticker.addEventListener("tick", stage);
        
        loader.start(); 
}
</script>
<style>
    #canvas2{
        position: relative;
        left: 50%;
        top: 50%;
        margin-top: -132px;
        margin-left: -248px;
    }
</style>
<canvas id="canvas2" width="496" height="264" style="background-color:transparent;"></canvas>

<script>
    initLoader();
 </script>