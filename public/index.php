<?php require_once("../content.php"); 

    $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    $thisPage = array_pop($uriSegments);
    
    if($thisPage==""){
        $thisPage="home";
    } else if( !array_key_exists ( $thisPage , $allContent) ){
        $thisPage="home";
    }
    
    $myTitle = $allContent[$thisPage]["title"];
    
    $myContent = $allContent[$thisPage]["content"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../head.php"); ?>
    <title><?php echo $myTitle; ?></title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php include("../nav.php"); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <?php echo $myContent; ?>
            </div>
        </div>
    </div>
</body>
</html>