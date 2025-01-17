<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Position;
use App\Models\Career;
use App\Models\PositionCareers;
use App\Models\IpTracker;
use App\Models\Demo;
use Artesaos\SEOTools\Facades\SEOTools;

class WebController extends Controller
{
    public function home()
    {


        SEOTools::setTitle('Full Stack Developer & Flutter Developer | Mualif Ulil', false);
        SEOTools::setDescription('Jasa Pembuatan Website Semarang');
        SEOTools::opengraph()->setUrl('https://mualifulil.com/');
        SEOTools::setCanonical('https://mualifulil.com/');
        SEOTools::opengraph()->addProperty('type', 'articles');

        SEOTools::jsonLd()->addImage('https://mualifulil.com//web/img/ulil-upwork.png');
        $blogs = Blog::with('categoryBlogs', 'users')->where('publish', 1)->latest()->take(5)->get();
        return view('web.home', compact('blogs'));
    }

    public function portofolio()
    {


        SEOTools::setTitle('Portofolio - Full Stack Developer & Flutter Developer | Mualif Ulil', false);
        SEOTools::setDescription('Jasa Pembuatan Website Semarang');
        SEOTools::opengraph()->setUrl('https://mualifulil.com/');
        SEOTools::setCanonical('https://mualifulil.com/');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://mualifulil.com//web/img/photos/ulil-upwork.png');

        return view('web.portofolio');
    }


    public function article(Request $request)
    {

        SEOTools::setTitle('Artikel - Full Stack Developer & Flutter Developer | Mualif Ulil', false);
        SEOTools::setDescription('Jasa Pembuatan Website Semarang');
        SEOTools::opengraph()->setUrl('https://mualifulil.com/');
        SEOTools::setCanonical('https://mualifulil.com/');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://mualifulil.com//web/img/photos/ulil-upwork.png');
        $keyword = $request->get('search');
        $categorySlug = $request->get('category');
        if (!empty($keyword)) {
            $blogs = Blog::with('categoryBlogs', 'users')->where('publish', 1)->where('title', 'like', "%$keyword%")->latest()->paginate(10);
        } else if (!empty($categorySlug)) {
            $blogs = Blog::with('categoryBlogs', 'users')
                ->where('publish', 1)
                ->whereHas('categoryBlogs', function ($q) use ($categorySlug) {
                    $q->where('slug', $categorySlug);
                })
                ->latest()->paginate(10);
            // dd($blogs);
        } else {
            $blogs = Blog::with('categoryBlogs', 'users')->where('publish', 1)->latest()->paginate(10);
        }


        $blogTop = Blog::with('categoryBlogs', 'users')->where('publish', 1)->take(3)->get();
        $categories = Category::orderBy('id', 'desc')->get();

        return view('web.blogs.index', compact('blogs', 'categories', 'blogTop', 'categorySlug'));
    }

    public function detail_article($slug)
    {


        $blog = Blog::with('categoryBlogs', 'users')->where('slug', $slug)->first();
        SEOTools::setTitle($blog->seo_title, false);
        SEOTools::setDescription($blog->seo_description);
        SEOTools::opengraph()->setUrl('https://mualifulil.com/');
        SEOTools::setCanonical('https://mualifulil.com/');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://mualifulil.com//web/img/photos/ulil-upwork.png');

        $checkIp = IpTracker::where('ip_address', request()->ip())->where('blog_id', $blog->id)->exists();
        if (!$checkIp) {
            IpTracker::create([
                'ip_address' => request()->ip(),
                'blog_id' => $blog->id,
            ]);
        }

        $blogTop = Blog::with('categoryBlogs', 'users')->where('publish', 1)->take(3)->get();
        $categories = Category::orderBy('id', 'desc')->get();

        return view('web.blogs.detail', compact('blog', 'categories', 'blogTop'));
    }
}
