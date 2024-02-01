<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_user extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'start_of_subscription',
        'end_of_subscription',
        'status'
    ];

    public function user()
    {
        return $this->BelongsTo(User::class);
    }

}
