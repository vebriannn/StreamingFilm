<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailUser extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'detail_users';

    protected $fillable = [
        'user_id',
        'start_of_subscription',
        'end_of_subscription',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }




}
