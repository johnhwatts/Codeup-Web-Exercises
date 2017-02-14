"use strict";

//Question 2:

 // This is how you get a random number between 50 and 100
 var allCones = Math.floor(Math.random() * 50) + 50;
 // This is how you get a random number between 1 and 5
 var cones = Math.floor(Math.random() * 5) + 1;
 var i = 5;
 do {
	console.log(cones + " cones sold");
	i++;
 if (allCones > cones) {
	allCones = (allCones - cones);
 }
 } while (100 >= allCones > 0);

 console.log(allCones);


