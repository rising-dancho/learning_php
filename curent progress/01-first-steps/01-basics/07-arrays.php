<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/simple.css">
  <title>Document</title>
</head>

<body>
  <pre>
    <?php
    // $category1 = "Programming";
    // $category2 = "Business";
    // $category3 = "Art & Drawing";
    // $category4 = "Self Improvement";
    // $category5 = "History";


    // // $categories = ["Programming", "Business", "Art & Drawing", "Self-improvement", "History"];
    // $categories = array("Programming", "Business", "Art & Drawing", "Self-improvement", "History");
    // // echo $categories;
    // var_dump($categories);
    // // var_dump($categories[1]);
    // // var_dump(null);
    // // var_dump($array[key]); // syntax for accessing an array : key value pairs. the number is the "key" and whats inside the array is the "value"
    // echo "\t" . $categories[1] . "\n";

    // $firstCategory = $categories[0];
    // echo "\t" . $firstCategory . "\n\n";

    // // CHECKING IF A VALUE IS PRESENT IN AN ARRAY
    // // echo var_dump(in_array("Programming",  $categories));

    // if (in_array("Programming",  $categories)) echo "Programming is a category in our system\n\n";

    // // COUNTING THE NUMBER OF VALUES INSIDE AN ARRAY
    // var_dump("(" . count($categories) . ")" . " number of items inside the \$categories array");

    // // DELETE SOMETHING FROM AN ARRAY
    // unset($categories[3]);
    // var_dump($categories[4]);

    // $categories[] = "Human Nature";

    // print_r($categories);

    // $playlist = ['Starry Night', 'Moonlit Walk', 'Whispering Wind', 'Golden Horizon'];
    // $lastSong = $playlist[count($playlist) - 1];
    // echo $lastSong;

    $playlist = ['Golden Horizon', 'Starry Night', 'Moonlit Walk', 'Whispering Wind', 'Golden Horizon', 'Golden Horizon', 'Golden Horizon'];
    $totalSongsCount = count($playlist) - 1;
    $lastSong = $playlist[$totalSongsCount];
    echo $lastSong;
    if (in_array($lastSong, $playlist)) {
      echo "Your lastly added song was: '$lastSong'.";
    }

    // $songRecommendations = ['Ocean Waves', 'City Nights', 'Rising Sun', 'Dancing Shadows', 'Eclipse'];

    if (count($playlist) <= 3) {
      $playlist[] = $songRecommendations[rand(0, $totalSongsCount)];
    }

    $playlist = array_unique($playlist);
    
    print_r($playlist);
    ?>

    <!-- <ul>
      <li><?php echo $category1 ?></li>
      <li><?php echo $category2 ?></li>
      <li><?php echo $category3 ?></li>
      <li><?php echo $category4 ?></li>
    </ul>

    <select>
      <option><?php echo $category1 ?></option>
      <option><?php echo $category2 ?></option>
      <option><?php echo $category3 ?></option>
      <option><?php echo $category4 ?></option>
    </select> -->

  </pre>
</body>

</html>