<?php

//test cookies php ombouw educative voorbeeld  name = firstname

if (isset($_POST['firstname'])) {
    setcookie('firstname', $_POST['firstname']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Name</title>
</head>
<body>
<form method="post">
    <p>
        <label for="firstname">
            Your firstname will do:
        </label>
        <input type="text" name="firstname" id="firstname">
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>
</body>
</html>