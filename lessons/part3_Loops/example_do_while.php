<?php

// A DO..WHILE loop will ALWAYS execute the code ONCE, because it first does
// something and then checks the condition.

$x = 6;
do {
    echo "The number is: $x\n";
    $x++;
} while ($x <= 5);

// Otherwise the do..while works like, and can be used instead of a normal WHILE
