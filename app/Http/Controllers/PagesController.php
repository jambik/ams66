<?php

namespace App\Http\Controllers;

use App\Page;

class PagesController extends FrontendController
{
    /**
     * Display the page.
     * @return Response
     * @internal param $slug
     */
    public function index()
    {
        return view('index');
    }

    public function landDepartment()
    {
        return view('land-department');
    }

    public function buildingDepartment()
    {
        return view('building-department');
    }

    public function investingDepartment()
    {
        return view('investing-department');
    }
}
