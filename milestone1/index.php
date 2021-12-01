<?php

require_once('./variables/array.php');






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DISKS</title>
</head>
<body>
    <main>
        <div class="main-container">
            <?php foreach($albumsList as $album => $element){
                ?><img src="<?php $element["poster"]?>"> echo $element["poster"];?><br><?php
                ?>echo $element["title"];?><br><?php
                ?>echo $element["author"];?><br><?php
                ?>echo $element["genre"];?><br><?php
                ?>echo $element["year"];?><br><?php

            } ?>
        </div>
    </main>
</body>
</html>