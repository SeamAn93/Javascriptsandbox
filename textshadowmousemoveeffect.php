<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mouse Shadow</title>
    <link rel="stylesheet" href="css/textshadowmousemoveeffect-styles.css">
    <link href="css/menu.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php include 'includes/menu.php';?>

<div class="hero">
    <h1 contenteditable>🔥WOAH!</h1>
</div>
<script>

    const hero = document.querySelector('.hero');
    const text = hero.querySelector('h1');
    const walk = 100;

    function shadow(e) {
        /*Hver for sig*/
        /*const width = here.offsetWidth;
        const height = here.offsetHeight;*/
        /*Her er de samlet*/
        const {offsetWidth: width, offsetHeight: height} = hero;
        let {offsetX: x, offsetY: y} =e;
        if (this !== e.target) {
            x = x + e.target.offsetLeft;
            x = x + e.target.offsetTop;
        }
        const xWalk = (x / width * walk) - (walk / 2);
        const yWalk = (y / width * walk) - (walk / 2);

        text.style.textShadow = `
            ${xWalk}px ${yWalk * -1}px 0 red,
            ${xWalk * -1}px ${yWalk}px 0 yellow,
            ${yWalk}px ${xWalk * -1}px 0 blue,
            ${yWalk * -1}px ${xWalk}px 0 green
            `;
    }

    hero.addEventListener('mousemove',shadow);

</script>
</body>
</html>