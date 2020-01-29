<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invhdr extends Model
{
  
  public $table = 'invhdr';
  public $timestamps = false;
  public $incrementing = false;

  public function invdtls() {
    return $this->hasMany('App\Invdtl', 'invhdrid');
  }

  public function orderhdrs() {
    return $this->hasMany('App\Orderhdr', 'invhdrid');
  }

  public function orpaydtls() {
    return $this->hasMany('App\Orpaydtl', 'invhdrid');
  }

  public function srefno() {
    return substr($this->refno,4);
  }
}
