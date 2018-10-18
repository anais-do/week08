<?php 
    require_once("content.php"); 
    
    $myTitle = $_GET["page"];
       
    if ($myTitle == "") {
    $myTitle = "home";
    
    $myContent = $$myTitle;
    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php"); ?>
    <title><?php echo $myTitle; ?></title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php include("nav.php"); ?>
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