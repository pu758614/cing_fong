<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index ()
    {
        $posts=DB::table('kdan_mask_api_record')->where('id', '=', "1")->get();
       // $posts = DB::select('select * from kdan_mask_api_record where id = ?', [3]);

        return view('cing_fong_company', ['articles' => $posts]);
    }

}
