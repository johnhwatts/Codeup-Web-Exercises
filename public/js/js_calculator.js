(function () {

"use strict";
	//Global variables
	var leftDisplay = document.getElementById("leftDisplay");
	var centerDisplay = document.getElementById("centerDisplay");
	var rightDisplay = document.getElementById("rightDisplay");
	var numbers = document.getElementsByClassName("numbers");
	
	//A function to display button input in the display of calculator
function displayNumber() {
	// append the display's inner text with the innerText of the button clicked
	
	if (centerDisplay.innerText == "") {
		if(this.innerText == "."){
			if(leftDisplay.innerText.indexOf(".") == -1){
				leftDisplay.innerText += this.innerText;
			}
		}else{
			leftDisplay.innerText += this.innerText;
		}
	} else {
		if(this.innerText == "."){
			if(rightDisplay.innerText.indexOf(".") == -1){
				rightDisplay.innerText += this.innerText;
			}
		}else{
			rightDisplay.innerText += this.innerText;
		}
	}
}
	
	for(var i = 0; i < numbers.length; i++) {
	numbers[i].addEventListener("click", displayNumber);
	}

// a fucntion to return result of maths 
function math() {
	
	var result;
	switch (centerDisplay.innerText) {
		case "+": 
			result = parseFloat(leftDisplay.innerText) + parseFloat(rightDisplay.innerText);
			break;
		case "-":
			result = parseFloat(leftDisplay.innerText) - parseFloat(rightDisplay.innerText);
			break;
		case "X":
			result = parseFloat(leftDisplay.innerText) * parseFloat(rightDisplay.innerText);
			break;
		case "÷":
			result = parseFloat(leftDisplay.innerText) / parseFloat(rightDisplay.innerText);
			break;

	}
	clear(); //need to clear displays before outputting result in left display; within the function but outside the switch
	leftDisplay.innerText = result;
}

function clear() {
	
	centerDisplay.innerText = "";
	leftDisplay.innerText = "";
	rightDisplay.innerText = "";
}

//All event listeners

document.getElementById("equals").addEventListener("click", math);	

document.getElementById("clear").addEventListener("click", clear);

document.getElementById("plus").addEventListener("click", function() {
	centerDisplay.innerText = "+";
})

document.getElementById("minus").addEventListener("click", function() {
	centerDisplay.innerText = "-";
})

document.getElementById("multiply").addEventListener("click", function() {
	centerDisplay.innerText = "X";
})

document.getElementById("divide").addEventListener("click", function() {
	centerDisplay.innerText = "÷";
})

})();