<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller {
    public function showLoginForm() {
        return view( 'auth.login' );
    }

    public function showRegisterForm() {
        return view( 'auth.regsiter' );
    }

    public function create( Request $request ) {
        try {

            // Using the validator library to check validations
            $validator = Validator::make( $request-> all(), [
                'first_name' =>'required|max:50',
                'last_name' =>'required|max:50',
                'email' =>'required|email|unique:users',
                'password' =>'required|min:3',
                'confirm_password' =>'required|same:password'
            ] );
            if ( $validator->fails() ) {
                return redirect()->back()->withErrors( $validator )->withInput();
            }
            $user = User::create( [
                'first_name'=> $request->first_name,
                'last_name'=> $request->last_name,
                'email'=> $request->email,
                'password'=> Hash::make( $request->password )
            ] );

            if ( $user ) {
                toastr()->success('User registered successfully!', 'Sucess', ['positionClass' => 'toast-bottom-right']);
                return redirect( '/login' );
            } else {
                toastr()->error('User not registered!', 'Error', ['positionClass' => 'toast-bottom-right']);
                return back();
            }
        } catch ( Exception $e ) {
            dd( $e->getMessage() );
            die;
        }

    }
    public function update( Request $request ) {
        try {

            // Using the validator library to check validations
            $validator = Validator::make( $request-> all(), [
                'first_name' =>'required|max:50',
                'last_name' =>'required|max:50',
            ] );
            if ( $validator->fails() ) {
                return redirect()->back()->withErrors( $validator )->withInput();
            }
           $user = Auth::user();
           if($user){
$user->update([
    'first_name'=> $request->first_name,
    'last_name'=> $request->last_name,
]);
    toastr()->success('User updated successfully!', 'Sucess', ['positionClass' => 'toast-bottom-right']);
                return back();
           }else{
                toastr()->error('User not registered!', 'Error', ['positionClass' => 'toast-bottom-right']);
                return back();
        
           }
            // $user = User::create( [
            //     'first_name'=> $request->first_name,
            //     'last_name'=> $request->last_name,
            //     'email'=> $request->email,
            //     'password'=> Hash::make( $request->password )
            // ] );

            // if ( $user ) {
            //     toastr()->success('User registered successfully!', 'Sucess', ['positionClass' => 'toast-bottom-right']);
            //     return redirect( '/login' );
            // } else {
            //     toastr()->error('User not registered!', 'Error', ['positionClass' => 'toast-bottom-right']);
            //     return back();
            // }
        } catch ( Exception $e ) {
            dd( $e->getMessage() );
            die;
        }

    }

    public function login(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required|min:3',
            ]);
    
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
    
            // Attempt to authenticate the user
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                toastr()->success('User logged in successfully!', 'Success', ['positionClass' => 'toast-bottom-right']);
                return redirect('/dashboard');
            } else {
                toastr()->error('Invalid email or password', 'Error', ['positionClass' => 'toast-bottom-right']);
                return back();
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    

    
    public function logout()
{
    try {
        Auth::logout();
        toastr()->success('User logged out successfully!', 'Success', ['positionClass' => 'toast-bottom-right']);
        return redirect('/login');
    } catch (Exception $e) {
        dd($e->getMessage());
    }
}
}
