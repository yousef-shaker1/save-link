<?php

namespace App\Http\Controllers;

use App\Models\show_links;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class save_urlController extends Controller
{
    public function save_url(Request $request){
        show_links::create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'url' => $request->url,
        ]);

        session()->flash('message', 'URL created successfully');
        return redirect()->back();
    }
}
