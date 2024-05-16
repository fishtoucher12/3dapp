// JavaScript Document
var counter = 0;
$(document).ready(function() {
	
	selectPage();
	
});

function selectPage() {

	$('#home').show();
	$('#about').hide();
	$('#models').hide();
	$('#interaction').hide();
	$('#cokeDescription').hide();
	$('#spriteDescription').hide(); 
	$('#pepperDescription').hide(); 
	document.getElementById('navHome').style.backgroundColor = '#3399ff';

	document.getElementById('cokeCameraDefaultButton').style.backgroundColor = '#007bff';
	document.getElementById('spriteCameraDefaultButton').style.backgroundColor = '#007bff';
	document.getElementById('pepperCameraDefaultButton').style.backgroundColor = '#007bff';

	document.getElementById('cokeHeadlightButton').style.backgroundColor = '#007bff';
	document.getElementById('spriteHeadlightButton').style.backgroundColor = '#007bff';
	document.getElementById('pepperHeadlightButton').style.backgroundColor = '#007bff';
	var chb = true;
	var shb = true;
	var phb = true;


	$('#navHome').click(function(){
		document.getElementById('navHome').style.backgroundColor = '#3399ff';
		document.getElementById('navAbout').style.backgroundColor = 'transparent';
		document.getElementById('navModels').style.backgroundColor = 'transparent';
		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 	  
	});

	$('#navAbout').click(function(){
		document.getElementById('navHome').style.backgroundColor = 'transparent';
		document.getElementById('navAbout').style.backgroundColor = '#3399ff';
		document.getElementById('navModels').style.backgroundColor = 'transparent';
		$('#home').hide();
		$('#about').show();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 	  
	});

	$('#navModels').click(function(){
		document.getElementById('navHome').style.backgroundColor = 'transparent';
		document.getElementById('navAbout').style.backgroundColor = 'transparent';
		document.getElementById('navModels').style.backgroundColor = '#3399ff';
		$('#home').hide();
		$('#about').hide();
		$('#models').show();
		$('#coke').show();
		$('#sprite').hide();
		$('#pepper').hide();
		$('#interaction').show();
		$('#cokeCameraController').show();
		$('#spriteCameraController').hide();
		$('#pepperCameraController').hide();
		$('#cokeHeadlightController').show();
		$('#spriteHeadlightController').hide();
		$('#pepperHeadlightController').hide();
		$('#cokeDescription').show();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 
		document.getElementById('navCoke').style.backgroundColor = '#3399ff';
		document.getElementById('navSprite').style.backgroundColor = 'transparent';
		document.getElementById('navPepper').style.backgroundColor = 'transparent';
	});

	$('#navCoke').click(function(){
		$('#coke').show();
		$('#sprite').hide();
		$('#pepper').hide();
		$('#interaction').show();
		$('#cokeCameraController').show();
		$('#spriteCameraController').hide();
		$('#pepperCameraController').hide(); 
		$('#cokeHeadlightController').show();
		$('#spriteHeadlightController').hide();
		$('#pepperHeadlightController').hide();
		$('#cokeDescription').show();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide();
		document.getElementById('navCoke').style.backgroundColor = '#3399ff';
		document.getElementById('navSprite').style.backgroundColor = 'transparent';
		document.getElementById('navPepper').style.backgroundColor = 'transparent';
	});

	$('#navSprite').click(function(){
		$('#coke').hide();
		$('#sprite').show();
		$('#pepper').hide();
		$('#interaction').show();
		$('#cokeCameraController').hide();
		$('#spriteCameraController').show();
		$('#pepperCameraController').hide();
		$('#cokeHeadlightController').hide();
		$('#spriteHeadlightController').show();
		$('#pepperHeadlightController').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').show();
		$('#pepperDescription').hide();  
		document.getElementById('navCoke').style.backgroundColor = 'transparent';
		document.getElementById('navSprite').style.backgroundColor = '#3399ff';
		document.getElementById('navPepper').style.backgroundColor = 'transparent'; 	  
	});

	$('#navPepper').click(function(){
		$('#coke').hide();
		$('#sprite').hide();
		$('#pepper').show();
		$('#interaction').show();
		$('#cokeCameraController').hide();
		$('#spriteCameraController').hide();
		$('#pepperCameraController').show();
		$('#cokeHeadlightController').hide();
		$('#spriteHeadlightController').hide();
		$('#pepperHeadlightController').show();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide();
		$('#pepperDescription').show();
		document.getElementById('navCoke').style.backgroundColor = 'transparent';
		document.getElementById('navSprite').style.backgroundColor = 'transparent';
		document.getElementById('navPepper').style.backgroundColor = '#3399ff';
	});

}

