<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Review;
use Auth;

class ReviewsController extends Controller
{
    public function store($listing_id, Request $request){
    
      $review = Review::create(
        [
          'description' => $request->description,
          'listing_id' => intval($listing_id),
          'user_id' => Auth::user()->id,
        ]
      );
      return redirect('/');

    }

    public function destroy(){
      return redirect('/');
    }
}
