<?php

namespace App\Http\Controllers;

use App\Service;
use App\Workshop;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getServices()
    {
        return Service::with('servicesAndWorkshops.workshop')->get();
    }

    public function getParts()
    {
        return Part::with('partsAndWorkshops.workshop')->get();
    }

    public function getWorkshops()
    {
        return Workshop::all();
    }
}
