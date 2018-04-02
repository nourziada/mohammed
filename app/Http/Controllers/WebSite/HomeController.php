<?php

namespace App\Http\Controllers\WebSite;

use App\Header;
use App\HomeBiography;
use App\HomeIslamicCivilization;
use App\HomeMiracle;
use App\HomeTestimonial;
use App\Http\Controllers\Controller;
use App\SectionBelowHeader;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$header = Header::first();
    	$bookFile = url('/storage') .'/'. json_decode($header->book_file,true)[0]['download_link'];

    	$belowHeader = SectionBelowHeader::first();
    	$biographyHome = HomeBiography::first();
    	$islamicHome = HomeIslamicCivilization::first();
    	$miracleHome = HomeMiracle::first();
    	$testimonialHome = HomeTestimonial::first();
    	return view('index',compact('header','bookFile','belowHeader','biographyHome','islamicHome','miracleHome','testimonialHome'));
    }
}
