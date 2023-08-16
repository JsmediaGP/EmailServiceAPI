<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table= 'email_records';
    protected $fillable = ['recipient_email','content','time_sent'];
    use HasFactory;
}
