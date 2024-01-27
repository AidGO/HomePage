<?php
$config = parse_ini_file('config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
define('URL_ROOT', "$URL_BASE");
define('APP_ROOT', $_SERVER['DOCUMENT_ROOT']);

  $data = 
  [
    'pageTitle' => 'Aiden Olsen',
    'stylesheet' => 'HomePage.css',
    'articles' => 
    [
    [
      'title' => "Why am I taking this class?",
      'content' => "I am taking this class to learn more about how to create complex websites that function properly."
    ],
    [
      'title' => "What do I want to take away from this class?",
      'content' => "I want to be able to create proper user interfaces that both show strengh in style and functionality."
    ]
    ]
  ];

include_once('src/views/headview.php')
?>
<?php include_once('src/views/mainview.php') ?>