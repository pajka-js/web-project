<?php

namespace App\Http\Controllers;

use App\Models\Roly;

class RolyController extends Controller
{
    public function showAction($id)
    {
        $roly = Roly::find($id);
        echo $roly->rola;
    }
}