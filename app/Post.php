<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

    public function scopeFilter($query, $filters)
    {
        if(array_key_exists('month', $filters)) {
            if($month = $filters['month']) {
                $query->whereMonth('created_at', $month);
            }
        }

        if(array_key_exists('year', $filters)) {
            if($year = $filters['year']) {
                $query->whereYear('created_at', $year);
            }
        }

    }

    public static function archives()
    {
        return static::selectRaw('strftime("%Y", created_at) as year, strftime("%m", created_at) as month, COUNT(*) as published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }
}
