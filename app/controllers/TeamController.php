<?php

class TeamController extends BaseController {

	public function Index()
	{
          $people = Employee::where('company_id', '=', 106)
                            ->where('isActive', '=', 1, 'AND')->get();

          // load the view and pass the nerds
          return View::make('company.team')
              ->with('people', $people);

	}

}
