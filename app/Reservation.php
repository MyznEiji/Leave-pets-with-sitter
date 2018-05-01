<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  public function listing()
  {
    return $this->belongsTo(Listing::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }


  protected $guarded = [
      'id',
  ];


}
