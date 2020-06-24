<?php

namespace App\Http\Controllers;

use App\Helpers\Gambito;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }
    public function home()
    {
        return view('home.home');
    }
    public function faqs()
    {
        return view('faqs.index');
    }
    public function auction()
    {
        return view('auction.index');
    }
    public function auctionDetail($id)
    {
        return view('auction.detail.index');
    }
    public function auctionLiveDetail($id)
    {
        return view('auction.detail.live.index');
    }
    public function myaccount()
    {
        return view('auth.myaccount.show');
    }
    public function myaccountEdit(){
        return view('auth.myaccount.edit');
    }
    public function myaccountFilestore(Request $request)
 {
            $path = public_path().'/uploads/';
            $files = $request->file('file');
            foreach($files as $file){
                $fileName = $file->getClientOriginalName();
                $file->move($path, $fileName);
            }
 }
    public function users()
    {
        return view('users.index');
    }
    public function game()
    {
        return view('game.show');
    }
}
