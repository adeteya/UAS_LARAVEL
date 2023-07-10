<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Orders extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //deklarasi table
    public $table ='orders';
    
    // type data harus yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

    protected $fillable = [
        'id',
        'customer_id',
        'hotel_id',
        'order_no',
        'payment_method',
        'piad_amount',
        'booking_date',
        'status',
        //cara melihat kapan terakhir dilihat
        'created_at',
        'update_at',
        'deleted_at',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id', 'id');
    }

    public function hotel()
    {
        return $this->belongsTo('App\Models\Hotel','hotel_id', 'id');
    }

    public function orders_details()
    {
        return $this->hasOne ('App\Models\Hotel','order_id');
    }
}

