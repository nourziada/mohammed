<?php

namespace App\Http\Controllers\WebSite;

use App\Biography;
use App\Character;
use App\Header;
use App\HomeBiography;
use App\HomeIslamicCivilization;
use App\HomeMiracle;
use App\HomeTestimonial;
use App\Http\Controllers\Controller;
use App\ProphecyGod;
use App\ProphecyMessage;
use App\ProphecyRevelation;
use App\ProphecyUniversality;
use App\SectionBelowHeader;
use App\SectionsImage;
use App\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function getUniversality()
    {
        $firstSection = 'null';
        $active = "prophecy.universality";
        $sections = ProphecyUniversality::get();

        return view('prophecy',compact('active','firstSection','sections'));
    }
    public function getOneGod()
    {
        $firstSection = 'null';
        $active = "prophecy.onegod";
        $sections = ProphecyGod::get();

        return view('prophecy',compact('active','firstSection','sections'));
    }
    public function getMessage()
    {
        $active = "prophecy.message";
        $firstSection = ProphecyMessage::first();

        $count = ProphecyMessage::count();
        $skip = 1;
        $limit = $count - $skip;
        $sections = ProphecyMessage::skip($skip)->take($limit)->get();

        return view('prophecy',compact('page','firstSection','sections','active'));
    }
    public function getRevelation()
    {
        $active = "revelation";
        $firstSection = ProphecyRevelation::first();

        $count = ProphecyRevelation::count();
        $skip = 1;
        $limit = $count - $skip;
        $sections = ProphecyRevelation::skip($skip)->take($limit)->get();

        return view('prophecy',compact('firstSection','sections','active'));
    }

    public function getBiography()
    {
        $biographySection = HomeTestimonial::skip(2)->first();

        $firstBiographies = Biography::orderBy('created_at','ASC')->take(5)->get();

        $secondBiographies = Biography::orderBy('created_at','ASC')->skip(5)->take(17)->get();

        

        return view('biography',compact('firstBiographies','secondBiographies'));
    }

    public function getCharacter()
    {
        $characterSection = HomeTestimonial::skip(1)->first();
        $firstChar = Character::first();
        $secondChar = Character::skip(1)->first();
        $thirdChar = Character::skip(2)->first();
        $fourthChar = Character::skip(3)->first();
        $fifthChar = Character::skip(4)->first();
        $sixthChar = Character::skip(5)->first();

        $section_image = SectionsImage::first();
        $active = 'character';

        return view('character',compact('characterSection','firstChar','secondChar','thirdChar','fourthChar','fifthChar','sixthChar','section_image','active'));
    }
    public function getTestimonials()
    {
        $testimonialHome = HomeTestimonial::first();
        $testimonials = Testimonial::orderBy('created_at','desc')->get();
        $active = 'testimonials';
        return view('testimonials',compact('testimonialHome','testimonials','active'));
    }

    public function index()
    {
    	$header = Header::first();
    	$bookFile = url('/storage') .'/'. json_decode($header->book_file,true)[0]['download_link'];

    	$belowHeader = SectionBelowHeader::first();
    	$biographyHome = HomeBiography::first();
    	$islamicHome = HomeIslamicCivilization::first();
    	$miracleHome = HomeMiracle::first();
    	$testimonialHome = HomeTestimonial::first();

        $active = 'index';
    	return view('index',compact('header','bookFile','belowHeader','biographyHome','islamicHome','miracleHome','testimonialHome','active'));
    }
}
