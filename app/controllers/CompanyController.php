<?php

class CompanyController extends BaseController {

	public function Index()
	{
          $company = Company::find(106);

          return View::make('company.company')
              ->with('pageClass', 'page-profile')
              ->with('company', $company);
	}

}
