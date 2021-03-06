<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobile extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content', 'category','opd_phone','Sterilization','opd_vaccine','user_id','sex','breed','color','year','opd_details','appointment','appointment_details','appointment_date','image','line_id','cus_name',];

    
}