function swapCokeCameraButton(selected){
	document.getElementById('cokeCameraDefaultButton').style.backgroundColor = '#868e96';
	document.getElementById('cokeCameraBackButton').style.backgroundColor = '#868e96';
	document.getElementById('cokeCameraLeftButton').style.backgroundColor = '#868e96';
	document.getElementById('cokeCameraRightButton').style.backgroundColor = '#868e96';
		
	document.getElementById(selected).style.backgroundColor = '#007bff';
}

function swapSpriteCameraButton(selected){
	document.getElementById('spriteCameraDefaultButton').style.backgroundColor = '#868e96';
	document.getElementById('spriteCameraBackButton').style.backgroundColor = '#868e96';
	document.getElementById('spriteCameraLeftButton').style.backgroundColor = '#868e96';
	document.getElementById('spriteCameraRightButton').style.backgroundColor = '#868e96';
		
	document.getElementById(selected).style.backgroundColor = '#007bff';
}

function swapPepperCameraButton(selected){
	document.getElementById('pepperCameraDefaultButton').style.backgroundColor = '#868e96';
	document.getElementById('pepperCameraBackButton').style.backgroundColor = '#868e96';
	document.getElementById('pepperCameraLeftButton').style.backgroundColor = '#868e96';
	document.getElementById('pepperCameraRightButton').style.backgroundColor = '#868e96';
		
	document.getElementById(selected).style.backgroundColor = '#007bff';
}


function changeLook() {
	counter += 1;
	switch (counter) {
		case 1:
			document.getElementById('bodyColor').style.backgroundColor = 'lightblue';
			document.getElementById('headerColor').style.backgroundColor = '#FF0000';
			document.getElementById('footerColor').style.backgroundColor = '#FF9900';
			break;
		case 2:
			document.getElementById('bodyColor').style.backgroundColor = '#FF6600';
			document.getElementById('headerClor').style.backgroundColor = '#FF9999';
			document.getElementById('footerColor').style.backgroundColor = '#996699';
			break;
		case 3:
			document.getElementById('bodyColor').style.backgroundColor = 'coral';
			document.getElementById('headerColor').style.backgroundColor = 'darkcyan';
			document.getElementById('footerColor').style.backgroundColor = 'darksalmom';
			break;
		case 4:
			counter = 0;
			document.getElementById('bodyColor').style.backgroundColor = 'lightgrey';
			document.getElementById('headerColor').style.backgroundColor = 'chocolate';
			document.getElementById('footerColor').style.backgroundColor = 'dimgrey';
			break;
	}
}

function changeBack() {
	document.getElementById('bodyColor').style.background = 'linear-gradient( 45deg, rgba(255,0,0,0.8), rgba(255, 255, 255, 0) 70.71%), linear-gradient(180deg, rgba(0,255,0,0.8), rgba(255, 255, 255, 0) 70.71%),linear-gradient(315deg, rgba(0, 0, 255, 0.8), rgba(255, 255, 255, 0) 70.71%)';
	document.getElementById('headerColor').style.backgroundColor = 'transparent';
	document.getElementById('footerColor').style.backgroundColor = 'transparent';
}

