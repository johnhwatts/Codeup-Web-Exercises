"use strict";

// //Exercise 

// function log(input) {
// 	console.log(input);
// }

// result = log("Yes");
// console.log(result);      

// //Exercise 2

// function identity(argument) {
// 	return argument;
// }

// result = identity("This is tough!");
// console.log(result);

// //Exercise 3

// function getRandomIntBetween(min, max) {
//   min = Math.ceil(min);
//   max = Math.floor(max);
//   return Math.floor(Math.random() * (max - min)) + min;
// }

// 	var random = getRandomIntBetween(1, 10);
// 	console.log(random);

//Exercise 4

function isNumeric(input) {
		//how to check if a value is numeric in JS
		return !isNaN(input);
}

// Exercise 5

//add
function add(a, b) {
	if(isNumeric(a) && isNumeric(b)) {
		return a + b;
	}
}
// var result = add(2,4);
// console.log(result);

//subtract
function subtract(a, b) {
    return a - b;
}
// var result = subtract(2,4);
// console.log(result);

//multiply
function multiply(a, b) {
    return a * b;
}
// var result = multiply(2,4);
// console.log(result);

//divide
function divide(a, b) {
    return a / b;
}
// var result = divide(2,4);
// console.log(result);

// // Exercise 6

function square(a) {
	return multiply(a, a);
}
// var result = square(4);
// console.log(result);

//Bonus:

fucntion sumOfSquares(a, b) {
	//all these do the same thing
	return a*a + b*b;
	return square(a) + square(b);
	return sum(square(a), square(b));
	return sum(multiply(a, a), multiply(b, b));
}
console.log(sumOfSquares(2, 3));




