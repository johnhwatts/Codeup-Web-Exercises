"use strict";

// TODO: Ask the user for their name.
		var name = "";
//       Keep asking if an empty input is provided.
		while (name === "" || name === null) {
			name = prompt('What is your name?');
	}

	//Alternate answer
		var name;

		do {
			name = prompt("What's your name?");
			name = name.trim(); //this makes it so that you can't just spacebar out of the box

		} while(name == "" || name =="null");

// TODO: Show an alert message that welcomes the user based on their input.
		alert("Hi " + response + "!");

// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.
		var pizza = confirm("Do you like pizza?");
			if (pizza) { // no need to add "== true" because the value is a Boolean, it is either true/false.
				alert("That's so cool!")
			} else {
				alert("You suck!");
			}


// Recursion:

function getName() {
	// prompt user their name
	var name = prompt("Please input your name");

	//if their response is empty
	if(name == "") {
		//call getName again
		return getName();
	} else {
		return name;
	}
}
