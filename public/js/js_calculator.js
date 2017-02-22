(function () {

"use strict";
		
	var leftDisplay = document.getElementById("leftDisplay");
	var centerDisplay = document.getElementById("centerDisplay");
	var rightDisplay = document.getElementById("rightDisplay");
	var numbers = document.getElementsByClassName("numbers");
	function displayNumber() {
		// append the display's inner text with the innerText of the button clicked
		
		if (centerDisplay.innerText == "") {
			leftDisplay.innerText += this.innerText;
		} else {
			rightDisplay.innerText += this.innerText;
		}
	}
	for(var i = 0; i < numbers.length; i++) {
		numbers[i].addEventListener("click", displayNumber);
	}

 
function math() {
	
	var result;
	switch (centerDisplay.innerText) {
		case "+": 
			result = parseFloat(leftDisplay.innerText) + parseFloat(rightDisplay.innerText);
			break;
		case "-":
			result = parseFloat(leftDisplay.innerText) - parseFloat(rightDisplay.innerText);
			break;
		case "*":
			result = parseFloat(leftDisplay.innerText) * parseFloat(rightDisplay.innerText);
			break;
		case "/":
			result = parseFloat(leftDisplay.innerText) / parseFloat(rightDisplay.innerText);
			break;

	}
	clear();
	leftDisplay.innerText = result;
}


		
document.getElementById("equals").addEventListener("click", math);	

function clear() {
	
	centerDisplay.innerText = "";
	leftDisplay.innerText = "";
	rightDisplay.innerText = "";

	
}



document.getElementById("clear").addEventListener("click", clear);

document.getElementById("plus").addEventListener("click", function() {
	centerDisplay.innerText = "+";
})

document.getElementById("minus").addEventListener("click", function() {
	centerDisplay.innerText = "-";
})

document.getElementById("multiply").addEventListener("click", function() {
	centerDisplay.innerText = "*";
})

document.getElementById("divide").addEventListener("click", function() {
	centerDisplay.innerText = "/";
})

})();