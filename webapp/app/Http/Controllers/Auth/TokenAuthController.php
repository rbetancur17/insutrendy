<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\Mime\Message;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class TokenAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function signup(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:25'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'country' => ['required', 'string', 'max:25'],
            'city' => ['required', 'string', 'max:25'],
            'bussinesstype' => ['required', 'string', 'max:25'],
            'company' => ['required', 'string', 'max:25'],
            'password' => 'required|min:4|max:60',
            'password_confirmation' => 'required|same:password',
            'admin' => ['required', 'string', 'max:5'],
        ], $Messages = []);

        try
        {
            $user = new User();
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->country = $request->country;
            $user->city = $request->city;
            $user->bussinesstype = $request->bussinesstype;
            $user->company = $request->company;
            $user->password = bcrypt($request->password); 
            $user->admin = $request->admin;
 
            //$user->role = 'user';
            //$user->registration_token = str_random(60);
 
            $user->save();
            
        } catch (Exception $e) {
            return response()->error('user_already_exists', HttpResponse::HTTP_CONFLICT);
        }

        //$this->dispatch(new \App\Jobs\SendAccountActivationEmail($user));
 
        return view('auth.login', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
