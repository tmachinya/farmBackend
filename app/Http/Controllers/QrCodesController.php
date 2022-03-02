<?php

namespace App\Http\Controllers;

use App\Asset;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodesController extends Controller
{

    public function makeAll()
    {
        $products = Asset::all()->sortByDesc("created_at");
        $products->makeHidden(['id','created_at','updated_at']);
        $dyn_table = '<table border="1" cellpadding="10" bgcolor="#ffe4c4">';
        $i = 0;
        foreach ($products as $product)
        {
            if ($i % 4 == 0) { // if $i is divisible by our target number (in this case "4")
                $dyn_table .= '<tr><td>' .QrCode::size(200)->generate($product). ' '. $product['number']. '</td>';
            } else {
                $dyn_table .= '<td>' .QrCode::size(200)->generate($product). ' '. $product['number'].  '</td>';
            }
            $i++;
        }
       return $dyn_table .= '</tr></table>';
    }

}
