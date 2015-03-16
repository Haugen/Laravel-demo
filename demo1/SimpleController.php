<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SimpleController extends Controller {

  /**
   * Denna metod returnerar bara texten "Min controller returnerar grejer".
   */
  public function index() {
    return 'Min controller returnerar grejer';
  }

  /**
   * Denna metod returnerar en vy med namnet "my-view".
   */
  public function template() {
    return view('my-view');
  }

  /**
   * Denna metod tar emot ett argument från routen som den sedan skickar med
   * till vyn "data-view" som då får möjlighet att presentera innehållet i $name.
   */
  public function dataTemplate($name) {
    return view('data-view', ['name' => $name]);
  }

  /**
   * Denna metod returnerar en vy med namnet "my-view".
   */
  public function extendsTemplate() {
    return view('extend-view');
  }
 
}
