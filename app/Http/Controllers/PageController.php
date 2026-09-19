<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Setting;

class PageController extends Controller
{
    public function home()
    {
        $setting = Setting::first();

        return view('pages.home', compact('setting'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $setting = Setting::first();
        $services = Service::orderBy('order')->get();

        return view('pages.services', compact('services', 'setting'));
    }

    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function showService(Service $service)
    {
        $setting = Setting::first();

        return view('pages.service-single', compact('service', 'setting'));
    }

    public function contacts()
    {
        return view('pages.contacts');
    }

    public function calculatorSks()
    {
        return view('pages.calculator-sks');
    }

    public function calculatorVols()
    {
        return view('pages.calculator-vols');
    }
}