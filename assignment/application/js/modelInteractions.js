function wireFrame()
{
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

var cokeLightOn = true;
var spriteLightOn = true;
var pepperLightOn = true;

function cokeHeadlight()
{
	if(document.getElementById('cokeModel__headlight').getAttribute('headlight')== 'true'){
		cokeLightOn = !cokeLightOn;
		document.getElementById('cokeModel__headlight').setAttribute('headlight', cokeLightOn.toString());
		document.getElementById('cokeHeadlightButton').style.backgroundColor = '#868e96';
	}else{
		cokeLightOn = !cokeLightOn;
		document.getElementById('cokeModel__headlight').setAttribute('headlight', cokeLightOn.toString());
		document.getElementById('cokeHeadlightButton').style.backgroundColor = '#007bff';
	}

}
function spriteHeadlight()
{
	if(document.getElementById('spriteModel__headlight').getAttribute('headlight')== 'true'){
		spriteLightOn = !spriteLightOn;
		document.getElementById('spriteModel__headlight').setAttribute('headlight', spriteLightOn.toString());
		document.getElementById('spriteHeadlightButton').style.backgroundColor = '#868e96';
	}else{
		spriteLightOn = !spriteLightOn;
		document.getElementById('spriteModel__headlight').setAttribute('headlight', spriteLightOn.toString());
		document.getElementById('spriteHeadlightButton').style.backgroundColor = '#007bff';
	}
}
function pepperHeadlight()
{
	if(document.getElementById('pepperModel__headlight').getAttribute('headlight')== 'true'){
		pepperLightOn = !pepperLightOn;
		document.getElementById('pepperModel__headlight').setAttribute('headlight', pepperLightOn.toString());
		document.getElementById('pepperHeadlightButton').style.backgroundColor = '#868e96';
	}else{
		pepperLightOn = !pepperLightOn;
		document.getElementById('pepperModel__headlight').setAttribute('headlight', pepperLightOn.toString());
		document.getElementById('pepperHeadlightButton').style.backgroundColor = '#007bff';
	}
}

//Coke Camera Controller
function cokeCameraFront()
{
	document.getElementById('cokeModel__CameraFront').setAttribute('bind', 'true');
}

function cokeCameraBack()
{
	document.getElementById('cokeModel__CameraBack').setAttribute('bind', 'true');

}

function cokeCameraLeft()
{
	document.getElementById('cokeModel__CameraLeft').setAttribute('bind', 'true');
}

function cokeCameraRight()
{
	document.getElementById('cokeModel__CameraRight').setAttribute('bind', 'true');
}

//Speite Camera Controller
function spriteCameraFront()
{
	document.getElementById('spriteModel__CameraFront').setAttribute('bind', 'true');
}

function spriteCameraBack()
{
	document.getElementById('spriteModel__CameraBack').setAttribute('bind', 'true');
}

function spriteCameraLeft()
{
	document.getElementById('spriteModel__CameraLeft').setAttribute('bind', 'true');
}

function spriteCameraRight()
{
	document.getElementById('spriteModel__CameraRight').setAttribute('bind', 'true');
}


//Drpepper Camera Controller
function pepperCameraFront()
{
	document.getElementById('pepperModel__CameraFront').setAttribute('bind', 'true');
}

function pepperCameraBack()
{
	document.getElementById('pepperModel__CameraBack').setAttribute('bind', 'true');
}

function pepperCameraLeft()
{
	document.getElementById('pepperModel__CameraLeft').setAttribute('bind', 'true');
}

function pepperCameraRight()
{
	document.getElementById('pepperModel__CameraRight').setAttribute('bind', 'true');
}