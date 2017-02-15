"use strict";

//Exercise 1

for (var i = 1; i <= 9; i++) { 
        console.log((i + "").repeat(i));
	} 
		console.log((0 + "").repeat(i));


//Exercise 2

var oddEven = Math.floor(Math.random() * 10) + 1;

for (var i = 1; i <= 10; i++) {
	console.log(oddEven + "x" + i + "=" + oddEven*i);
}

//Exercise 3

var randomNumber;

for (var i = 1; i <=10; i++) {
	 randomNumber = Math.floor(Math.random() * (200 - 20 +1)) + 20;
        // Determine if the number was even or odd.
        if (randomNumber % 2 === 1) {
            console.log(randomNumber + " is odd");
        } 
        else {
        	console.log(randomNumber + " is even");
        }
    }

//Exercise 4

for (var i = 100; i >= 5; i = i- 5) {
	console.log(i);
}