<?php

// IF one or more (combined) conditions result in either TRUE or FALSe, which
// suit your need, then execute the block of code / or execute something else

if (true) {
    echo "This is just testing TRUE? This will always show then!\n";
}

$x = 'true';
if ('true' == $x) {
    echo "This is checking if the value of a variable is the same as a word.\n";
}

if ('pete' != 'jack') {
    echo "If they're not the same person then print this!";
} else {
    echo "Otherwise, if they are the same person print this instead?";
}

if (($x === 'true') && (99 > 100) || (5 == 5)) {
    echo "Let's print this if the complicated set of conditions are met.";
} elseif ((25/5) > 4) {
    echo "Otherwise check another condition and print this if met?";
} else {
    echo "Else if all of the conditions were not met, print this!!!!";
}
