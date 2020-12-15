<?php
$matches= [
   [
    "home"=>"Heat",
    "visitors"=>"Pelicans",
    "homePoint"=> "92",
    "visitorsPoint"=>"114",
  ],
   [
    "home"=>"Bulls",
    "visitors"=>"Rockets",
    "homePoint"=> "104",
    "visitorsPoint"=>"125",
  ],
   [
    "home"=>"Lakers",
    "visitors"=>"Clippers",
    "homePoint"=> "87",
    "visitorsPoint"=>"81",
  ],
   [
    "home"=>"Spurs",
    "visitors"=>"Thunder",
    "homePoint"=> "108",
    "visitorsPoint"=>"121",
  ],
   [
    "home"=>"Pistons",
    "visitors"=>"Magic",
    "homePoint"=> "112",
    "visitorsPoint"=>"116",
  ],


];

  for ($i=0; $i < count($matches) ; $i++) {
    echo ($matches[$i]["home"] . " - " . $matches[$i]["visitors"] . " | " . $matches[$i]["homePoint"] . " - " . $matches[$i]["visitorsPoint"]) . "<br>";
  }


   ?>
