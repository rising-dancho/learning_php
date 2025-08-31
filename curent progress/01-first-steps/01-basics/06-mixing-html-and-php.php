<!-- ECHO WAY SYNTAX -->
<?php
// Ensure that $selectedCoffee is always set to a meaningful value: it will be initialized in some tests (in the background) but not in others

// Write your code here
if (!isset($selectedCoffee) || empty($selectedCoffee)) $selectedCoffee = 'drip';

echo '<div class="coffee-info">';
if ($selectedCoffee === 'expresso') {
  echo '
    <div id="espresso-info">
        <h1>Espresso ☕</h1>
        <p>Espresso is a concentrated coffee drink with a bold flavor. It pairs perfectly with a chocolate croissant. 🍫🥐</p>
    </div>
    ';
} else {
  echo '
    <div id="drip-coffee-info">
        <h1>Drip Coffee ☕</h1>
        <p>Drip coffee, a staple in many routines, is known for its straightforward brewing process and comforting, familiar taste. Perfect for starting your morning or as a midday pick-me-up. ☕️🌅</p>
    </div>
    ';
}
echo '</div>';
?>

<!-- PHP WAY SYNTAX-->

<?php
if (!isset($selectedCoffee) || empty($selectedCoffee)) $selectedCoffee === "drip"; ?>

<div class="coffee-info">
  
  <?php if ($selectedCoffee === "expresso") { ?>

    <div id="espresso-info">
      <h1>Espresso ☕</h1>
      <p>Espresso is a concentrated coffee drink with a bold flavor. It pairs perfectly with a chocolate croissant. 🍫🥐</p>
    </div>

  <?php } else { ?>

    <div id="drip-coffee-info">
      <h1>Drip Coffee ☕</h1>
      <p>Drip coffee, a staple in many routines, is known for its straightforward brewing process and comforting, familiar taste. Perfect for starting your morning or as a midday pick-me-up. ☕️🌅</p>
    </div>

  <?php } ?>

</div>