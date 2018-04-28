<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Listing;

class ListingsController extends Controller
{

  // ログインしていないとシッターになれない
  public function __construct()
  {
    if(!Auth::check()) $this->middleware('auth');
  }

  public function index()
  {
    $listings = Auth::user()->listings;
    return view('listings.index')->with(['listings' => $listings]);
  }

  public function create()
  {

    return view("listings.create");
  }

  public function store(Request $request)
  {

    $listing = Listing::create(
    [
      'home_type' => $request->home_type,
      'pet_type' => $request->pet_type,
      'breeding_years' => $request->breeding_years,
      'pet_size' => $request->pet_size,
      'user_id' => Auth::user()->id,
    ]);
    return redirect("listings/{$listing->id}/basics");
  }


  public function edit()
  {
    return view("listings.edit");
  }


  public function show($listing_id)
  {
    $listing = Listing::find($listing_id);
    $photos = Listing::find($listing_id)->photos;
    return view("listings.show")->with(["photos" => $photos, "listing" => $listing]);
  }











  public function basics($listing_id)
  {
    $listing = Listing::find($listing_id);
    $active_name = "basics";
    return view("listings.basics")->with(["listing" => $listing, "active_name" => $active_name]);
  }

  public function update($listing_id, Request $request)
  {
    Listing::find($listing_id)->update([
      'home_type' => $request->home_type,
      'pet_type' => $request->pet_type,
      'breeding_years' => $request->breeding_years,
      'pet_size' => $request->pet_size,
    ]);


    $listing = Listing::find($listing_id);
    $active_name = "basics";
    return view("listings.basics")->with(["listing" => $listing, "active_name" => $active_name]);
  }







  public function description($listing_id)
  {
    $listing= Listing::find($listing_id);
    $active_name = "description";
    return view("listings.description")->with(["listing" => $listing, "active_name" => $active_name]);
  }

  public function description_update($listing_id, Request $request)
  {
    Listing::find($listing_id)->update([
      'listing_title' => $request->listing_title,
      'listing_content' => $request->listing_content,
    ]);

    $listing = Listing::find($listing_id);
    $active_name = "description";
    return view("listings.description")->with(["listing" => $listing, "active_name" => $active_name]);

  }






  public function address($listing_id)
  {
    $listing= Listing::find($listing_id);
    $active_name = "address";
    return view("listings.address")->with(["listing" => $listing, "active_name" => $active_name]);
  }


  public function address_update($listing_id, Request $request)
  {
    Listing::find($listing_id)->update([
      'address' => $request->address,
    ]);

    $listing = Listing::find($listing_id);
    $active_name = "address";
    return view("listings.address")->with(["listing" => $listing, "active_name" => $active_name]);

  }







  public function price($listing_id)
  {
    $listing= Listing::find($listing_id);
    $active_name = "price";
    return view("listings.price")->with(["listing" => $listing, "active_name" => $active_name]);
  }


  public function price_update($listing_id, Request $request)
  {
    Listing::find($listing_id)->update([
      'price_pernight' => $request->price_pernight,
    ]);

    $listing = Listing::find($listing_id);
    $active_name = "price";
    return view("listings.price")->with(["listing" => $listing, "active_name" => $active_name]);

  }




  public function photos($listing_id)
  {
    $listing= Listing::find($listing_id);
    $active_name = "photos";
    return view("listings.photos")->with(["listing" => $listing, "active_name" => $active_name]);
  }







  public function calendar($listing_id)
  {
    $listing= Listing::find($listing_id);
    $active_name = "calendar";
    return view("listings.calendar")->with(["listing" => $listing, "active_name" => $active_name]);
  }


  public function bankaccount($listing_id)
  {
    $listing= Listing::find($listing_id);
    $active_name = "bankaccount";
    return view("listings.bankaccount")->with(["listing" => $listing, "active_name" => $active_name]);
  }






  public function publish($listing_id)
  {
    $listing= Listing::find($listing_id);
    $active_name = "publish";
    return view("listings.publish")->with(["listing" => $listing, "active_name" => $active_name]);
  }

  public function publish_update($listing_id, Request $request)
  {
    Listing::find($listing_id)->update([
      'active' => $request->publish,
    ]);

    $listing = Listing::find($listing_id);
    $active_name = "publish";
    return view("listings.publish")->with(["listing" => $listing, "active_name" => $active_name]);

  }


}
