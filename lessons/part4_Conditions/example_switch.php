<?php
// If you have a long list of condition (options) to check for, where each would have
// its own result, then try a switch

$favcolor = "red";
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        // It is important to break our of the switch once an option has occurred
        // otherwise it will just continue to the next option and execute that code as well
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        // A good standard is to always try have a default option.
        // Like the final else in a IF this option will occur if none of the conditions are met
        echo "Your favorite color is neither red, blue, nor green!";
}
