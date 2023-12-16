<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EazySolve Options</title>
    <link rel="stylesheet" href="calculate.css" />

</head>
<body>
     <section>
      <div class="header2" id="header">
        welcome <span id="namepage2" style="color:blue"><?= $_SESSION['name']?></span> what are you solving for today.
      </div>

      <ul class="mathlist">
        <li>
          <a href="temperature-converter.html" target="_blank">temperatue</a>
        </li>
        <li>
          <a href="tax.html" target="_blank">Tax</a>
        </li>
        <li>
          <a href="workdone.html" target="_blank">Work-done</a>
        </li>
        <li>
          <a href="sqrt.html" target="_blank">Square root</a>
        </li>
        <li>
          <a href="displacement.html" target="_blank">Displacement</a>
        </li>
        <li>
          <a href="velocity.html" target="_blank">Average Velocity</a>
        </li>
      </ul>
    </section>
</body>
</html>