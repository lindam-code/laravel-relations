<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  protected $fillable = [
    'url',
    'album_id',
  ];

  public function songs() {
    return $this->bolengsTo('App\Album');
  }
}
