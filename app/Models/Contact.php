<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;


class Contact extends Model

{
    use HasFactory;

    public $fillable = ['username', 'email', 'title', 'message'];

    /**
     * Write code on Method
     *
     */

    public static function boot() {
        parent::boot();

        static::created(function ($item) {
            Mail::to(config('mail.to.admin'))->send(new ContactMail($item));
        });
    }

}
