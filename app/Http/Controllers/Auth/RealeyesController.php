<?php

namespace App\Http\Controllers\;
use App\Http\Controllers\Controller;

class RealeyesController extends Controller
{
    private function getXml () {

      $newfname = public_path();
      $file = fopen ("http://www.ecb.europa.eu/stats/eurofxref/eurofxref-hist-90d.xml", "rb");
      if ($file) {
        $newf = fopen ($newfname, "wb");

        if ($newf)
        while(!feof($file)) {
          fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
        }
      }

      if ($file) {
        fclose($file);
      }

      if ($newf) {
        fclose($newf);
      }
     }
}
