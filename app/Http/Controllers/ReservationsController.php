<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Reservation;
use App\Listing;
use Auth;

class ReservationsController extends Controller
{
    public function index()
    {
      $reservations = Auth::user()->reservations;

      return view("reservations.index")->with("reservations", $reservations);
    }

    public function reserved()
    {
      $listings = Auth::user()->listings;
      return view("reservations.reserved")->with("listings", $listings);
    }


    public function store($listing_id, Request $request)
    {
      //***************************************
      // 日時の差を計算
      //***************************************
      function time_diff($time_from, $time_to)
      {
          // 日時差を秒数で取得
          $dif = $time_to - $time_from;
          // 時間単位の差
          $dif_time = date("H:i:s", $dif);
          // 日付単位の差
          $dif_days = (strtotime(date("Y-m-d", $dif)) - strtotime("1970-01-01")) / 86400;
          return $dif_days;
      }


      // 日数分の宿泊料の計算
      $start_date = strtotime($request->start_date);
      $end_date = strtotime($request->end_date);
      $day_diff = time_diff($start_date, $end_date);
      $price_pernigt = Listing::find($listing_id)->price_pernight;

      $total_price = $day_diff * $price_pernigt;

      $listing = Reservation::create(
      [
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
        'price_pernight' => $price_pernigt,
        'user_id' => Auth::user()->id,
        'listing_id' => $listing_id,
        'total_price' => $total_price,
      ]);

      return redirect('/ ');
    }
}
