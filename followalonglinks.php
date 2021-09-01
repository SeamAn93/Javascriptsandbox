<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>👀👀👀Follow Along Nav</title>
    <link rel="stylesheet" href="css/follwalonglinks-styles.css">
    <link href="css/menu.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php include 'includes/menu.php';?>

<nav>
    <ul class="menu">
        <li><a href="">Home</a></li>
        <li><a href="">Order Status</a></li>
        <li><a href="">Tweets</a></li>
        <li><a href="">Read Our History</a></li>
        <li><a href="">Contact Us</a></li>
    </ul>
</nav>

<div class="wrapper">
    <p>Lorem ipsum dolor sit amet, <a href="">consectetur</a> adipisicing elit. Est <a href="">explicabo</a> unde natus necessitatibus esse obcaecati distinctio, aut itaque, qui vitae!</p>
    <p>Aspernatur sapiente quae sint <a href="">soluta</a> modi, atque praesentium laborum pariatur earum <a href="">quaerat</a> cupiditate consequuntur facilis ullam dignissimos, aperiam quam veniam.</p>
    <p>Cum ipsam quod, incidunt sit ex <a href="">tempore</a> placeat maxime <a href="">corrupti</a> possimus <a href="">veritatis</a> ipsum fugit recusandae est doloremque? Hic, <a href="">quibusdam</a>, nulla.</p>
    <p>Esse quibusdam, ad, ducimus cupiditate <a href="">nulla</a>, quae magni odit <a href="">totam</a> ut consequatur eveniet sunt quam provident sapiente dicta neque quod.</p>
    <p>Aliquam <a href="">dicta</a> sequi culpa fugiat <a href="">consequuntur</a> pariatur optio ad minima, maxime <a href="">odio</a>, distinctio magni impedit tempore enim repellendus <a href="">repudiandae</a> quas!</p>
</div>

<script>

    const triggers = document.querySelectorAll('a');
    const highlight = document.createElement('span');
    highlight.classList.add('highlight');
    document.body.append(highlight);

    function highlightLink() {
        const linkCoords = this.getBoundingClientRect();

        const coords = {
            width: linkCoords.width,
            height: linkCoords.height,
            top: linkCoords.top + window.scrollY,
            left: linkCoords.left + window.scrollX
        };

        highlight.style.width =  `${coords.width}px`;
        highlight.style.height =  `${coords.height}px`;
        highlight.style.transform =  `translate(${coords.left}px,${coords.top}px)`;
    }

    triggers.forEach(a => a.addEventListener('mouseenter', highlightLink));

</script>
</body>
</html>
