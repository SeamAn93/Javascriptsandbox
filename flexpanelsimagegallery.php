<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Flex Panels 💪</title>
    <link href='https://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/flexpanelsimagegallery-styles.css">
</head>
<body>

<?php include 'includes/menu.php';?>

<div class="panels">
    <div class="panel panel1">
        <p>Hey</p>
        <p>Let's</p>
        <p>Dance</p>
    </div>
    <div class="panel panel2">
        <p>Give</p>
        <p>Take</p>
        <p>Receive</p>
    </div>
    <div class="panel panel3">
        <p>Experience</p>
        <p>It</p>
        <p>Today</p>
    </div>
    <div class="panel panel4">
        <p>Give</p>
        <p>All</p>
        <p>You can</p>
    </div>
    <div class="panel panel5">
        <p>Life</p>
        <p>In</p>
        <p>Motion</p>
    </div>
</div>

<script>

const panels = document.querySelectorAll('.panel');

function toggleOpen() {
    this.classList.toggle('open');
}

function toggleActive(e) {
    if(e.propertyName.includes('flex')) {
        this.classList.toggle('open-active');
    }
}

panels.forEach(panel => panel.addEventListener('click', toggleOpen));
panels.forEach(panel => panel.addEventListener('transitionend', toggleActive));

</script>
</body>
</html>