<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Random Background Generator</title>
  <style>
    .body-1 {
      background-color: red;
    }

    .body-2 {
      background-color: greenyellow;
    }

    .body-3 {
      background-color: orangered;
    }

    .body-4 {
      background-color: aquamarine;
    }

    .body-5 {
      background-color: violet;
    }

    .body-6 {
      background-color: gray;
    }
  </style>
</head>

<body class="body-<?php echo rand(1,6); ?>">
  <?php echo "<h1>Random Background Generator</h1>"; ?>
</body>

</html>