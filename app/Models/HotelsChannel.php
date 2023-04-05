<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelsChannel extends Model
{
    use HasFactory;
    use HasFactory;
     protected $table ='hotels_channel';
    protected $fillable =[
        'channel_id',
        'label',
        'hotel_id',
        'visibility'

    ];
}
