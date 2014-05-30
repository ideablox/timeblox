<?php

class PersonController extends AppBaseController {

	public function Index()
	{
          if (Input::has('pid')) {
            $eid = Input::get('pid');
          } else {
            $eid = Session::get('eid');
          }
          $person = Employee::find($eid);

          return View::make('person.person')
              ->with('pageClass', 'page-profile')
              ->with('person', $person);
	}

        public function postUpdate() {
          $person = Employee::find(Input::get('eid'));

          $person->fname = Input::get('fname');
          $person->lname = Input::get('lname');
          $person->email = Input::get('email');
          $person->role = Input::get('role');
          $person->payrate = Input::get('payrate');
          $person->save();

          return Redirect::to('person');
        }

}
