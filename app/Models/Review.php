<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Review extends Model
{
    use Notifiable;

    const UPDATED_AT = false;
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','description', 'author'];

}
