"use strict";

var luckyNumber = Math.floor(Math.random()* 6),

var priceBeforeDiscount = 60;
var discountPercentage;
var finalPrice;


	console.log("Your lucky number is: " + luckyNumber);

switch (luckyNumber) {
	case 1:
		discountPercentage = .1;
		break;
	case 2:
		discountPercentage = .25;
		break;
	case 3:
		discountPercentage = .35;
		break;
	case 4:
		discountPercentage = .35;
		break;
	case 5:
		discountPercentage = .35;
		break;
	default:
		console.log("All Free!");
		break;
}

var month = Math.floor(Math.random()* 12);

switch (month) {
	case 0:
		console.log("January");
		break;
	case 1:
		console.log("February");
		break;
	case 2:
		console.log("March");
		break;
	case 3:
		console.log("April");
		break;
	case 4:
		console.log("May");
		break;
	case 5:
		console.log("June");
		break;
	case 6:
		console.log("July");
		break;
	case 7:
		console.log("August");
		break;
	case 8:
		console.log("September");
		break;
	case 9:
		console.log("October");
		break;
	case 10:
		console.log("November");
		break;
	case 11:
		console.log("December");
		break;

}

		



