<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UploadController extends Controller
{
   public function upload(Request $request)
   {
       DB::beginTransaction();
       try {
           $request->file('image')->store('public');
            DB::commit();
       } catch (\Exception $e) {
           DB::rollBack();
       }
   }

   public function create()
   {
       return view('upload.add');
   }
}
