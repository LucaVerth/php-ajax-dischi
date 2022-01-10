<?php 
require_once __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style> <?php include 'style.css'; ?> </style>
  <title>php Dischi</title>
</head>
<body>

  <div class="main-wrapper">
    <header>
      <div class="logo">
        <img src="https://1000logos.net/wp-content/uploads/2021/04/Spotify-logo.png" alt="">
      </div>
      <div class="select">
        <select>
          <option value="all">All Genre</option>
        </select>
      </div>
    </header>

    <main>
      <div class="main-album-wrapper">
        <?php foreach ($database as $disc) : ?>
        <div class="card">
          <div class="album-card">
            <div class="album-cover">
              <img src="<?php echo $disc['poster'] ?>" alt="">
            </div>
            <h5><?php echo $disc['title'] ?></h5>
            <span><?php echo $disc['author'] ?></span>
            <span><?php echo $disc['year'] ?></span>
          </div>
        </div>
        <?php endforeach; ?>
  
      </div>
    </main>
  </div>
 

</body>
</html>