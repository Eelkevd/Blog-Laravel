<?php

namespace App;
use DB;
use Carbon\Carbon;
use app\Article;

// Model page for the articles
class Article extends Model
{
	// Couple categories with articles
	public function categories()
	{
		return $this->belongsToMany(Category::class);
	}

	// Couple comments with articles
	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	// Couple a new comment to the other comments of an article
	public function addComment($body)
	{
		$this->comments()->create(compact('body'));
	}

	// Couple comments with articles
	public function ratings()
	{
		return $this->hasMany(Rating::class);
	}

	// Couple a new comment to the other comments of an article
	public function addRating($rating)
	{
		$this->ratings()->create(compact('rating'));
	}

		// Couple blog with articles
	public function average_rating()
	{
		return $this->belongsTo(AverageRating::class);
	}

		// Couple updated average to an article
	public function addAverage_rating($average_rating, $article_id)
	{
		$this->average_rating()->create(compact('average_rating', 'article_id'));
	}

	// Couple blog with articles
	public function blogs()
	{
		return $this->belongsTo(Blog::class);
	}

	public function scopeFilter($query, $filters){

		if($month = $filters['month']){

			$query->whereMonth('created_at', Carbon::parse($month)->month);
		}

		if($year= $filters['year']){

			$query->whereYear('created_at', $year);
		}

	}

	// Returns sorted blogs by date
	public static function archives()
	{

	return Article::orderBy('created_at', 'desc')
	    ->whereNotNull('created_at')
	    ->get()
	    ->groupBy(function(Article $post) {
	        return $post->created_at->format('F');
	    })
	    ->map(function ($item) {
	        return $item
	            ->sortByDesc('created_at')
	            ->groupBy( function ( $item ) {
	                return $item->created_at->format('Y');
	            }); 
	    });
	}
}
