<?php
$config = parse_ini_file('../config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
define('URL_ROOT', "$URL_BASE");
define('APP_ROOT', $_SERVER['DOCUMENT_ROOT']); //Have to add " . '/kx6868dj'" after $_SERVER['DOCUMENT_ROOT'] for aboutMe.php and Assignments.php. I don't know why

  $data = 
  [
    'pageTitle' => 'Assignments',
    'stylesheet' => 'HomePage.css',
    'articles' => 
    [
    [
      'title' => "Assignment 1 - Home Page",
      'content' => "You are to create a 'Home' page. This page will include a header with either your name or 'Home' in it. A navigation bar with links to 'Home' and 'Assignments'. The links can be dead for now. As well as an article section where you answer the following questions. 1. Why are you taking this class? 2.What do you want to take away from this class? Styling and creativity will be left up to you individually. You will also need to include a link on the page to the GitHub directory where all the source code for this assignment is located."
    ],
    [
      'title' => "Assignment 2 - About Page",
      'content' => "You are to create an 'About' page."
    ],
    [
      'title' => "Assignment 3 - Refactor",
      'content' => "You are to refactor your protfolio based on the in class exercises we did on Januar 18th and 23rd. These refactors make use of the power of PHP include statements and separate site content from site structure."
    ],
    [
      'title' => "Assignment 4 - Bank",
      'content' => "You are to create a demo bank website. This will include a log in page, an account summary page, and a transfer page. For now, all of the data can be stored in a data array on each page since we haven't gotten to sharing data yet. Styling and CSS as well as any extra JavaScript will be left up you you individually. The primary concern with this assignment is making a functioning 3 page website. This will be located at https://cs.bemidjistate.edu/{yourId}/banking."
    ]
    ]
  ];
  include_once(APP_ROOT . '/HomePage/src/views/headview.php'); //Have to disclude HomePage for the server
  include_once(APP_ROOT . '/HomePage/src/views/mainview.php');
?>