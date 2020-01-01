<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class DataB extends Model
{
    protected $table = '_data_table';  //specified the table used
protected $fillable=['Geography' ,'record_2008','record_2009','record_2010','record_2011','record_2012']; //if there is any big content it will holf it
}
