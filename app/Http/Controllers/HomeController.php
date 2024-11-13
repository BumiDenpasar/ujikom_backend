<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
    
        $mostLikedNews = Post::withCount('loves')->orderBy('loves_count', 'desc')->first();
        $mostViewedNews = Post::orderBy('views', 'desc')->first();

        $recentNews = Post::orderBy('created_at', 'desc')->limit(3)->get();

        $mostCommentedNews = Post::withCount('comments')->orderBy('comments_count', 'desc')->first();
       
        $upcomingEvents = Event::where('date', '>', Carbon::now())->orderBy('date', 'asc')->limit(5)->get();
    
        return view('welcome', compact(
            'mostLikedNews', 
            'mostViewedNews', 
            'upcomingEvents',
            'recentNews',
        ));
    }

    public function news(){
        $news = Post::all();

        return view('news', compact('news'));
    }

    public function events(){
        $events = Event::all();

        return view('events', compact('events'));
    }

    public function galleries(){
        $galleries = Gallery::all();

        return view('galleries', compact('galleries'));
    }
}
