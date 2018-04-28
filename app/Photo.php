<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  protected $fillable = [
      'listing_id', 'image',
  ];

  public function listing()
  {
    return $this->belongsTo(Listing::class);
  }
}
