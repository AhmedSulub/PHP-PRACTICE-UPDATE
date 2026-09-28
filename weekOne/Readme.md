
1. PHP Echo, Print, Single Quotes and Double Quotes
Screenshot Name

PHP Echo, Print, Single Quotes and Double Quotes

Description

This screenshot demonstrates several basic PHP concepts: echo, print, single quotes, and double quotes.

The echo and print statements are used to display text on a web page. The screenshot also demonstrates the difference between single quotes and double quotes when using variables inside a string.

Concepts Explained

Echo:
echo is used to display text or values in the browser. It can also display multiple strings separated by commas.

Example:

echo "Hello World", "Welcome to PHP";

Print:
print is another PHP statement used to display text or values in the browser.

Example:

print "Welcome to PHP";

Single Quotes:
When a variable is placed inside single quotes, PHP does not replace the variable with its value.

$x = 100;
echo 'Number is $x';

Output:

Number is $x

Double Quotes:
When a variable is placed inside double quotes, PHP replaces the variable with its value.

$y = "Ahmed";
echo "My name is $y";

Output:

My name is Ahmed
Important Points
echo displays output in PHP.
print also displays output.
<br> is used to create a new line in the browser.
Single quotes ' ' do not interpret variables.
Double quotes " " interpret variables.
PHP statements normally end with a semicolon ;



2. PHP Switch Statement
Screenshot Name

PHP Switch Statement

Description

This screenshot demonstrates the switch statement in PHP. It checks the value of a variable against different case values and executes the matching case.

Concept
switch compares one variable with multiple values.
case represents a possible value.
break stops the switch after a matching case.
default runs when no case matches.
Example
$Month = "Feb";

switch($Month)
{
    case "Jan":
        echo "is Jan";
        break;

    case "Feb":
        echo "is Feb";
        break;

    default:
        echo "It is not a valid month";


//picture 3 Constant

  3. #Strings and Constants in PHP

Description:
This concept introduces how to work with strings and constants in PHP. It covers basic string operations such as finding the length of a string and counting words. It also explains how to create and use constants with the define() function.

Concepts Covered:

String: A sequence of characters enclosed in quotes.
strlen(): Returns the number of characters in a string.
str_word_count(): Counts the number of words in a string.
Constant: A value that cannot be changed after it has been defined.
define(): Used to create a constant in PHP.


2. If Statements and If-Elseif Statements

Description:
This concept explains how to use conditional statements in PHP to make decisions based on conditions. The program checks whether a condition is true or false and executes the appropriate block of code.

//picture 4 Ifelse and if else if:

if statement: Executes code when a condition is true.
else statement: Executes code when the if condition is false.
elseif statement: Checks additional conditions when previous conditions are false.
Comparison operators: Used to compare values, such as == and >.
Multiple conditions: Allows a program to make decisions between several possible outcomes.
}
