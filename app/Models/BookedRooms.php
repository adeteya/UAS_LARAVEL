<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class BookedRooms extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //deklarasi table
    public $table ='booked_rooms';
    
    // type data harus yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

    protected $fillable = [
        'id',
        'room_id',
        'booking_date',
        'order_no',
        //cara melihat kapan terakhir dilihat
        'created_at',
        'update_at',
        'deleted_at',
    ];

    public function rooms()
    {
        return $this->belongsTo('App\Models\Rooms','room_id', 'id');
    }


}
