<?php 

  spl_autoload_register(function ($class_name) {
      include 'classes/' . $class_name . '.php';
  });

  //Transport 1
  $transport1 = [
    new Circle(50),
    new Circle(50),
    new Square(100, 100)
  ];

  //Transport 2
  $transport2 = [ 
    new Square(400, 400),
    new Circle(50),
  ];

  //Transport 3
  $transport3 = [
    new Square(100, 100),
    new Square(50, 50),
    new Circle(50)
  ];

  //Initialize Calculator class 
  $cal = new Calculation($transport1);
  
  //Print number of containers and type
  echo $cal->numberOfContainers();

