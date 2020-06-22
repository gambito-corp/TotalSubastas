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
    public function myaccout()
    {
        return view('');
    }
    public function myaccountEdit(){
        return view('');
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
