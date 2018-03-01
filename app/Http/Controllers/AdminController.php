<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller {

	public function __construct()
    {
        $this->middleware('auth');
    }

    function home()
    {
        $userid = Auth::id();
        $user = DB::table('users')->where('id', $userid)->first();
        if ($user->owner == 1){
            return view('owner.owner');   
        }
    	else {
            return view('articles.home');
        }
    }

    function backup()
    {
        $filename = (base_path('storage/articles.sql'));
        if (file_exists($filename)){
        return redirect('owner/owner')->with('alert', 'First remove the old backup from the storage map!');    
        }
        else{
            $article_file = (base_path('storage/articles.sql'));
        	DB::statement("SELECT * FROM articles INTO OUTFILE '".addslashes($article_file)."'");
            $blogs_file = (base_path('storage/blogs.sql'));
        	DB::statement("SELECT * FROM blogs INTO OUTFILE '".addslashes($blogs_file)."'");
            $categories_file = (base_path('storage/categories.sql'));
        	DB::statement("SELECT * FROM categories INTO OUTFILE '".addslashes($categories_file)."'");
            $comments_file = (base_path('storage/comments.sql'));
        	DB::statement("SELECT * FROM comments INTO OUTFILE '".addslashes($comments_file)."'");
            $migrations_file = (base_path('storage/migrations.sql'));
        	DB::statement("SELECT * FROM migrations INTO OUTFILE '".addslashes($migrations_file)."'");
            $users_file = (base_path('storage/users.sql'));
        	DB::statement("SELECT * FROM users INTO OUTFILE '".addslashes($users_file)."'");
            $article_category_file = (base_path('storage/article_category.sql'));
        	DB::statement("SELECT * FROM article_category INTO OUTFILE '".addslashes($article_category_file)."'");
            $password_resets_file = (base_path('storage/password_resets.sql'));
        	DB::statement("SELECT * FROM password_resets INTO OUTFILE '".addslashes($password_resets_file)."'");
        }
    	return redirect('owner/owner')->with('alert', 'Backup made in Storage map!');
    }

}