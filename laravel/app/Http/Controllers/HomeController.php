<?php namespace App\Http\Controllers;
//use Illuminate\Http\Request;
use Request;
use App\Http\Requests;
//use App\laravel;;
use App\Laravel;
use DB;
//use App\Quotation;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}
	public function contact_us()
	{
		return view('contact_us');
	}
	public function contact_us_listing()
	{
		$data['data'] = DB::select("SELECT * FROM laravels order by id desc");  //select all data form database
		
		
		//Laravel::find(1);
     	return view('contact_us_listing',$data);
	}
	
	
	public function contact_me(Request $request){
		
		/*$f_name=$request->input('f_name');
		$l_name=$request->input('l_name');
		$phone=$request->input('phone');
		$email=$request->input('email');
		$data=array('f_name'=>$f_name,'l_name'=>$l_name,'phone'=>$phone,'email'=>$email);
		DB::tabel('laravels')->insert($data);
		echo 'sucess';*/
		//print_r($request);
		//echo 'hhhhh';
		laravel::create(Request::all());// insert data in database
		//return 'data saved';
		 return redirect('/contact_us_listing')->with('status', 'Contact saved successfully!');;
		
	}

}
