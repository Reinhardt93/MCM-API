<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shops;

class PublicShopsController extends Controller
{

    /**
     * Create a new auth instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index(Request $request)
    {
      $shops = new Shops;

      $res['success'] = true;
      $res['result'] = $shops->all();

      return response($res);
    }


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
