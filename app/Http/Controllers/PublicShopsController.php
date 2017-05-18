<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shops;

class PublicShopsController extends Controller
{

    public function __construct()
    {
    }


    /**
     * Get data for all shops
     * Url : /shops
     */
    public function index(Request $request)
    {
      $shops = new Shops;

      $res['success'] = true;
      $res['result'] = $shops->all();

      return response($res);
    }

    /**
     * Get one data from one shop by id
     * Url : /shop/{id}
     */
    public function read(Request $request, $shopID)
    {
      $shops = Shops::where('shopID',$shopID)->first();
      if ($shops !== null) {
        $res['success'] = true;
        $res['result'] = $shops;

        return response($res);
      }else{
        $res['success'] = false;
        $res['result'] = 'shop not found!';

        return response($res);
      }
    }
}
