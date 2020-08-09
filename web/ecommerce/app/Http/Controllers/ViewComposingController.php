<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewComposingController extends Controller
{

    protected $viewdata  = array();

    public function buildPage($page)
    {

        $pageConfig = config('pages');

        if (!empty($pageConfig[$page])) {

            $cPage = $pageConfig[$page];
            $layout = $cPage['layout'];

            $components = array('head','header','left' , 'right','main', 'bottom', 'footer', 'foot');

            foreach($components as $component){

                $this->viewdata[$component.'Components'] =$cPage[$component.'Components'];
            }

            // dd($this->viewdata);
            return view($layout, $this->viewdata);
        } else {
            dd('Please create page config file');
        }
    }
}
