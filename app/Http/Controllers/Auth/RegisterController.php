<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Profile;
use Auth;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/RegisterController';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $request)
    {
        return Validator::make($request->all(), [
            'username' => ['required', 'string', 'max:255'],
            'role_id' => ['required'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $rq)
    {
        $new = User::create([
            'role_id' => $rq->role,
            'username' => $rq->username,
            'password' => Hash::make($rq->pass),
        ]);

        $userId = User::all()->max()->id;

        $profile = new Profile;
        $profile->user_id = $userId;
        $profile->program_id = $rq->prog;
        $profile->firstname = $rq->fname;
        $profile->middlename = $rq->mname;
        $profile->lastname = $rq->lname;
        $profile->attainment_id = $rq->attain;
        $profile->sex = $rq->sex;
        $profile->student_no = $rq->idno;
        $profile->save();

        $this->guard()->login($new);
        return 'user created';
    }
}
