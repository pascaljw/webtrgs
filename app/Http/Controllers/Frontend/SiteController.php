<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Academic;
use App\Models\Announcement;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Curriculum;
use App\Models\Document;
use App\Models\Faq;
use App\Models\Thesis;
use App\Models\Filter;
use App\Models\Gallery;
use App\Models\Graduation;
use App\Models\Leave;
use App\Models\Organization;
use App\Models\Outdoor;
use App\Models\Partner;
use App\Models\Program;
use App\Models\Repository;
use App\Models\Research;
use App\Models\Scholarship;
use App\Models\Slider;
use App\Models\Hero;
use App\Models\Team;
use App\Models\TentangKami;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()

    {
        // $cat_id = Category::where('slug', 'pengumuman')->first();
        // $sliders = Slider::orderBy('created_at', 'desc')->get();
        $heros = Hero::all();

        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
        $dosens = Team::all();
        $contact = Contact::first();
        $story = Program::all();
        $tentang = TentangKami::all();
        $akreditasi = Program::whereNotNull('acreditation')->first();


        return view('frontend.index', compact('heros','story','contact','dosens','akreditasi','blogs','tentang'));
    }

    public function visi_misi()
    {
        $dosens = Team::all();
        $contact = Contact::first();
        $story = Program::all();
        return redirect()->route('site.beranda', ['#visi_misi'])->with(compact('story', 'contact', 'dosens'));
    }

    public function berita()
    {
        $dosens = Team::all();
        $contact = Contact::first();
        $story = Program::all();
        return redirect()->route('site.beranda', ['#berita'])->with(compact('story', 'contact', 'dosens'));
    }
    public function berita_show($slug)
    {
        $berita = Blog::where('slug', $slug)->firstOrFail();
        return view('frontend.blogs.show', compact('berita'));
    }
    public function data_dosen()
    {
        $dosens = Team::all();
        $contact = Contact::first();
        $story = Program::all();
        return redirect()->route('site.beranda', ['#data_dosen'])->with(compact('story', 'contact', 'dosens'));
    }

    public function akreditasi()
    {
        $dosens = Team::all();
        $contact = Contact::first();
        $story = Program::all();
        return redirect()->route('site.beranda', ['#akreditasi'])->with(compact('story', 'contact', 'dosens'));
    }
    public function repo()
    {
        $theses = Thesis::orderBy('name', 'asc')->paginate(100);
        return view('frontend.repo.repo', compact('theses'));
    }

    public function contact()
    {

        $contact = Contact::first();
        return view('frontend.contact', compact('contact'));
    }

    public function teamsLecturer()
    {
        $teams = Team::orderBy('name', 'asc')->where('position', '=', 'Dosen')->get();
        return view('front.teams', compact('teams'));
    }

    public function teamsStaff()
    {
        $teams = Team::orderBy('position', 'asc')->where('position', '!=', 'Dosen')->get();
        return view('front.teamStaff', compact('teams'));
    }

    public function teamDetail($id)
    {
        $team = Team::find($id);
        return view('front.teamDetail', compact('team'));
    }

    public function teamStaffDetail($id)
    {
        $team = Team::find($id);
        return view('front.teamStaffDetail', compact('team'));
    }

    public function documents()
    {
        $documents = Document::orderBy('created_at', 'desc')->paginate(10);
        return view('front.documents', compact('documents'));
    }

    public function datatables()
    {
        $documents = Document::orderBy('created_at', 'desc')->get();
        return datatables()->of($documents)
            ->addColumn('file', function (Document $document) {
                return '<a href="' . $document->getFile() . '" />' . $document->file . '</a>';
            })
            ->addIndexColumn()
            ->rawColumns(['file'])
            ->toJson();
    }

    public function blogs()
    {
        $categories = Category::all();
        $announcements = Announcement::orderBy('created_at', 'desc')->paginate(5);
        return view('frontend.blogs.index', compact('categories','announcements'));
    }
    public function pengumuman_show($slug)
    {
        $announcement = Announcement::where('slug', $slug)->firstOrFail();
        return view('front.blogDetail', compact('announcement'));

    }
    public function blogDetail($slug)
    {
        $categories = Category::all();
        $blog = Blog::where('slug', '=', $slug)->first();
        return view('front.blogDetail', compact('blog', 'categories'));
    }

    public function blogFilterCategory($id)
    {
        $category = Category::find($id);
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(5);
        return view('front.blogFilterCategory', compact('blogs', 'category'));
    }

    public function performance()
    {
        $cat_id = Category::where('slug', 'prestasi')->first();
        $performances = Blog::orderBy('created_at', 'desc')->paginate(5);
        return view('front.performance', compact('performances', 'cat_id'));
    }

    public function announcement()
    {
        $announcements = Announcement::orderBy('created_at', 'desc')->paginate(1);
        return view('frontend.pengumuman.index', compact('announcements'));
    }

    public function announcementDetail($slug)
    {
        $announcement = Announcement::where('slug', '=', $slug)->first();
        $anothers = Announcement::orderBy('created_at', 'desc')->where('id', '!=', $announcement->id)->take(5)->get();
        return view('frontend.pengumuman.show', compact('announcement', 'anothers'));
    }
    public function laboratorium()
    {
        $gallerys = Gallery::all();
        $filters = Filter::all();
        return view('frontend.laboratorium.index', compact('gallerys','filters'));
    }

    public function job()
    {
        $job = Academic::whereNotNull('job')->first();
        return view('front.job', compact('job'));
    }

    public function tuition()
    {
        $tuition = Academic::whereNotNull('tuition')->first();
        return view('front.tuition', compact('tuition'));
    }

    public function service()
    {
        $service = Academic::whereNotNull('service')->first();
        return view('front.service', compact('service'));
    }

    public function faq()
    {
        $faqs = Faq::orderBy('created_at', 'asc')->get();
        return view('front.faq', compact('faqs'));
    }

    public function story()
    {
        $story = Program::whereNotNull('story')->first();
        return view('front.story', compact('story'));
    }

    public function vision()
    {
        $vision = Program::whereNotNull('vision')->first();
        return view('front.vision', compact('vision'));
    }

    public function structure()
    {
        $structure = Program::whereNotNull('structure')->first();
        return view('front.structure', compact('structure'));
    }

    public function acreditation()
    {
        $acreditation = Program::whereNotNull('acreditation')->first();
        return view('front.acreditation', compact('acreditation'));
    }

    public function curriculum()
    {
        $curriculums = Curriculum::orderBy('code', 'asc')->get()->groupBy('semester');
        return view('front.curriculum', compact('curriculums'));
    }

    public function gallery()
    {
        $filters = Filter::all();
        $galleries = Gallery::all();

        return view('front.galleries', compact('filters', 'galleries'));
    }

    public function partner()
    {
        $edupartners = Partner::orderBy('created_at', 'desc')->where('edu', '=', 'yes')->get();
        $partners = Partner::orderBy('created_at', 'desc')->whereNull('edu')->paginate(10);
        return view('front.partner', compact('edupartners', 'partners'));
    }

    public function scholarship()
    {
        $scholarship = Scholarship::whereNotNull('scholarship')->first();
        return view('front.scholarship', compact('scholarship'));
    }

    public function organization()
    {
        $organization = Organization::whereNotNull('organization')->first();
        return view('front.organization', compact('organization'));
    }

    public function research()
    {
        $research = Research::whereNotNull('research')->first();
        return view('front.research', compact('research'));
    }

    public function graduation()
    {
        $graduation = Graduation::whereNotNull('graduation')->first();
        return view('front.graduation', compact('graduation'));
    }

    public function leave()
    {
        $leave = Leave::whereNotNull('leave')->first();
        return view('front.leave', compact('leave'));
    }

    public function repository()
    {
        $repository = Repository::whereNotNull('repository')->first();
        return view('front.repository', compact('repository'));
    }
}
