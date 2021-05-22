<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable =['paymentStatus','paymentMethod','email','name','amount','fee','currency',
'address','address2','city','postCode','country'];
}
