<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActiveCampaigns;

class ActiveCampaignController extends Controller
{

    // Create new Auth instance
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Insert database for activeCampaigns
     * Url : /campaigns/active/create
     */
    public function create(Request $request)
    {
      $activeCampaigns = new activeCampaigns;
      $activeCampaigns->fill([
        'title' => $request->input('title'),
        'image' => $request->input('image'),
        'description' => $request->input('description'),
        'dateStarts' => $request->input('dateStarts'),
        'dateEnds' => $request->input('dateEnds'),
        'shopID' => $request->input('shopID'),
      ]);
      if($activeCampaigns->save()){
        $res['success'] = true;
        $res['result'] = 'Successfully sent new campaign proposal!';

        return response($res);
      }
    }

    /**
     * Get one data from one active campaign by id
     * Url : /campaigns/active/{id}
     */
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

    /**
     * Update data for one active campaign by id
     * Url : /campaigns/active/update/{id}
     */
    public function update(Request $request, $id)
    {
      if ($request->has('title')) {
          $activeCampaigns = activeCampaigns::find($id);
          $activeCampaigns->title = $request->input('title');
          if ($activeCampaigns->save()) {
              $res['success'] = true;
              $res['result'] = 'Success update '.$request->input('title');

              return response($res);
          }
      }else{
        $res['success'] = false;
        $res['result'] = 'Please fill name item_ads!';

        return response($res);
      }
    }

    /**
     * Delete one active campaign by id
     * Url : /campaigns/active/delete/{id}
     */
    public function delete(Request $request, $id)
    {
      $activeCampaigns = activeCampaigns::find($id);
      if ($activeCampaigns->delete($id)) {
          $res['success'] = true;
          $res['result'] = 'Success delete item_ads!';

          return response($res);
      }
    }

}
