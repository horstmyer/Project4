<?php


Route::get('/', 'IndexController@getIndex');
# login
Route::get('/login', 'Auth\AuthController@getLogin');
# Process login
Route::post('/login', 'Auth\AuthController@postLogin');
# Process logout
Route::get('/logout', 'Auth\AuthController@getLogout');
# Show registration
Route::get('/register', 'Auth\AuthController@getRegister');
# Process registration form
Route::post('/register', 'Auth\AuthController@postRegister');

Route::get('profile', 'PetsController@getIndex');


Route::get('/confirm-login-worked', function() {
    # You may access the authenticated user via the Auth facade
    $user = Auth::user();
    if($user) {
        echo 'You are logged in.';
        dump($user->toArray());
    } else {
        echo 'You are not logged in.';
    }
    return;
});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::get('/debug', function() {
    echo '<pre>';
    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';
    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";
    echo '<h1>Database Config</h1>';
    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }
    echo '</pre>';
});
