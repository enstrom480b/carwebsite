<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

class langcontroller extends Controller
{
   public function index(Request $request,$locale)
   {

    app()->setlocale($locale);
    echo trans('lang.msg');

   }

   public function email()
   {
$data=array('name'=>'onkar');
Mail::send(['text'=>'mail'],$data,function($message)
{
$message->to('abc@gmail.com','test mail')->subject('laravel ,messages');
$message->from('ekiprono99@gmail.com'.'rons');
});
echo "mail sent";
}

}
