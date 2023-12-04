<?php

namespace App\Models;

// use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
    protected $with =['author', 'category'];

    public function category()
    {
        return $this->belongsTo(Category::class); 
    }

    public function author() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false , function ($query, $search){
        return $query->where('title', 'like', '%' . $search . '%')
        ->orWhere('excerpt', 'like', '%' .  $search . '%');
        })
        ->when($filters['category'] ?? false , function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                 $query->where('slug', $category);
            });
        })
        ->when($filters['author'] ?? false , function($query, $author){
            return $query->whereHas('', function($query) use ($author){
                 $query->where('slug', $author);
            });
        });
        
    }
    
}
