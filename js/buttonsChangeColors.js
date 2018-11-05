// array met alle afbeeldingen

var imgArray = ["img/selectColors/blauw.svg", "img/selectColors/rood.svg", "img/selectColors/geel.svg", "img/selectColors/groen.svg", "img/selectColors/oranje.svg", "img/selectColors/roze.svg", "img/selectColors/turk.svg", "img/selectColors/violet.svg", "img/selectColors/wit.svg", "img/selectColors/zwart.svg"];

var nameArray = ["blauw", "rood", "geel", "groen", "oranje", "roze", "turk", "violet", "wit", "zwart"]; 

// standaardwaardes voor auto increment

var aantal1 = 0;
var aantal2 = 0;
var aantal3 = 0;
var aantal4 = 0;

// functies toewijzen aan de selectors, zodat bij iedere klik de kleur wordt aangepast

function selector1() {
	document.getElementById("color1").src = imgArray[aantal1];
	document.getElementById("color1value").value = nameArray[aantal1];
	aantal1++;
	
	if (aantal1 == 10) {
		aantal1 = 0;
	}
}

function selector2() {
	document.getElementById("color2").src = imgArray[aantal2];
	document.getElementById("color2value").value = nameArray[aantal2];
	aantal2++;
	
	if (aantal2 == 10) {
		aantal2 = 0;
	}
}

function selector3() {
	document.getElementById("color3").src = imgArray[aantal3];
	document.getElementById("color3value").value = nameArray[aantal3];
	aantal3++;
	
	if (aantal3 == 10) {
		aantal3 = 0;
	}
}

function selector4() {
	document.getElementById("color4").src = imgArray[aantal4];
	document.getElementById("color4value").value = nameArray[aantal4];
	aantal4++;
	
	if (aantal4 == 10) {
		aantal4 = 0;
	}
}