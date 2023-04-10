<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('posts')->get();
        return $users;
    }

    public function showFilterForm()
    {
        return view('user.index');
    }

    // for fillltering 
    public function userFilter(Request $request)
    {


        $name=$request->input('name');
      



        $query = User::query();

        // check if the column is preset  
        if (Schema::hasColumn('users',$name)) {
            $query->where($name, $request->$name);
             // Execute the query and return the results
            $users = $query->get();

            return response()->json($users);
        }


        return response()->json(['fail'=>"This is Filter is Not available"]);


    }

}
