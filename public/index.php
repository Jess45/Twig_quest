<?php


require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/config.php';



$loader = new \Twig\Loader\FilesystemLoader('../src/view/item');
$twig = new \Twig\Environment($loader, array('cache'=> false,
                                              'debug' => true));
$twig->addExtension(new \Twig\Extension\DebugExtension);


 $instruments = array(array('name' => 'Guitare',
                            'price'=>'1500€',
                            'image' => "/public/assets/image/guitare.jpg",
                             'description' => 'Excitavit hic ardor milites per municipia plurima, quae isdem conterminant, 
                             dispositos et castella, sed quisque serpentes latius pro viribus repellere moliens, nunc globis .'),
                      array ('name' => 'Basse',
                             'price' => '1200€',
                          'image' => "/public/assets/image/basse.jpg",
                          'description' => 'Excitavit hic ardor milites per municipia plurima, quae isdem conterminant, 
                             dispositos et castella, sed quisque serpentes latius pro viribus repellere moliens, nunc globis .'),
                      array ('name' => 'Tin Whistle',
                             'price' => '75€',
                          'image' => "/public/assets/image/tin.jpg",
                          'description' => 'Excitavit hic ardor milites per municipia plurima, quae isdem conterminant, 
                             dispositos et castella, sed quisque serpentes latius pro viribus repellere moliens, nunc globis .'),
                      array ('name' => 'Panpipe',
                             'price' => '95€',
                          'image' => "/public/assets/image/panpipe.jpg",
                          'description' => 'Excitavit hic ardor milites per municipia plurima, quae isdem conterminant, 
                             dispositos et castella, sed quisque serpentes latius pro viribus repellere moliens, nunc globis .'),
                       array ('name' => 'Accordéon',
                             'price' => '3500€',
                             'image' => "/public/assets/image/accordeon.jpg",
                           'description' => 'Excitavit hic ardor milites per municipia plurima, quae isdem conterminant, 
                             dispositos et castella, sed quisque serpentes latius pro viribus repellere moliens, nunc globis .'));

echo $twig->render('index.html.twig', array('instruments' => $instruments));






