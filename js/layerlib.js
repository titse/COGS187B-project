/* layerlib.js: Simple Layer library  */
/* detect objects */

/* hide the layer with id = layerName */
function hide(layerName)
{
    var theLayer = document.getElementById(layerName);
    theLayer.style.visibility = 'hidden';
}

/* show the layer with id = layerName */
function show(layerName)
{
    var theLayer = document.getElementById(layerName);
    theLayer.style.visibility = 'visible';
}

/* set the x-coordinate of layer named layerName */
function setX(layerName, x)
{
    var theLayer = document.getElementById(layerName);
    console.log(typeof(theLayer));
    theLayer.style.left=x+"px";
}

/* set the y-coordinate of layer named layerName */
function setY(layerName, y)
{
    var theLayer = document.getElementById(layerName);
    theLayer.style.top=y+"px";
}

/* set the z-index of layer named layerName */
function setZ(layerName, zIndex)
{
    var theLayer = document.getElementById(layerName);
    theLayer.style.zIndex = zIndex;
}

/* set the height of layer named layerName */
function setHeight(layerName, height)
{
    var theLayer = document.getElementById(layerName);
    theLayer.style.height = height+"px";
}

/* set the width of layer named layerName */
function setWidth(layerName, width)
{
    var theLayer = document.getElementById(layerName);
    theLayer.style.width = width+"px";
}

/* set the clipping rectangle on the layer named layerName
defined by top, right, bottom, and left */
function setClip(layerName, top, right, bottom, left)
{
    var theLayer = document.getElementById(layerName);
    theLayer.style.clip = "rect("+top+"px "+right+"px "+" "+bottom+"px "+left+"px)";
}

/* set the contents of layerName to passed content*/
function setContents(layerName, content)
{
    var theLayer = document.getElementById(layerName);
    theLayer.innerHTML = content;
}

function getStyle(layerName, styleName)
{
	/* abstraction to address varying browser methods to calculate a style value */
	var style = "";
	var obj = document.getElementById(layerName);
	if (obj.style[styleName])
		style = obj.style[styleName];
	else if (obj.currentStyle)
		style = obj.currentStyle[styleName];
	else if (window.getComputedStyle)
	{
		var computedStyle = window.getComputedStyle(obj, "");
		style = computedStyle.getPropertyValue(styleName);
	}
	return style;
}
