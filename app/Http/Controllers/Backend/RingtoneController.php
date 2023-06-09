<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RingtoneController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('backend.ringtone.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|min:3|max:100',
            'description'=>'required|min:3|max:500',
            'file'=>'required|mimes:mp3',
            'category'=>'required'
        ]);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
