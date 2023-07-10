<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Hotel extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //deklarasi table
    public $table ='hotel';
    
    // type data harus yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

    protected $fillable = [
        'id',
        'room_id',
        'nama',
        'alamat',
        //cara melihat kapan terakhir dilihat
        'created_at',
        'update_at',
        'deleted_at',
    ];

    public function room()
    {
        return $this->belongsTo('App\Models\Rooms','room_id', 'id');
    }

    public function orders()
    {
        return $this->hasMany('App\Models\Orders','hotel_id');
    }

}

