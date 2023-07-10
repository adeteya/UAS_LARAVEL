<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Rooms extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //deklarasi table
    public $table ='rooms';
    
    // type data harus yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

    protected $fillable = [
        'id',
        'nama',
        'description',
        'price',
        'total_rooms',
        'aminities',
        'size',
        'total_beds',
        'total_bethrooms',
        'total_balconies',
        'total_guests',
        'featured_photo',
        //cara melihat kapan terakhir dilihat
        'created_at',
        'update_at',
        'deleted_at',
    ];

    public function booked_room()
    {
        return $this->hasOne('App\Models\BookedRooms','room_id');
    }

    public function room_photos()
    {
        return $this->hasOne('App\Models\RoomsPhoto','room_id');
    }

    public function hotel()
    {
        return $this->hasOne('App\Models\Hotel','room_id');
    }

}

