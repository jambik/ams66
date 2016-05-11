<?php

namespace App\Http\Controllers;

use App\Block;
use App\Recall;
use App\Settings;

class FrontendController extends Controller
{
    protected $settings = null;

    public function __construct()
    {
        $settings   = Settings::find(1);
        $this->settings = $settings;
        view()->share('settings', $settings);

        $recalls = Recall::where('approved', true)->orderBy('created_at', 'desc')->take(3)->get();
        view()->share('recalls', $recalls);

        $blocks = Block::all()->keyBy('alias');
        view()->share('blocks', $blocks);
    }
}
