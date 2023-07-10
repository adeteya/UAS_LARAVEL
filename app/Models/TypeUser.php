<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class TypeUser extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //deklarasi table
    public $table ='type_user';
    
    // type data harus yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

    protected $fillable = [
        'id',
        'tittle',

        //cara melihat kapan terakhir dilihat
        'created_at',
        'update_at',
        'deleted_at',
    ];

    public function detail_user()
    {
        return $this->belongsTo('App\Models\DetailUser','type_user_id', 'id');
    }
}
