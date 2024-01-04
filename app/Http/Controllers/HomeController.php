<?php

namespace App\Http\Controllers;

use App\Models\ArticlesNew;
use App\Models\Message;
use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class HomeController extends Controller
{
    public function message(Request $request)
    {
       // $message = Message::create($request->all());

         $mailData = [
            'from' => $request->email,
            'title' => $request->title,
            'body' =>  $request->body,
        ];



        Mail::to('info@manhattan-nycwalk.com')->send(new DemoMail($mailData));


        return redirect()->route('home')->with('message', 'updated Successfully');
    }
    public function times_square()
    {
        $articles = ArticlesNew::first();

        $articles->update([
            'visit'=> $articles->visit+1
        ]);
        return view('website.times_square.times_square');
    }

    public function highline()
    {
        $articles = ArticlesNew::first();

        $articles->update([
            'visit'=> $articles->visit+1
        ]);
        return view('website.highline.highline');
    }
    public function home()
    {
        $articles = ArticlesNew::first();

        $articles->update([
            'visit'=> $articles->visit+1
        ]);

        return view('website.manhattan.manhattan');
    }

    public function vessel()
    {
        $articles = ArticlesNew::first();

        $articles->update([
            'visit'=> $articles->visit+1
        ]);

        return view('website.vessel.vessel');
    }



}
