<?php 

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

  $transport = [
    new Circle(5000),
    new Square(50,50),
    new Square(50,50)
  ];
  
  $cal = new Calculation($transport);

  $cont = new Container();
  
  print_r($cal->numberOfContainers());

