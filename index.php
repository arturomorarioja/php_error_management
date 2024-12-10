<?php

/**
 * PHP Error and Exception practice
 * 
 * Uncomment each one of the sections individually:
 * - With display_errors = On
 * - With display_errors = Off
 * Check out the output
 * 
 * For the first example (division by zero with no error control),
 * try it out with display_errors = Off commenting and uncommenting the previous line
 * 
 * @author  Arturo Mora-Rioja
 * @version 1.0 October 2021
 */

ini_set('display_errors', 'Off');

$number = 0;

// // showText('I will divide by zero with no error control');
// $var = 7 / $number;

try {
    // showText('I will divide by zero');
    // $var = 7 / $number;         // Division by zero: it is a warning, neither an error nor an exception

    // showText('I will throw an exception of my own');
    // throw new Exception('Arturo\'s exception');     // Exception
    
    // showText('I will divide by zero launching an exception of my own');
    // $var = $number !== 0 ? 7 / $number : throw new Exception('Arturo\'s exception: The divisor cannot be zero.');
    
    // showText('I will interpret an undefined variable');
    // $var = "$undefinedVar";     // Undefined variable: it is a notice, neither an error nor an exception
            
    // showText('I will call a function without a mandatory parameter');
    // showText();                 // Invalid function call: it is an error (parameter missing)

} catch(Exception $e) {
    showText('There was an exception, mate', 'My message');
    showText($e, 'Exception\'s message');
} catch(Error $e) {
    showText('There was an error, mate', 'My message');
    showText($e, 'Error\'s message');
} finally {
    showText('This message will always be shown', 'My message');
}

/**
 * It shows the text it receives with a custom format
 * 
 * @param   $text       Text to show
 * @param   $preText    Text to show before $text
 */
function showText(string $text, string $preText = ''): void {
    if ($preText == '') {
        echo "<p>$text</p>";
    } else {
        echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>$preText:</strong> $text</p>";
    }
}