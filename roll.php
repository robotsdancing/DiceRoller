<?php

$r = rand(1, $sides);//r is the "rolled" value

echo '<center><table border = "1"><tr align="center"><td><b>Roll Results<br></tr></td><tr align="center"><td>';
if($sides <> "10"){
	  echo $r;//print the "rolled" value for the all dice save for the ten sided, because it's weird.
}
if($sides == "10"){
	echo $r-1;//ten sided dice are weird and have values from zero to nine, so you print the adjusted "rolled" value
}
echo '<br></tr></td><tr align="center"><td>';
//for($i = 1; $i <= $sides;$i++){//check if this loop is needed.
       if($pic == "yes"){//
       	        if($sides =="6"){
	       		 if($r == $i){
			       echo '<img src="a'.$i.'.jpg">';
			  }
		}
		if($sides =="8"){
			if($r==$i){
				echo '<img src="b'.$i.'.jpg">';
			}
		}
		if($sides =="10"){
			if($r==$i){
				echo '<img src="c'.$i.'.jpg">';
			}
		}
		if($sides =="12"){
			if($r==$i){
				echo '<img src="d'.$i.'.jpg">';
			}
		}
		if($sides =="20"){
			if($r==$i){
				echo '<img src="e'.$i.'.jpg">';
			}
		}			
	}
//}
echo '</tr></td><tr align="center"><td><form method = "POST" action = "dice.php">
<input type = "hidden" value = "'.$sides.'" name = "sides">
<input type = "hidden" value = "'.$pic.'" name = "pic">
<input type = "submit" value = "Roll Again">';
echo '</tr></td><br><br><tr align="center"><td>Go <a href="index.php">home</a>';
?>