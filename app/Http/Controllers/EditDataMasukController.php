<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditDataMasukController extends Controller
{
    public function index() {
        return view('/editdatamasuk',[
            'title' => 'Edit Data'
        ]);
    }
}
