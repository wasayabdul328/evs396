<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersPageController extends ViewComposingController
{

    public function getRegistrationPage(){


        $this->viewdata['name'] = 'Registration Form';
        $this->viewdata['name1'] = 'EVS2';

        return $this->buildPage('registration');
    }

}
