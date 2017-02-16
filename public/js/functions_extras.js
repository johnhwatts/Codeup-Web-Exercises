"use strict";

//Exercise 

function log(input) {
	console.log(input);
}

var result = log("Yes");
console.log(result);      

//Exercise 2

function identity(argument) {
	console.log(argument);
}

var result = identity("This is tough!");
console.log(result);

//Exercise 3

function getRandomIntBetween(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (11 - 1)) + 1;
}

var result = getRandomIntBetween("");
	console.log(result);

//Exercise 4

function isNumeric(input) {
		var result;

		if(input  == 0 || input === "") {
			result = true;
		} else {
			result = false;
		}
		return result;
}
var result = isNumeric()
console.log(result);

// Exercise 5

//add
function add(a, b) {
    return a + b;
}
var result = add(2,4);
console.log(result);

//subtract
function subtract(a, b) {
    return a - b;
}
var result = subtract(2,4);
console.log(result);

//multiply
function multiply(a, b) {
    return a * b;
}
var result = multiply(2,4);
console.log(result);

//divide
function divide(a, b) {
    return a / b;
}
var result = divide(2,4);
console.log(result);

// Exercise 6

function square(a) {
	return multiply;
}
var result = square(4);
console.log(result);





