<?php

namespace App\Http\Controllers\Realeyes;

use App\Http\Controllers\Controller;

class RealeyesController extends Controller
{
    public function getXml () {

      $remote_file_contents = file_get_contents('http://www.ecb.europa.eu/stats/eurofxref/eurofxref-hist-90d.xml');
      //Get the contents

      $local_file_path = public_path().'/Realeyes.xml';

      file_put_contents($local_file_path, $remote_file_contents);

    }
}
