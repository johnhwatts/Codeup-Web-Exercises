"use strict";

// // do not worry about the details of this line
// // just know that it generates a random number between 1 and 100
// var random = Math.floor((Math.random()*100)+1);

// console.log('Random stopping point is: ' + random);

// for (var i = 1; i < 100; i++) {

//     console.log('Loop counter is: ' + i);

//     if (random == i) {

//         console.log('We have reached the random stopping point: break!');

//         // use the break keyword to exit from the while loop
//         break;

//         // nothing after the break will get processed
//         console.log('You will never see this line.');
//     }
// }


var randomNumber;

	do {
		randomNumber = Math.floor((Math.random()*50) +1);
	} while	(randomNumber % 2 === 0);
	
	for (var i = 1; i < 50; i = i +2) {

	if (i ===randomNumber)
    console.log("Yikes! Skipping number: " + i);

    else {

        console.log("Here is an odd number " + i)

    }

}









