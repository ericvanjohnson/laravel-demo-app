<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

get('/rethinkdb', function(){
    $conn = \r\connect('10.10.10.150');

    //\r\db("test")->tableCreate("tablePhpTest2")->run($conn);

    // Insert a document
    $document = array('someKey' => 'someValue');
    $result = \r\table("tablePhpTest")->insert($document)
        ->run($conn);
    //dd($result);

    //\r\db("test")->tableDrop("tablePhpTest")->run($conn);
});

