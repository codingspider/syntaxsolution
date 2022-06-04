<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\HistorySection;
use App\Models\SkillSection;
use App\Models\OurService;
use App\Models\Statistic;
use App\Models\ProjectCategory;
use App\Models\Project;
use App\Models\FAQ;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Partner;
use App\Models\Blog;
use App\Models\Vission;
use App\Models\Mission;
use App\Models\Feature;
use App\Models\StaticPage;
use App\Models\Subscribe;
use App\Models\SeoSetting;
use App\Models\Price;
use DB;
use App\Jobs\SendEmailJob;
use Brotzka\DotenvEditor\DotenvEditor;
use Analytics;
use Spatie\Analytics\Period;
use MetaTag;

class HomeController extends Controller
{
    public function __construct()
    {
        $seo = SeoSetting::latest()->first();
        // Defaults
        MetaTag::set('description', $seo->meta_description);
        MetaTag::set('title', $seo->meta_title);
        MetaTag::set('keywords', $seo->keywords);
        MetaTag::set('image', asset($seo->image));

    }

    public function Home(){
        $title = 'Home Page'; 
        $slider = Slider::all();
        $history = HistorySection::latest()->first();
        $skills = SkillSection::all();
        $service = OurService::all();
        $counters = Statistic::all();
        $categories = ProjectCategory::all();
        $projects = Project::all();
        $faqs = FAQ::all();
        $teams = Team::all();
        $testimonials = Testimonial::all();
        $partners = Partner::all();
        $blogs = Blog::orderBy('id', 'desc')->get();
        

        return view('home.home', compact('blogs','partners','title', 'slider', 'history', 'skills', 'service', 'counters', 'categories', 'projects', 'faqs', 'teams', 'testimonials'));
    }
    public function ProjectDetail($id){
        $title = 'Project Details'; 
        $projects = Project::find($id);
        return view('home.project_detail', compact('projects', 'title'));
    }
    
    public function Price(){
        $title = 'Price'; 
        $prices = Price::all();
        return view('pages.price', compact('prices', 'title'));
    }
    public function BlogDetail($id){
        $blog = Blog::find($id);
        $recents = Blog::orderBy('id', 'desc')->paginate(3);
        $title = 'Blog Details'; 
        return view('home.blog_detail', compact('blog', 'recents', 'title'));
    }
    public function ServiceDetail($id){
        $service = OurService::find($id);
        $services = OurService::all();
        $title = 'Service Details'; 
        return view('pages.service_detail', compact('service', 'title', 'services'));
    }
    public function AboutUs(){
        $history = HistorySection::latest()->first();
        $vission = Vission::latest()->first();
        $mission = Mission::latest()->first();
        $skills = SkillSection::all();
        $counters = Statistic::all();
        $title = 'About US'; 
        return view('pages.about',compact('counters','history', 'vission', 'mission', 'skills', 'title'));
    }

    public function Feature(){
        $features = Feature::all();
        $title = 'Features'; 
        return view('pages.feature', compact('features', 'title'));
    }
    
    public function Service(){
        $services = OurService::all();
        $title = 'Service'; 
        return view('pages.service', compact('services', 'title'));
    }

    public function Project(){
        $projects = Project::all();
        $categories = ProjectCategory::all();
        $title = 'Projects'; 
        return view('pages.project', compact('projects', 'title', 'categories'));
    }

    public function Team(){
        $teams = Team::all();
        $title = 'Our Team'; 
        return view('pages.team', compact('teams', 'title'));
    }

    public function Testimonial(){
        $testimonials = Testimonial::all();
        $partners = Partner::all();
        $title = 'Testimonial'; 
        return view('pages.testimonial', compact('testimonials', 'title', 'partners'));
    }
    public function Blog(){
        $blogs = Blog::all();
        $title = 'Blog'; 
        return view('pages.blog', compact('title', 'blogs'));
    }
    public function FAQ(){
        $faqs = FAQ::all();
        $title = 'FAQ'; 
        return view('pages.faq', compact('title', 'faqs'));
    }
    public function Contact(){
        $title = 'Contact US'; 
        $address = DB::table('cms_settings')->where('name', 'address')->first();
        $phone = DB::table('cms_settings')->where('name', 'phone')->first();
        $email = DB::table('cms_settings')->where('name', 'email')->first();
        $social_setting = DB::table('social_settings')->get();

        return view('pages.contact', compact('title', 'address', 'phone', 'email','social_setting'));
    }

    public function SendContactMail(Request $request){
        
        $details = [
            'subject' => $request->subject,
            'message' => $request->message,
            'name' => $request->name,
            'email' => $request->email,
        ];
       
        dispatch(new SendEmailJob($details));
       
        return redirect()->to('contact')->with('message', 'Email has been sent succesfully!');
    }

    public function StaticPage($name, $id)
    {
        $page_content = StaticPage::where('type_id', $id)->first();
        $title = $name; 
        return view('pages.static_page', compact('title', 'page_content', 'name'));
    }
    public function test(){
        $title = 'Welcome';
        return view('welcome', compact('title'));
    }

    public function Subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);
        Subscribe::create($request->all());
        return json_encode(array(
            "statusCode"=>200
        ));
    }

    public function GooAnalytics()
    {
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        dd($analyticsData);
        return view('welcome', ['analyticsData' => $analyticsData]);
    }
}
