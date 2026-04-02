<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\News;
use App\Models\HelpDesk;
use App\Models\Feedback;
use App\Models\Fee;
use App\Models\AdmissionStep;
use App\Models\AdmissionRequirement;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        
        $data = ['page' => $page];

        if ($slug === 'news') {
            $data['newsItems'] = News::where('is_active', true)
                ->orderBy('published_at', 'desc')
                ->get();
        } elseif ($slug === 'help-desk') {
            $data['faqs'] = HelpDesk::where('is_active', true)
                ->orderBy('order', 'asc')
                ->get();
        } elseif ($slug === 'fees') {
            $data['fees'] = Fee::all();
        } elseif ($slug === 'admission') {
            $data['admissionSteps'] = AdmissionStep::orderBy('step_number', 'asc')->get();
            $data['admissionRequirements'] = AdmissionRequirement::all();
        }

        $view = "pages.{$slug}";
        
        if (!view()->exists($view)) {
            return view('pages.generic', $data);
        }

        return view($view, $data);
    }

    public function storeFeedback(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Feedback::create($validated);

        return back()->with('success', 'Thank you for your feedback! We will get back to you soon.');
    }

    public function msfs() { return $this->show('msfs'); }
    public function mission() { return $this->show('mission'); }
    public function vision() { return $this->show('vision'); }
    public function admission() { return $this->show('admission'); }
    public function fees() { return $this->show('fees'); }
    public function portal() { return $this->show('portal'); }
    public function news() { return $this->show('news'); }
    public function feedback() { return $this->show('feedback'); }
    public function helpDesk() { return $this->show('help-desk'); }
    public function contact() { return $this->show('contact'); }
}
