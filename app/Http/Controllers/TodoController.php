<?php
 
 namespace App\Http\Controllers;
 
 use Illuminate\Http\Request;
 
 class TodoController extends Controller
 {
     public function view(){
         return view("todo.index");
     }
 
     // public function create(){
     
     //     return create("todo.index");
     // }
 }