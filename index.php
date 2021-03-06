<?php 
  /*******************
  * Personal Portfolio Site
  * Name:     Mark Woods
  * Date:     July 22, 2020
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
                <li id='currenttab'>Mark Woods</li>
                <li><a href='aboutme.php'>About Me</a></li>   
                <li><a href='projects.php'>Projects</a></li>
                <li><a href='reflections.php'>Reflections</a></li>    
                <li><a href='contact.php'>Contact</a></li>    
            </ul>
        </div>
    </header>

    <section id="main">
        <div>
            <p>I'm student in the Business Information Technology program at Red River College, entering my fifth and final term. 
                
            I have a strong passion to learn and a powerful drive to excel. The BIT program is my launchpad and I look forward to doing great things at RRC and beyond.

Please feel free to view my projects and reflections to get a glimpse at my journey.</p>
        </div>
    </section>

    <footer>
        <div>
            <p>This is the bottom of the page</p>
        </div>
    </footer>
</body>
</html>