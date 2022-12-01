<!--php lucky number test rebuilt exercise eductive-->

<!DOCTYPE html>

<?php $randomInt = random_int(10, 20); ?>
<html lang="en">
<head>
    <title>Your lucky number</title>
</head>
<body>
<h1>Your lucky number is: <?php echo $randomInt; ?></h1>
<?php if ($randomInt > 10) { ?>
<h3>More than ten is really nice!</h3>
<?php } ?>
</body>
</html>