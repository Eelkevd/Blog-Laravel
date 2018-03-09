<?php

// Controller of the admin section
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Function to check login
	public function __construct()
    {
        $this->middleware('auth');
    }

    // Function to test if user is owner
    public function home()
    {
        $userid = Auth::id();
        $user = DB::table('users')->where('id', $userid)->first();
        if ($user->owner == 1)
        {
            return view('owner.owner');   
        }
    	else 
        {
            return redirect('/');
        }
    }


    // Function to make for each table in the database a backup file
    public function backup()
    {
        $command;
        $dbConnection = env('DB_CONNECTION');
        $dbName = env('DB_DATABASE');
        $dbHost = env('DB_HOST');
        $dbPort = env('DB_PORT');
        $dbUsername = env('DB_USERNAME');
        $dbPassword = env('DB_PASSWORD');

        switch ($dbConnection) 
        {
            case "mysql":
            $command = "C:\\xampp\mysql\bin\mysqldump $dbName -h$dbHost -P$dbPort -u$dbUsername > database_backup.sql";
            break;

            case "pgsql":
            $command = "PGPASSWORD='$dbPassword' pg_dump -h $dbHost -p $dbPort -U $dbUsername $dbName > database_backup.sql";
            break;
        }
        exec($command);
        return response()->download('database_backup.sql')->deleteFileAfterSend(false);
    }   
}