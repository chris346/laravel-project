<?php 
namespace App\Http\Controllers;

use PDO;
use App\Models\Student;
use App\Models\Notice;

// use App\public\heroes;
use Request;

class HomeController extends Controller {
//---------------------------------------
	public function getHome() {
		// $students = Student::getStudents();
		$students = Student::getStudentsCheckedIn();
		$notices = Notice::getNotices();
		
		// print_r($notices);
		return view('home', ["students"=>$students], ["notices"=>$notices]);
		
	}
	//--------------------------------------

	public function addNotice() {
			echo "Hello World";
			return view('newNotice');
	}
	//-------------------------------------

	public function save() {
		
		$notice = new Notice();

		$noticeContent = Request::input("noticeContent");
		// $noticeContent = $_POST["noticeContent"];

		$notice->noticeContent = $noticeContent;

		$notice->save();
		print_r($notice);
		return redirect("/home");
	}
	//--------------------------------------
	public function delete($id) {
			Notice::delete($id);
		}
	//-------------------------------------


	public function edit($id) {
			$notice = Notice::getNotice($id);
			print_r($notice);
	 		return view("editNotice", ["notice"=>$notice]);
	 	}

	//-------------------------------------

	public function postEdit($id) {
			$notices = Notice::getNotice($id);
			$notices->noticeContent = Request::input('noticeContent');
			$notices->save();
			print_r($notices);
			return redirect("/home");
	}

//---------------------------------------	
}




