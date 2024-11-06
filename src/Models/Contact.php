<?php
namespace Mahmudulhsn\Contactform\Models;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'email', 'subject', 'message'];
}
