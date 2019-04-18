<?php

namespace App\Http\Controllers;

use App\Pulse;
use Illuminate\Http\Request;

class PulseController extends Controller
{
    public function index()
    {
        $data['pulse_85_to_90'] = Pulse::whereBetween('value', [85, 90])->count();
        $data['pulse_91_to_100'] = Pulse::whereBetween('value', [91, 100])->count();
        $data['pulse_101_to_110'] = Pulse::whereBetween('value', [101, 110])->count();
        $data['pulse_111_to_120'] = Pulse::whereBetween('value', [11, 120])->count();

        return view('pulse.index', compact('data'));
    }
}
