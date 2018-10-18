<?php

/* indexed array */

$newContent = array("Anais", "15", "Purple");
$newContent = array("Jacob", "17", "Magenta");

/* multidimensional array */

$newContent = array(
    array("Jason", "48", "Green"),
    array("Jacob", "17", "Magenta"),
    array("Sterling", "16", "Purple"),
    );

for($i=0; $i<3; $i++) {
    //echo $i."<br>";
    //echo "Hello my name is ". $newContent[$i][0]."<br>";
    //echo "I am ". $newContent[$i][1]." years old<br>";
    //echo "My favorite color is ". $newContent[$i][2]."<br>";
}
//echo "<select>";
    for($i=0; $i<3; $i++) {
    //echo "<option>". $newContent[$i][0]."</option>";
    }
//echo "</select>";

//echo "<br><br>";

// associative arrays

$myContent = array(
    "name"=> "Anais",
    "age"=> "15",
    "color"=> "Purple"
    );
    
//echo$myContent["name"]."<br>";

/* associative multidimensional array */
    
$myContent = array(
    "Anais" => array(
        "age" => "15",
        "color" => "Purple"),
    "Jacob" => array(
       "age" => "17",
        "color" => "Magenta" ),
    "Sterling" => array(
       "age" => "16",
        "color" => "Purple" ),
        );
        
//echo $myContent["Sterling"]["age"]."<br><br>";

/*indexed multidimensional associative array */

$myContent = array(
    array(
        "name" => "Anais",
        "age" => "15",
        "color" => "Purple"),
    array(
        "name" => "Jacob",
       "age" => "17",
        "color" => "Magenta" ),
    array(
        "name" => "Sterling",
       "age" => "16",
        "color" => "Purple" ),
        );
        
//echo $myContent[1]["age"]."<br>";

$myNav = array(
    array(
        "title" =>"Home",
        "page" =>"index.php"),
    array(
        "title" => "Contact",
        "page" => "contact.php"),
    array(
        "title" =>"About",
        "page" =>"about.php"),
    array(
        "title" => "Buy Now!",
        "page" => "buy.php"),
    array(
        "title" => "Bob",
        "page" => "buy.php"),
        );
        
$myNavCount = count($myNav);

?>

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

