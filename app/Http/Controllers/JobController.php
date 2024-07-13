<?php

namespace App\Http\Controllers;

use App\Jobs\StartJob;
use Illuminate\Http\Request;
use function Symfony\Component\String\s;

class JobController extends Controller
{
    public function startJob(){
        StartJob::dispatch();
        return redirect()->route('home')->with('success', 'Job Started');
    }


}
