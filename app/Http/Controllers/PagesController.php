<?php

namespace App\Http\Controllers;

use App\Partner;
use App\Recall;

class PagesController extends FrontendController
{
    /**
     * Display the page.
     * @return Response
     * @internal param $slug
     */
    public function index()
    {
        $partners = Partner::take(12)->get();

        return view('index', compact('partners'));
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
