"use strict;"
var display = document.getElementsByClassName("display") [0]; //the zero at the end is because it is a class and comes back as an array 
var numbers = document.getElementsByClassName("number");
var operators = document.getElementsByClassName("operator");

function displayNumber(){
	display.value += this.innerText;
}

for(var i = 0; i < numbers.length; i++) {
	numbers[i].addEventListener("click", displayNumber); 
	console.log(numbers[i]);
}

document.getElementById("clear").addEventListener("click", function() {
	display.innerText = "";
});

document.getElementById("plus").addEventListener("click", function() {
	display.innerText = "+";
})

document.getElementById("minus").addEventListener("click", function() {
	display.innerText = "-";
})

document.getElementById("multiply").addEventListener("click", function() {
	display.innerText = "*";
})

document.getElementById("divide").addEventListener("click", function() {
	display.innerText = "/";
})