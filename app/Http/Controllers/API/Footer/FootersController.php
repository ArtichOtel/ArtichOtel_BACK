<?php

namespace App\Http\Controllers\API\Footer;

use App\Models\Footer;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;




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
    $footers = Footer::all();

    // Return all information Footers in JSON
    return response()->json($footers, Response::HTTP_OK);
  }
}
