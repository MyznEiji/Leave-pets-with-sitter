<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Photo;
use App\Listing;

class PhotosController extends Controller
{
  public function photos_update($listing_id, Request $request)
  {

    $file = $request->file('file');
    $filename = $file->getClientOriginalName();
    $file->move(public_path('images'), $filename);

    Photo::create(
    [
      'image' => $request->file('file')->getClientOriginalName(),
      'listing_id' => $listing_id,
    ]);



  }

}
