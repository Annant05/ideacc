<?php
/**
 * Created by PhpStorm.
 * User: Annant Gupta
 * Date: 30-05-2018
 * Time: 02:22 PM
 */

//$rootUrl = $_SERVER[];
$rootUrl = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
echo $rootUrl;

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TestPage</title>
</head>
<body>
<a href="<?php echo $rootUrl ?>">Go to home</a>
</body>
</html>