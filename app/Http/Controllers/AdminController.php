<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Fee;
use App\Models\Feedback;
use App\Models\Gallery;
use App\Models\HelpDesk;
use App\Models\News;
use App\Models\Page;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function dashboard()
    {
        $stats = [
            'total_users' => User::where('role', 'user')->count(),
            'total_applications' => Application::count(),
            'total_feedbacks' => Feedback::count(),
            'total_faqs' => HelpDesk::count(),
            'total_news' => News::count(),
            'total_gallery' => Gallery::count(),
        ];

        $recent_applications = Application::latest()->take(5)->get();
        $recent_feedbacks = Feedback::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recent_applications', 'recent_feedbacks'));
    }

    /* ---------- Applications ---------- */
    public function applications(Request $request)
    {
        $query = Application::latest();
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        if ($request->filled('search')) {
            $query->where('student_name', 'like', '%' . $request->search . '%');
        }
        $applications = $query->paginate(10);
        return view('admin.applications', compact('applications'));
    }

    public function updateApplicationStatus(Request $request, Application $application)
    {
        $request->validate(['status' => 'required|in:pending,approved,rejected']);
        $application->update(['status' => $request->status]);
        return back()->with('success', 'Application status updated.');
    }

    /* ---------- Users ---------- */
    public function users(Request $request)
    {
        $query = User::where('role', 'user')->latest();
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('email', 'like', '%' . $request->search . '%');
            });
        }
        $users = $query->paginate(10);
        return view('admin.users', compact('users'));
    }

    public function deleteUser(User $user)
    {
        if ($user->role === 'admin') {
            return back()->with('error', 'Cannot delete admin user.');
        }
        $user->delete();
        return back()->with('success', 'User deleted successfully.');
    }

    /* ---------- Fees ---------- */
    public function fees()
    {
        $fees = Fee::orderBy('id')->get();
        return view('admin.fees', compact('fees'));
    }

    public function storeFee(Request $request)
    {
        $request->validate([
            'level_en' => 'required|string',
            'level_sw' => 'required|string',
            'tuition_fees' => 'required|string',
            'food' => 'required|string',
            'stationery' => 'required|string',
            'other_expenses' => 'required|string',
            'total' => 'required|string',
            'term_1' => 'nullable|string',
            'term_2' => 'nullable|string',
        ]);
        Fee::create($request->all());
        return back()->with('success', 'Fee structure added.');
    }

    public function updateFee(Request $request, Fee $fee)
    {
        $request->validate([
            'level_en' => 'required|string',
            'level_sw' => 'required|string',
            'tuition_fees' => 'required|string',
            'food' => 'required|string',
            'stationery' => 'required|string',
            'other_expenses' => 'required|string',
            'total' => 'required|string',
            'term_1' => 'nullable|string',
            'term_2' => 'nullable|string',
        ]);
        $fee->update($request->all());
        return back()->with('success', 'Fee structure updated.');
    }

    public function deleteFee(Fee $fee)
    {
        $fee->delete();
        return back()->with('success', 'Fee structure deleted.');
    }

    /* ---------- News ---------- */
    public function news()
    {
        $news = News::latest()->paginate(10);
        return view('admin.news', compact('news'));
    }

    public function storeNews(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'published_at' => 'nullable|date',
        ]);
        News::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title) . '-' . time(),
            'content' => $request->content,
            'published_at' => $request->published_at,
            'is_active' => $request->boolean('is_active', true),
        ]);
        return back()->with('success', 'News article added.');
    }

    public function updateNews(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'published_at' => 'nullable|date',
        ]);
        $news->update([
            'title' => $request->title,
            'content' => $request->content,
            'published_at' => $request->published_at,
            'is_active' => $request->boolean('is_active', true),
        ]);
        return back()->with('success', 'News article updated.');
    }

    public function deleteNews(News $news)
    {
        $news->delete();
        return back()->with('success', 'News article deleted.');
    }

    /* ---------- Help Desk / FAQs ---------- */
    public function helpDesk()
    {
        $faqs = HelpDesk::orderBy('order')->paginate(10);
        return view('admin.helpdesk', compact('faqs'));
    }

    public function storeFaq(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
            'category' => 'required|string',
            'order' => 'required|integer',
        ]);
        HelpDesk::create($request->all());
        return back()->with('success', 'FAQ added successfully.');
    }

    public function updateFaq(Request $request, HelpDesk $faq)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
            'category' => 'required|string',
            'order' => 'required|integer',
        ]);
        $faq->update($request->all());
        return back()->with('success', 'FAQ updated successfully.');
    }

    public function deleteFaq(HelpDesk $faq)
    {
        $faq->delete();
        return back()->with('success', 'FAQ deleted.');
    }

    /* ---------- Feedback / Contact ---------- */
    public function feedback()
    {
        $feedbacks = Feedback::latest()->paginate(10);
        return view('admin.feedback', compact('feedbacks'));
    }

    public function deleteFeedback(Feedback $feedback)
    {
        $feedback->delete();
        return back()->with('success', 'Feedback deleted.');
    }

    /* ---------- Gallery ---------- */
    public function gallery()
    {
        $galleries = Gallery::orderBy('order')->paginate(12);
        return view('admin.gallery', compact('galleries'));
    }

    public function storeGallery(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'category' => 'required|string',
            'order' => 'required|integer',
        ]);
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('gallery', 'public');
        }
        Gallery::create($data);
        return back()->with('success', 'Gallery image added.');
    }

    public function updateGallery(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'category' => 'required|string',
            'order' => 'required|integer',
        ]);
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('gallery', 'public');
        }
        $gallery->update($data);
        return back()->with('success', 'Gallery image updated.');
    }

    public function deleteGallery(Gallery $gallery)
    {
        $gallery->delete();
        return back()->with('success', 'Gallery image deleted.');
    }

    /* ---------- Settings ---------- */
    public function settings()
    {
        $settings = Setting::orderBy('group')->get()->groupBy('group');
        return view('admin.settings', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value, 'type' => 'text', 'group' => 'general']);
        }
        return back()->with('success', 'Settings saved successfully.');
    }

    public function logout()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/')->with('success', 'Logged out successfully.');
    }
}
