<?php

namespace App\Http\Controllers\API\Footer;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;




class FootersController extends Controller
{
  /**
   * Display a listing of the resources
   * 
   * @return \Illuminate\Http\JsonResponse
   */
  public function __invoke()
  {
    // Recup all Footers
    $Footers =  Footer::all();

    // Return all information Footers in JSON
    return response()->json($Footers, 200);
  }
}
