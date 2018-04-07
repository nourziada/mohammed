<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class ProphecyMessage extends Model
{
    use Translatable;
    protected $translatable = ['content'];
}
