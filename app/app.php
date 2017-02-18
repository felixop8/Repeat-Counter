<?php
    // stops php timestamp error from occuring
    date_default_timezone_set('America/Los_Angeles');
    // connects created classes to the project
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    // creates a new app using the Silex micro framework
    $app = new Silex\Application();
    $app['debug'] = true;

    // adds Twig as the service provider for the app templates and sets the twig path to where the templates will be located
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../web/views'));


    // route main page
   $app->get("/", function() use ($app) {
       return $app['twig']->render('forms.html.twig');
   });

  //  routing for after form is submitted
   $app->post("/result", function() use ($app) {
       $word_input = $_POST['input_word'];
       $phrase_input = $_POST['sentence'];
       $comparation = new RepeatCounter;
       $evaluate = $comparation->CounterRepetition($word_input, $phrase_input);
       return $app['twig']->render('result.html.twig', array('result' => $evaluate, 'word_to_find' => $word_input));
   });

   return $app;
 ?>
