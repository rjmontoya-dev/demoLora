<?php

namespace App\Http\Controllers;

use App\Events\WebhookEvent;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WebhookController extends Controller
{
    public function store(Request $request){

        $data = now();
        event(new WebhookEvent($data));

        return $data;

    }
    public function index(){
        return "asdf";
        return Inertia::render('Welcome');
    }
}
