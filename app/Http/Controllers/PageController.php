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
    private function getPage($slug)
    {
        try {
            $page = Page::where('slug', $slug)->first();
            if ($page) return $page;
        } catch (\Exception $e) {
            // Table doesn't exist, return fallback
        }

        // Fallback page data when DB is not available
        $titles = [
            'msfs' => 'Missionary Society of St. Francis de Sales',
            'mission' => 'Our Mission',
            'vision' => 'Our Vision',
            'admission' => 'Admission',
            'fees' => 'School Fees',
            'portal' => 'Student Portal',
            'news' => 'School News',
            'feedback' => 'Feedback',
            'help-desk' => 'Help Desk',
            'contact' => 'Contact Us',
        ];

        $contents = [
            'msfs' => 'The Missionary Society of St. Francis de Sales (MSFS) is an international congregation of Catholic priests and brothers dedicated to education and missionary work. Founded in 1838, we have established schools worldwide including Fransalian School Bombambili.',
            'mission' => 'To provide quality education that nurtures the whole person — intellectually, spiritually, socially, and physically — in the Fransalian tradition of gentleness, optimism, and humility.',
            'vision' => 'To be a leading primary school that empowers children to become responsible, compassionate, and knowledgeable citizens who contribute positively to society.',
            'admission' => 'Welcome to Fransalian School Bombambili. We are delighted that you are considering our school for your child\'s education. Our admission process is designed to be transparent and welcoming.',
            'fees' => 'Our fee structure is designed to be transparent and affordable while maintaining the highest standards of education and facilities.',
            'portal' => 'Access your academic information, results, and school communications through our student portal.',
            'news' => 'Stay updated with the latest happenings, events, and announcements from Fransalian School Bombambili.',
            'feedback' => 'We value your feedback and suggestions. Your input helps us improve and serve our school community better.',
            'help-desk' => 'Find answers to frequently asked questions about admissions, academics, and school life.',
            'contact' => 'We would love to hear from you. Reach out to us for inquiries, feedback, or any assistance you may need.',
        ];

        return (object)[
            'slug' => $slug,
            'title' => $titles[$slug] ?? ucfirst(str_replace('-', ' ', $slug)),
            'content' => $contents[$slug] ?? '',
        ];
    }

    public function show($slug)
    {
        $page = $this->getPage($slug);
        $data = ['page' => $page];

        if ($slug === 'news') {
            try {
                $data['newsItems'] = News::where('is_active', true)
                    ->orderBy('published_at', 'desc')
                    ->get();
            } catch (\Exception $e) {
                $data['newsItems'] = collect();
            }
        } elseif ($slug === 'help-desk') {
            try {
                $data['faqs'] = HelpDesk::where('is_active', true)
                    ->orderBy('order', 'asc')
                    ->get();
            } catch (\Exception $e) {
                $data['faqs'] = collect();
            }
        } elseif ($slug === 'fees') {
            try {
                $data['fees'] = Fee::all();
            } catch (\Exception $e) {
                $data['fees'] = collect();
            }
        } elseif ($slug === 'admission') {
            try {
                $data['admissionSteps'] = AdmissionStep::orderBy('step_number', 'asc')->get();
                $data['admissionRequirements'] = AdmissionRequirement::all();
            } catch (\Exception $e) {
                $data['admissionSteps'] = collect();
                $data['admissionRequirements'] = collect();
            }
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
