<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class PetsController extends Controller {
    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    public function getIndex(Request $request) {
        // Get all the books "owned" by the current logged in users
        // Sort in descending order by id
        $pets = \App\Pet::where('user_id','=',\Auth::id())->orderBy('id','DESC')->get();
        return view('profile.index')->with('pets',$pets);
    }
}
