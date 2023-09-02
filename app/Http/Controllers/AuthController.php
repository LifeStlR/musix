<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    public function Index() //method Index
    {
		//Firstly check the Auth if "ok" the page is redirected to the welcome.blade.php page
        if(Auth::check())
        {
            return view('welcome');
        }
        else
        {
			//Otherwise it will stay on the Login page
            return Redirect::to('login');
        }
    }

    public function Login() //login, directed to view Login.blade.php
    {
        return view('login');
    }

    public function Register() //register will display register.blade.php
    {
        return view('register');
    }

    public function PostRegister(Request $request) //catch post request from url PostRegister
    {
		//data validation for login
        request()->validate([ 
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required',
            ]);
             
            $data = $request->all();
            
            $check = $this->create($data);
            //return to root 
            return Redirect::to("/")->withSuccess('Great! You have Successfully loggedin');
    }
    
    public function PostLogin(Request $request) //catch post request from url PostLogin
    {
		//data validation from PostLogin
        $this->validate($request, [ 
            'email' => 'required|email',
            'password' => 'required',
        ]);
		//put it in the userdata array for upcoming checking
        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );
		
		//checking requested if successful return to root if not informed of the error
        if(Auth::attempt($user_data))
        {
            return Redirect::to('/');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }
    }

	//create user with data of name, email, role, and password
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'role' => $data['role'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function search(Request $request)
    {
        $search = $request->get('search'); //get value from search
        //then get the value from user where needed then set to users
        $users = User::where('name', 'like', '%' . $search . '%')->orWhere('role', 'like', '%' . $search . '%')->select('name','role')->get();
        $userreturn = array(); //set temporary value to usertemp as array 
        $usertemp = array(); // output value to userreturn as array
        if(sizeof($users) > 0){ //condition met then execute
            foreach ($users as $index=>$user) { //set the index of users to user
                array_push($usertemp, $user); //push the indexed user to usertemp
            if($index%3 == 2 || $index == sizeof($users)-1){ //making it go at max 3 row then it goes down in column, with the last index not being left out
                array_push($userreturn, $usertemp); //after condition fulfilled it pushing current usertemp to userreturn array
                $usertemp = array(); //after done pushing it emptied out the usertemp
                }
            
            }
        }
        error_log(json_encode($userreturn));
        return view('search')->with('users', $userreturn); //showing output within the userreturn array
    }

    public function Logout()
    {
        Session::flush(); //cleared out the current session
        Auth::logout(); //then logout
		//after logout then redirect to login page
        return Redirect::to('login');
    }

    //making an array value to be displayed by taking the desired value of user from Models -> User.php
    public function Profile()
    {
        $data= array(
            'name' => Auth::user()->name,
            'role' => Auth::user()->role,
            'email' => Auth::user()->email,
        );
		//displays view profile
        return view('profile')->with('data',$data);
    }
	
    public function UpdateProfile(Request $request)
    {
        $user = User::find(Auth::user()->id);
		//Checking whether the field is empty or not if it's not empty then request the current field value then replace the existing value of the requested
        if($request->name != '')
        {
            $user->name = $request->name;
        }  
        if($request->role != '')
        {
            $user->role = $request->role;
        }
        if ($request->password != '')
        {
            //why password here not appear while update because it is Hidden
            $user->password = Hash::make($request->password); //making sure the new input also hashed again
        }
        $user->save();
		//Save the update then return to root
        return Redirect::to('/');
    }

    //Find the user with the current id and delete then return to root
    public function DeleteProfile()
    {
        $user = User::find(Auth::user()->id);
        $user->delete();
        return Redirect::to('/');
    }
}
