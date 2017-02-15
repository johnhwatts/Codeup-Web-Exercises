"use strict";

for (var i = 1; i <=100; i++) {

		if (i % 3 === 0 && i % 5 === 0) {
			console.log("FizzBuzz");
		} else if (i % 3 === 0) {
			console.log("Fizz");
		} else if (i % 5 === 0) {
			console.log("Buzz");
		} else {
			console.log(i);
		}
	}

var favoriteFood = "pizza";

if(favoriteFood == "pizza") {
	console.log("You only get pizza");
} else if(favoriteFood == "pizza" || favoriteFood == "burgers") {
	console.log("Help yourself to anything on the buffet");
}

//the way above you will only get pizza
//The way below you prioritise the more technical 'if' (conditional) so that you can get both answers

if(favoriteFood == "pizza" || favoriteFood == "burgers") {
	console.log("Help yourself to anything on the buffet");
} else if(favoriteFood == "pizza") {
	console.log("You only get pizza");
}