<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActiveCampaigns;

class PublicCampaignController extends Controller
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
      $activeCampaigns = new activeCampaigns;

      if($activeCampaigns !== null) {
        $res['success'] = true;
        $res['result'] = $activeCampaigns->all();

        return $res;
      } else {
        $res['success'] = true;
        $res['result'] = 'No campaign proposals';

        return response($res);
      }
    }



    public function read(Request $request, $id)
    {
      $activeCampaigns = activeCampaigns::find($id)->first();
      if ($activeCampaigns !== null) {
        $res['success'] = true;
        $res['result'] = $activeCampaigns;

        return response($res);
      }else{
        $res['success'] = false;
        $res['result'] = 'Category not found!';

        return response($res);
      }
    }

    
}
