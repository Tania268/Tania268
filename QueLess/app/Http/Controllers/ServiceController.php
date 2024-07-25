<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function licenceRegistration()
    {
        return view('trading/form');
    }

    public function visaApplication()
    {
        return view('visa/form');
    }

    public function refugeeAsylum()
    {
        return view('services.refugee_asylum');
    }

    public function passport()
    {
        return view('passport.form');
    }

    public function civilRegistration()
    {
        return view('civil.index');
    }

    public function identityCards()
    {
        return view('nationalID.form');
    }

    public function citizenship()
    {
        return view('citizenship.form');
    }

    public function companyRegistration()
    {
        return view('company_registration.create');
    }

    public function tradingLicence()
    {
        return view('services.trading_licence');
    }

    public function workPermits()
    {
        return view('services.work_permits');
    }

    public function vehicleLicence()
    {
        return view('services.vehicle_licence');
    }

    public function birthCertificate()
    {
        return view('services.birth_certificate');
    }

    public function privateEwsc()
    {
        return view('services.private_ewsc');
    }

    public function privateEnpf()
    {
        return view('services.private_enpf');
    }

    public function privateEec()
    {
        return view('services.private_eec');
    }

    public function privatePspf()
    {
        return view('services.private_pspf');
    }
}

