<?php 
/*
Defines a class [your initials]Class (inside a namespace with your initials, like "WP\S01E01" with multiple methods (one for each item below) which:
Outputs a given string in capital letters, working with special characters (like "èçì…").
Escapes a given HTML string into their safe character equivalents.
Converts a given array as a string, all values being separated by ", ".
Verifies that a given string is a correct email.*/

namespace LE;

class LEClass
{
    public function capitalLetters($string)
    {
        return mb_strtoupper($string);
    }

    public function escapeHtml($string)
    {
        return htmlspecialchars($string);
    }

    public function arrayToString($array)
    {
        $string = "";
        $i = 0;
        foreach ($array as $value) {
            $string .= $value;
            if ($i != count($array) - 1) {
                $string .= ", " ;
            }
            $i++;
        }
        return $string ;
    }

    public function verifyEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}

$LE = new LEClass();
echo $LE->escapeHtml("<p>èçì</p>");
echo "<br>";
echo $LE->escapeHtml("<p>èçì</p>");
echo "<br>";
echo $LE->arrayToString(["èçì", "èçì", "èçì"]);
echo "<br>";
echo $LE->verifyEmail("ethan.lachaud@gmail.com");
echo "<br>";
echo $LE->verifyEmail("ethan.lachaudgmail.com");
echo "<br>";
echo $LE->verifyEmail("ethan.lachaud@gmailcom");
echo "<br>";
echo $LE->verifyEmail("ethan.lachaud@gmail..com");
