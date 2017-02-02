<?php
    require_once("../Utilities/functions.php");
    
    $colors = getValue("color", array());
    print_r($colors);
    foreach ($colors as $c)
    {
        echo "Color $c </br>";
    }
?>