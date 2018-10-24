<?php

// NOTE: for..each loops ONLY work with arrays/objects

$listOfFruit = [
    'Grapes',
    'Lemon',
    'Peach',
    'Strawberry',
    'Avo',
    'Mango',
    'Orange',
    'Watermelon',
    'Pear',
    'Apple'
];

echo "This is a list of all the fruit that I like to eat:\n";
foreach ($listOfFruit as $elementValue) {
    echo "- $elementValue\n";
}

// The above example has no reference to the index of the items, like FOR has with $i
// We are able to add that ability, fortunately
echo "Let's add an index to the list?\n";
foreach ($listOfFruit as $index => $elementValue) {
    echo "$index - $elementValue\n";
}
