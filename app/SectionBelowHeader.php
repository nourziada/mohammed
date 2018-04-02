<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class SectionBelowHeader extends Model
{
	use Translatable;
    protected $translatable = ['title', 'sub_title','content','referance'];

    protected $table = "section_below_header";
}
