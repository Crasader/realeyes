<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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
