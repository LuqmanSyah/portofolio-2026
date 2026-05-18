<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $profile = \App\Models\Profile::first();
        $skills = Skill::orderBy('category')->get();
        return view('page.home', compact('skills', 'profile'));
    }

    public function projects()
    {
        $projects = Project::where('is_published', true)->latest()->get();
        $report = \App\Models\Report::first();
        return view('page.projects', compact('projects', 'report'));
    }

    public function projectDetail($slug)
    {
        $project = Project::where('slug', $slug)->where('is_published', true)->firstOrFail();
        return view('page.project-detail', compact('project'));
    }

    public function reportDetail($slug)
    {
        $report = \App\Models\Report::where('slug', $slug)->firstOrFail();
        return view('page.report-detail', compact('report'));
    }

    public function contact()
    {
        return view('page.contact');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:65535',
        ]);

        Contact::create($validated);

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}
