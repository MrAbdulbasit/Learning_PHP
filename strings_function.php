<?php
$firstString = "Assalam o alaikum";
$secondString = " all of you guys.";
?>
<?php
// Concatenation with period sign
$thirdString = $firstString;
$thirdString .= $secondString;
echo $thirdString;
?>
<br />
Lowercase: <?php echo strtolower($thirdString); ?><br />
Uppercase: <?php echo strtoupper($thirdString); ?><br />
Uppercase first-letter: <?php echo ucfirst($thirdString); ?><br />
Uppercase of all letter words: <?php echo ucwords($thirdString); ?><br />
<br />
Length: <?php echo strlen($thirdString); ?><br />
Trim: <?php echo $fourthString = $firstString . trim($secondString); ?><br />
Find: <?php echo strstr($thirdString , "all"); ?><br />
Replace by string: <?php echo str_replace("guys" , "people" , $thirdString); ?><br />
