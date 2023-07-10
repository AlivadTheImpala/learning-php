<?php // test1.php

$username = "Fred Smith";
echo $username;
echo "<br>";

$current_user = $username;
echo $current_user;
echo "<br>";

/*strings two ways
if you want to evaluate a variable when echoing a string use double quatation marks
otherwise, if you want to preserve the variable as a string itself
use the single quotes
*/
$count = 4;
echo "this week $count have pooped on the floor"; //double quotes evaluates the variable $count
echo "<br>";

echo 'this week $count have pooped on the floor'; //$count will appear as a string
echo "<br>";

$heading = "Date\tName\tPayment";
echo $heading;
echo "<br>";

$author = "Steve Ballmer";

echo "Developers, developers, developers, developers, developers,
  developers, developers, developers, developers!

  - $author.";
echo "<br>";

$author2 = "Brian W. Kernighan";

echo <<<_END
  Debugging is twice as hard as writing the code in the first place.
  Therefore, if you write the code as cleverly as possible, you are,
  by definition, not smart enough to debug it.

  - $author2.
_END;

echo"<br>";

define("MY_MOM", "Letty");
echo MY_MOM;
echo "<br>";

function longdate($timestamp)
{
    return date("l F jS Y", $timestamp);
}

echo longdate(time());
echo "<br>";
echo longdate(time() - 17 * 24 * 60 * 60);