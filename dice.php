<?php
#d10 d8 d6 d4 d20 d12
echo '<title>Dice Roller</title>';
$sides = $_POST['sides'];
$rolls = 1;
$pic = $_POST['pic'];

if($sides == "" or $sides == 0 )
{

echo 'You need to choose the amount of sides.<br>
 Go <a href="index.php">here</a>.';

}
if($rolls == ""  and $sides <> null)
{

echo 'You need to put in a number.<br>
 Go <a href="index.php">here</a>.';

}

if($rolls <> "" and $sides <> null)
{
include('roll.php');
exit;
}



?>