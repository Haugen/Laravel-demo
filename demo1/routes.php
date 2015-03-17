<?php

/**
 * Roten på våran app returnerar texten "Min app".
 */
Route::get('/', function() {
  return 'Min app';
});

/**
 * Vi kan skicka med argument från adressfältet. Sökvägen /name/Tobias skulle allstå
 * skriva ut "Welcome Tobias".
 */
Route::get('/name/{name}', function($name) {
  return 'Welcome ' . $name;
});

/**
 * Skriver ut "ID: 5" om du t.ex skriver in /id/5 i adressfältet. /id/Tobias skulle
 * returnera en 404, eftersom vi med "where" kan göra en kontroll som i vårt fall
 * ser till att "id" är en siffra.
 */
Route::get('/id/{id}', function($id) {
  return 'ID: ' . $id;
})->where(['id' => '[0-9]+']);

/**
 * Sökvägen /simple-controller hänvisar till en controller istället för att returnera
 * något. I vårt fall ska controllerna "SimpleController" användas, och metoden "index"
 * köras. Se SimpleController.php för mer info.
 */
Route::get('/simple-controller', 'SimpleController@index');

/**
 * Sökvägen /view returnerar en vy istället för att direkt skriva ut något. Vyn blir i
 * sin tur ansvarig för att presentera datan.
 */
Route::get('/view', function() {
  return view('my-view');
});

/**
 * Här skickar vi med en array med 4 siffror i. Dessa blir sedan tillgängliga i vyn, under
 * namnet "data".
 */
Route::get('/view-med-data', function() {
  $array = [
    1, 2, 3, 4
  ];

  return view('my-view', ['data' => $array]);
});

/**
 * Vi kan använda oss utav argument på samma sätt som ovan, och skicka dem vidare till
 * vyn på följande sätt.
 */
Route::get('/view/{name}', function($name) {
  return view('data-view', ['name' => $name]);
});

/**
 * Vi kan på samma sätt som ovan skicka med argument in i controller'n. Metoden
 * dataTemplate blir i detta fallet ansvarig för att ta hand om argumentet.
 */
Route::get('/view-controller/{name}', 'SimpleController@dataTemplate');

/**
 * Routen till /extend använder samma controller som ovan, men kallar på en annan
 * metod vid namn "extendsTemplate".
 */
Route::get('/extend', 'SimpleController@extendsTemplate');
