<?php 
  /*******************
  * Personal Portfolio Site
  * Reflections
  * Name:     Mark Woods
  * Date:     July 26, 2020
  ********************/ 

  $pageTitle = "Mark Woods, Developer in training";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title><?= $pageTitle ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Barlow&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <div id="navbar">
            <ul>
                <li><a href='index.php'>Mark Woods</a></li>
                <li><a href='aboutme.php'>About Me</a></li>   
                <li><a href='projects.php'>Projects</a></li>
                <li id='currenttab'>Reflections</li>    
                <li><a href='contact.php'>Contact</a></li>    
            </ul>
        </div>
    </header>

    <section id="main">
        <div>
            <p>REFLECTIONS</p>
        </div>
    </section>

    <footer>
        <div>
            <p>This is the bottom of the page</p>
        </div>
    </footer>
</body>
</html>