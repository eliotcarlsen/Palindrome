<?php
  require_once __DIR__.'/../vendor/autoload.php';
  require_once __DIR__.'/../src/Palindrome.php';

  session_start();
  if (empty($_SESSION[''])) {
    $_SESSION[''] = array();
  }

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  $app->get("/", function() use($app){
    return $app['twig']->render('index.html.twig');
  });

  $app->post("/result", function() use ($app) {
    $test_word = $_POST['testword'];
    $user_word = new Palindrome;
    return $app['twig']->render('index.html.twig', array('result' => $user_word->methodpalindrome($test_word)));
  });

  return $app;
?>
