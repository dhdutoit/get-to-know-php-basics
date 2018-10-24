<?php

// a WHILE loop could never execute its code, because the condition may not be
// met from the start of the loop.

$x = 25;
while ($x <= 37) {
    echo "SAY IT! IT'S HAMMERTIME!!!!!\n";
    $x++;
}
echo "That was printed 11 times....\n";

// The condition can be more complicated than just a number counter, and can even
// include calls to functions that would return some value.
function buildOne($x)
{
    return "$x 1";
}

$x = '1';
while ('1 1 1 1' != ($x = buildOne($x))) {
    echo "it's true ... so far ...\n";
}
