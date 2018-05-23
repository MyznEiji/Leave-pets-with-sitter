<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{


  protected $fillable = [
      'description', 'rate', 'user_id','listing_id',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function listing()
  {
    return $this->belongsTo(Listing::class);
  }
}
