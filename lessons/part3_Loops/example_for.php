<?php

echo "Let's count from 0 - 9, shall we?\n";

// set a variable ($i in this case) that is used
// as your key and // that will work as your
// trigger to end the loop
for ($i=0; $i<10; $i++) {
    echo "$i\n";
}

// #didYouKNow: We can also use loops with Arrays and Objects.
$basicArray = ['First', 'Second', 'Third'];
echo "The order of things:\n";

// we know the array has a length of 3
for ($i=0; $i<3; $i++) {
    echo "$basicArray[$i]\n";
}

// We can also stop a loop before it is supposed to end, by 'break'ing it.
for ($var=10; $var<100; $var++) {
    echo "$var\n";
    break;
}
