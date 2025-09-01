<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/simple.css" />
  <link rel="stylesheet" href="./styles/custom.css" />
  <?php
  if (!empty($pageTitle)) : ?>
    <title>Culinary Cove &bull; <?php echo $pageTitle; ?></title>
  <?php else: ?>
    <title>Culinary Cove</title>
  <?php endif; ?>
</head>

<body>
  <?php if (empty($headerImage)) $headerImage = "images/pexels-engin-akyurt-1435904.jpg"; ?>

  <header class="header-with-background" style="background-image: url('<?php echo $headerImage; ?>'); ">
    <h1 class="banner-text-h1">Culinary Cove</h1>
    <p class="banner-text">Your sanctuary for exceptional flavors</p>
    <nav>
      <?php
      function active($key, $pageKey)
      {
        return $pageKey === $key ? "active" : "";
      }
      ?>

      <!-- MISSION -->
      <a
        class="<?php echo active("mission", $pageKey); ?> banner-text"
        href="our-mission.php">
        Our Mission
      </a>
      <!-- INGREDIENTS -->
      <a
        class="<?php echo active("ingredients", $pageKey); ?> banner-text"
        href="ingredients.php">
        Ingredients
      </a>
      <!-- MENU -->
      <a
        class="<?php echo active("menu", $pageKey); ?> banner-text"
        href="menu.php">
        Menu
      </a>
    </nav>
  </header>