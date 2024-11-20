<?php

namespace App\Http\Controllers;

use App\Models\Text;
use App\Http\Requests\TextRequest;
use Illuminate\Http\Request;

class TextController extends Controller
{
    public function updateHero(TextRequest $request)
    {

        $hero = Text::where('placement', 'LIKE', 'hero')->first();

        if ($hero) {
            $hero->update($request->validated());
            return redirect()->route('dashboard.homepage')
                             ->with('success', 'Hero section updated successfully.');
        }

        return redirect()->route('dashboard.homepage')
                         ->with('error', 'Hero section not found.');
    }

    public function updateMajors(TextRequest $request)
    {
        $majors = Text::where('placement', 'LIKE', 'majors')->first();

        if ($majors) {
            $majors->update($request->validated());
            return redirect()->route('dashboard.homepage') 
                             ->with('success', 'Majors section updated successfully.');
        }

        return redirect()->route('dashboard.homepage')
                         ->with('error', 'Majors section not found.');
    }

    public function updateGallery(TextRequest $request)
    {
        $gallery = Text::where('placement', 'LIKE', 'gallery')->first();

        if ($gallery) {
            $gallery->update($request->validated());
            return redirect()->route('dashboard.homepage')
                             ->with('success', 'Gallery section updated successfully.');
        }

        return redirect()->route('dashboard.homepage') 
                         ->with('error', 'Gallery section not found.');
    }

    public function updateNews(TextRequest $request)
    {
        $news = Text::where('placement', 'LIKE', 'news')->first();

        if ($news) {
            $news->update($request->validated());
            return redirect()->route('dashboard.homepage') 
                             ->with('success', 'News section updated successfully.');
        }

        return redirect()->route('dashboard.homepage') 
                         ->with('error', 'News section not found.');
    }


    public function updateEvent(TextRequest $request)
    {
        $event = Text::where('placement', 'LIKE', 'event')->first();

        if ($event) {
            $event->update($request->validated());
            return redirect()->route('dashboard.homepage') 
                             ->with('success', 'Event section updated successfully.');
        }

        return redirect()->route('dashboard.homepage') 
                         ->with('error', 'Event section not found.');
    }
}
