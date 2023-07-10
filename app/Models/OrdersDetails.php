<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class OrdersDetails extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //deklarasi table
    public $table ='orders_details';
    
    // type data harus yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

    protected $fillable = [
        'id',
        'order_id',
        'room_id',
        'checkin_date',
        'checkout_date',
        'adult',
        'childern',
        //cara melihat kapan terakhir dilihat
        'created_at',
        'update_at',
        'deleted_at',
    ];

    public function orders()
    {
        return $this->belongsTo('App\Models\Orders','customer_id', 'id');
    }

}

