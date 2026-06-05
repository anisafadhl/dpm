<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class PageController extends Controller
{
    public function home()
    {
        $recentProjects = Project::latest()->take(3)->get();
        return view('pages.home', compact('recentProjects'));
    }

    public function organization()
    {
        return view('pages.organization');
    }

    public function portfolio()
    {
        $projects = Project::latest()->get();
        return view('pages.portfolio', compact('projects'));
    }

    public function login(Request $request)
    {
        if($request->username == 'admin' && $request->password == 'admin') {
            session(['is_admin' => true]);
            return back();
        }
        return back()->with('error', 'Username atau password salah!');
    }

    public function logout()
    {
        session()->forget('is_admin');
        return back();
    }
}
