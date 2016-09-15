<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/scrabble.php";
    date_default_timezone_set('America/New_York');

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__."/../views"));

    $app->get('/', function() use ($app) {
      return $app['twig']->render('scrabble.html.twig');
    });

    $app->post('/score', function() use ($app) {
      $scrabble = new Scrabble();
      $scrabble->wordScore($_POST['word']);
      return $app['twig']->render('scrabble.html.twig', array('scrabble' => $scrabble));
    });

    return $app;
 ?>
