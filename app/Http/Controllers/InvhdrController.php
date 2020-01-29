<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invhdr;
use DB;

class InvhdrController extends Controller
{
  /**
   * Handle the incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Request $request)
  {
      //
  }


  public function show(Request $request, $id) {

  //return ENV('DB_PASSWORD1');

  /*$pdo = DB::connection()->getPdo();

  if ($pdo) {
    echo "Connected successfully to database ".DB::connection()->getDatabaseName();
  } else {
    echo "You are not connected to database";
  }
  
  return $id;*/

    return Invhdr::all();
  }
}
