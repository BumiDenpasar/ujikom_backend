<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Love;
use App\Models\Major;
use App\Models\Post;
use App\Models\Statistic;
use App\Models\Text;
use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index() {
        $user = Auth::user();
    
       // Get most liked, most viewed, and most commented news
        $mostLikedNews = Post::withCount('loves')->orderBy('loves_count', 'desc')->first();
        $mostViewedNews = Post::orderBy('views', 'desc')->first();
        $mostCommentedNews = Post::withCount('comments')->orderBy('comments_count', 'desc')->first();

    
        $totalNews = Post::count();
        $totalLikes = Love::count();
        $totalViews = Post::sum('views');
        $totalComments = Comment::count();


    
        $totalVisitsThisWeek = Visit::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()])->count();
        $totalVisitsThisMonth = Visit::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()])->count();
        $totalVisitsThisYear = Visit::whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()])->count();
        $visits = Visit::count();

        $upcomingEvents = Event::where('date', '>', Carbon::now())->orderBy('date', 'asc')->limit(5)->get();



        $latestComments = Comment::latest()->limit(3)->get();
    
        return view('dashboard', compact(
            'mostLikedNews', 
            'mostViewedNews', 
            'mostCommentedNews', 
            'totalNews', 
            'upcomingEvents',
            'totalLikes', 
            'totalViews', 
            'totalComments', 
            'totalVisitsThisWeek', 
            'totalVisitsThisMonth', 
            'totalVisitsThisYear', 
            'latestComments', 
            'visits',
            'user'
        ));
    }


    public function editHome(){
        $mostLikedNews = Post::withCount('loves')->orderBy('loves_count', 'desc')->first();
        $mostViewedNews = Post::orderBy('views', 'desc')->first();

        $recentNews = Post::orderBy('created_at', 'desc')->limit(3)->get();

        $mostCommentedNews = Post::withCount('comments')->orderBy('comments_count', 'desc')->first();
       
        $upcomingEvents = Event::where('date', '>', Carbon::now())->orderBy('date', 'asc')->limit(5)->get();


        $hero = Text::where('placement','LIKE','hero')->first();
        $majors = Text::where('placement','LIKE','majors')->first();
        $gallery = Text::where('placement','LIKE','gallery')->first();
        $news = Text::where('placement','LIKE','news')->first();
        $event = Text::where('placement','LIKE','event')->first();
        $statistics = Statistic::all();
        $majorDetails = Major::all();

        return view("pages.homepage.index", compact(
            'majorDetails',
            'hero',
            'majors',
            'gallery',
            'news',
            'event',
            'statistics'
        ));
    }
    
}
