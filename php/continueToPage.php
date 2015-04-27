<?php

$isAllowed = $_PHP['isAllowed'];
if (isset($_PHP['isAllowed'])) {

    echo $isAllowed . "<br/>";
    if ($isAllowed == "true") {
        echo "is allowed";
    } else {
        echo "is not allowed";
    }
} else {
    echo "your in the dot";
}

//header(Location : "index.php?link=home");
?>
