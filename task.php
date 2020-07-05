<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class profileController extends Controller
{
 public function add(){
     return viw('admin.profile.create');
  }
 public function create(){
     return redirecter('admin.profile.create');
  }
 public function edit(){
     return viw('admit.profile.create'); 
  } 
 public function update(){
     return radirecter('admit.profile.create');
 }
}