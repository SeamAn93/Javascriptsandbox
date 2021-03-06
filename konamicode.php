<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Key Detection</title>
    <script type="text/javascript" src="https://www.cornify.com/js/cornify.js"></script>
    <link href="css/menu.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php include 'includes/menu.php';?>

<script>
const pressed = [];
const secretCode = 'fallout';

window.addEventListener('keyup', (e) => {
    console.log(e.key);
    pressed.push(e.key);
    pressed.splice(-secretCode.length - 1, pressed.length - secretCode.length);
    if(pressed.join('').includes(secretCode)) {
        console.log('Ding');
        cornify_add();
    }
    console.log(pressed);

});
</script>
</body>
</html>
