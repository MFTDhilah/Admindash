<?php

namespace App\Http\Controllers;

use App\Models\Facilities;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\PostsWorker;
use App\Models\Posts;
use App\Models\ServicesBody;
use App\Models\ServicesFacial;
use App\Models\ServicesHair;
use App\Models\ServicesNail;
use App\Models\Package100;
use App\Models\Package150;
use App\Models\Package200;
use App\Models\PackageBody;
use App\Models\PreweddingBronze;
use App\Models\PreweddingSilver;
use App\Models\PreweddingGold;




class LandingController extends BaseController
{

    public function index()
    {

        $postsworker = PostsWorker::where('status','!=',9)->get();
        $posts = Posts::where('status','!=',9)->get();
        $facility = Facilities::where('status','!=',9)->get();
        $facial = ServicesFacial::where('status','!=',9)->get();

        return view('index',compact('postsworker','posts','facility', 'facial') );
    }
    public function about()
    {

        $postsworker = PostsWorker::where('status','!=',9)->get();
        $posts = Posts::where('status','!=',9)->get();
        $facility = Facilities::where('status','!=',9)->get();

        return view('about',compact('postsworker','posts','facility') );
    }
    public function facial()
    {
        $facial = ServicesFacial::where('status','!=',9)->get();

        return view('facial',compact('facial') );
    }
    public function body()
    {

        $body = ServicesBody::where('status','!=',9)->get();

        return view('body',compact('body') );
    }
    public function hair()
    {

        $hair = ServicesHair::where('status','!=',9)->get();

        return view('hair',compact('hair') );
    }
    public function nail()
    {

        $nail = ServicesNail::where('status','!=',9)->get();

        return view('naillash',compact('nail') );
    }
    public function packagebody()
    {

        $pbody = PackageBody::where('status','!=',9)->get();

        return view('bodypackage',compact('pbody') );
    }
    public function package100()
    {

        $p100 = Package100::where('status','!=',9)->get();

        return view('p100',compact('p100') );
    }
    public function package200()
    {

        $p200 = Package200::where('status','!=',9)->get();

        return view('p200',compact('p200') );
    }
    public function package150()
    {

        $p150 = Package150::where('status','!=',9)->get();

        return view('p150',compact('p150') );
    }
    public function prewedbronze()
    {

        $prebronze = PreweddingBronze::where('status','!=',9)->get();

        return view('bronze',compact('prebronze') );
    }
    public function prewedsilver()
    {

        $presilver = PreweddingSilver::where('status','!=',9)->get();

        return view('silver',compact('presilver') );
    }
    public function prewedgold()
    {

        $pregold = PreweddingGold::where('status','!=',9)->get();

        return view('gold',compact('pregold') );
    }
    
    public function package()
    {

        $pbody = PackageBody::where('status','!=',9)->get();
        $p100 = Package100::where('status','!=',9)->get();
        $p150 = Package150::where('status','!=',9)->get();
        $p200 = Package200::where('status','!=',9)->get();
        $prebronze = PreweddingBronze::where('status','!=',9)->get();
        $presilver = PreweddingSilver::where('status','!=',9)->get();
        $pregold = PreweddingGold::where('status','!=',9)->get();
        return view('package',compact('pbody', 'p100', 'p150', 'p200', 'prebronze', 'presilver', 'pregold') );
    }
}
