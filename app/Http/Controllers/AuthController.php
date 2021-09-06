<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return
        [
            "NIS" => 3103119185,
            "Name" => "Syauqi Mubarok",
            "Phone" => 6281326007400,
            "Class" => "XII RPL 6"
        ];
    }

}
