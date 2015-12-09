<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
  public function run() {
    # Pet belongs to User
    # Define an inverse one-to-many relationship.
    return $this->belongsTo('\App\User');
  }
}
