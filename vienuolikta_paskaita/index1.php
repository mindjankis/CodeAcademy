<?php
declare (strict_types=1);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
<?php for($i=0; $i<=10; $i++):?>
    <?php if($i%2==0):?>
    <b> <?php echo $i.' ';?></b>
         <?php else:echo $i.' ';?>
    <?php endif;?>
<?php endfor;?>
</body>
</html>


