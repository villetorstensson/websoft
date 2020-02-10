/**
 * A sample of a main function stating the famous Hello World.
 *
 * @author Ville Torstensson
 */
"use strict";

function main() {
    let a = 1;
    let b;
    let range = "";
    let z = 10;

    b = a + 1;

    for (let i=0; i < 9; i++) {
        range += i + ", ";


    }

    if (z = 10) {
        console.info ("your if statement succeded");
        }

        while ( false) {
            console.info("your while loop succeeded")
        } 

    console.info("Hello World");
    console.info(range.substring(0, range.length - 2));
    console.info(a, b);
    let today = new Date();
    let sv = new Intl.DateTimeFormat ('ar', 'sv').format(today);
    console.info("Todays date is:" + sv);
}


main();