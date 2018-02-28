<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; 
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller {

	public function __construct()
    {
        $this->middleware('auth');
    }

    function home()
    {
    	return view('owner.owner');
    }

    function backup()
    {
    	DB::statement("SELECT * FROM articles INTO OUTFILE 'C:/xampp/htdocs/blog2/storage/articles.sql'");
    	DB::statement("SELECT * FROM blogs INTO OUTFILE 'C:/xampp/htdocs/blog2/storage/blogs.sql'");
    	DB::statement("SELECT * FROM categories INTO OUTFILE 'C:/xampp/htdocs/blog2/storage/categories.sql'");
    	DB::statement("SELECT * FROM comments INTO OUTFILE 'C:/xampp/htdocs/blog2/storage/comments.sql'");
    	DB::statement("SELECT * FROM migrations INTO OUTFILE 'C:/xampp/htdocs/blog2/storage/migrations.sql'");
    	DB::statement("SELECT * FROM users INTO OUTFILE 'C:/xampp/htdocs/blog2/storage/users.sql'");
    	DB::statement("SELECT * FROM article_category INTO OUTFILE 'C:/xampp/htdocs/blog2/storage/article_category.sql'");
    	DB::statement("SELECT * FROM password_resets INTO OUTFILE 'C:/xampp/htdocs/blog2/storage/password_resets.sql'");

    	//return redirect()->back()->with('alert', 'Deleted!');
    	return redirect('owner/owner')->with('alert', 'Backup made in Storage map!');
    }

}