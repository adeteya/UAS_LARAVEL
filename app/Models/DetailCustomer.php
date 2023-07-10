<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class DetailCustomer extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //deklarasi table
    public $table ='detail_customer';
    
    // type data harus yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

    protected $fillable = [
        //'id',
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gender',
        //cara melihat kapan terakhir dilihat
        'created_at',
        'update_at',
        'deleted_at',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','customer_id' , 'id');
    }

    public function type_user()
    {
        return $this->belongsTo('App\Models\TypeUser','type_user_id', 'id');
    }

}

