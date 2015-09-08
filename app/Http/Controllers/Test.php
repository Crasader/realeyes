<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class Test extends Controller
{
   

    public function convertXmlToJson(){
       
      $xml = XmlParser::load(public_path().'/Realeyes.xml');
      $array = $xml->parse([
          'time' => ['uses' => 'Cube::time'],
          'currency' => ['uses' => 'Cube::currency'],
          'rate' => ['uses' => 'Cube::rate'],
      ]);
      return $array->toJson();
    }
}

