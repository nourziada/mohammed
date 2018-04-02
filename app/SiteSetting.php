<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class SiteSetting extends Model
{
    use Translatable;
    protected $translatable = ['footer_desc'];
}
