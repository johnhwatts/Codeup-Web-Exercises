"use strict";

// Write a program to toggle all characters in a string: in a given string, toggle all characters to their opposite case. Special characters will not change.

// Example input: "aBc12#""
// Example output: "AbC12#"

var toggleString = function (str){
    var s = '';
    for (var i=0; i<str.length; i++) {
        var n = str.charAt(i);
        s +=  (n.toLowerCase()=='a' ? '#' : n == n.toUpperCase() ? n.toLowerCase() : n.toUpperCase());
    }
    return s;
}


// Write a program that takes a given string appended with a number at the end. The program will check the length of the string to verify the string is equal to the number appended. If the number appended equals the string length, output "Yes". if the number appended does not equal the string length, output "No".

// Example Input: "geek5"
// Example Output: "Yes"

// Example Input: "codingchallenge25"
// Example Output: "No"