<?php

class AuthController extends AppBaseController {

	public function Index()
	{
		return View::make('auth.signin');
	}

	public function SignIn()
	{
          // if no form posts, then show sign in page
          if (Input::has('signin_username') ) {

            // authenticate now
            if (Auth::attempt(array('id' => Input::get('signin_username'),
                  'password' => Input::get('signin_password') ))) {

                // user is valid
                $person = User::find(Input::get('signin_username'));
                Session::put('loginName', $person->fname 
                  . ' ' . $person->lname);
                Session::put('eid', $person->id);

              if ($person->type == 'regular') {
                // if emp, show check in
                return Redirect::to('/time');
              } else {
                // if mgr, show dashboard
                return Redirect::to('/dashboard');
              }

            } else {
              $person = User::find(Input::get('signin_username'));
              if ($person && $person->password == md5(Input::get('signin_password')) ) {
                $person->password = Hash::make(Input::get('signin_password'));
                $person->save();
                Auth::login($person);
              }

              return View::make('auth.signin');
            }
          } else {
            return View::make('auth.signin');
          }
	}


        // sign up companies
        public function SignUp() {
            return View::make('auth.signup');
        }
}
