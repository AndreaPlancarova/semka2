<?php


namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;

class Instructor extends Model
{
    use Notifiable;

    const UPDATED_AT = false;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'photo',
        'age',
        'description'
    ];

}
