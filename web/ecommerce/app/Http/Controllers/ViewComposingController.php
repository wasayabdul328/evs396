<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewComposingController extends Controller
{

    protected $viewdata  = array();
    protected $headerCssFiles = array();
    protected $headerJSFiles = array();
    protected $FooterJsFiles = array();

    public function buildPage($page)
    {

        $pageConfig = config('pages');


        if (!empty($pageConfig[$page])) {

            $cPage = $pageConfig[$page];
            $configComponents = config('components');
            $this->headerCssFiles = $cPage['headerCss'];
            $globalcss = config('globalcss');

            $sections = array('headComponents', 'headerComponents', 'leftComponents', 'rightComponents', 'mainComponents', 'bottomComponents', 'footerComponents', 'footComponents');

            foreach ($sections as $section) {

                $components = $cPage[$section];
                foreach ($components as $component) {
                    if(!empty($configComponents[$component])){
                        $cHeaderCss = $configComponents[$component]['headerCss'];
                        // dd($this->headerCssFiles);
                        $this->headerCssFiles = array_merge($this->headerCssFiles,$cHeaderCss);
                        // dd($this->headerCssFiles);
                    }
                    // dd($component);
                }

                $this->viewdata[$section] = $cPage[$section];
            }

            $filterHeaderCssFiles = array();
            foreach ($this->headerCssFiles as $cssFile) {
                $filterHeaderCssFiles[$cssFile] = $globalcss[$cssFile];
            }

            // dd($filterHeaderCssFiles);
            // Css files store in viewdata
            $this->viewdata['headerCssFiles'] = $filterHeaderCssFiles;



            // dd(get_included_files());
            // dd($this->headerCssFiles);
            return view($cPage['layout'], $this->viewdata);
        } else {
            dd('Please create page config file');
        }
    }
}
