<?php

namespace App\Http\Controllers\Realeyes;

use App\Http\Controllers\Controller;
use XmlParser;


class RealeyesController extends Controller
{
    public function getXml () {

      $remote_file_contents = file_get_contents('http://www.ecb.europa.eu/stats/eurofxref/eurofxref-hist-90d.xml');
      //Get the contents

      $local_file_path = public_path().'/Realeyes.xml';

      file_put_contents($local_file_path, $remote_file_contents);

    }

    public function convertXmlToJson(){
      /*$array[][]= "";

      $xml = XmlParser::load(public_path().'/Realeyes.xml');
      for ($i=0; $i <= 63; $i++) { 

        $array[$i] = $xml->parse([
            'time' => ['uses' => 'Cube.Cube::time'],
        ]);

        for ($j=0; $j <= 30; $j++) { 
            $array[$i][$j] = $xml->parse([
                'currency' => ['uses' => 'Cube.Cube.Cube::currency'],
                'rate' => ['uses' => 'Cube.Cube.Cube::rate'],
            ]);
        }
          
      }*/
      $fileContents= file_get_contents('http://www.ecb.europa.eu/stats/eurofxref/eurofxref-hist-90d.xml');
      $fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);
      $fileContents = trim(str_replace('"', "'", $fileContents));
      $simpleXml = simplexml_load_string($fileContents);
      $json = json_encode($simpleXml , true);
      $json = trim(str_replace('@attributes', "value", $json));
      $jsonV = json_decode($json , true);
      
      return $jsonV;


    }
}

