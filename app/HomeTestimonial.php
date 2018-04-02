<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class HomeTestimonial extends Model
{
    use Translatable;
    protected $translatable = ['main_title', 'sub_title','description'];
}
