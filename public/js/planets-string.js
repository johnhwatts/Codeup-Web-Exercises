(function(){
    "use strict";

    var planetsString = "Mercury|Venus|Earth|Mars|Jupiter|Saturn|Uranus|Neptune";
    var planetsArray;

    // TODO: Convert planetsString to an array, save it to planetsArray.
    planetsArray = planetsString.split("|"); //You have to split on the string, not just the character, hence the sppech marks.
    console.log(planetsArray);

    // TODO: Create a string with <br> tags between each planet. console.log() your results.
    //       Why might this be useful?
    planetsString = planetsArray.join("<br>"); //Usually split and join on commas, in order to hihglight things.
    console.log(planetsString);

    // Bonus: Create a second string that would display your planets in an undordered list.
    //        You will need an opening AND closing <ul> tags around the entire string, and <li> tags around each planet.
    //        console.log() your results.
    var unorderedList = "<ul><li>";

    unorderedList += planetsArray.join("</li><li>");

    unorderedList += "</li></ul>";

        console.log(unorderedList);
                        

})();
