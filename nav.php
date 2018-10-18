

<?php

echo "<ul class='nav'>"; // starts the unordered list <ul>/

for($i=0;$i<count($myNav);$i++){
    /* this will echo out each list 
    item <li> using content from 
    the $myNav array. */
echo "<li class='nav-item'><a class='nav-link' href='".$myNav[$i]['page']."'>".$myNav[$i]["title"]."</a></li>";
}
echo "</ul>"; // ends the unordered list </ul>

?>