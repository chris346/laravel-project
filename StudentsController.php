<?php 
namespace App\Http\Controllers;

use App\Models\Student;
use Request;
use Auth;

class StudentsController extends Controller {
//---------------------------------------
	public function getStudents() {
		$students = Student::getStudents();
		// print_r($students);
		return view('students', ["students"=>$students]);
		
	}
//--------------------------------------

public function getStudentDetails($studentID) {

	$student = Student::get($studentID);
	// print_r($student);
		return view('studentDetails', ["student"=>$student]);

	}
	//-------------------------------------
	public function addStudent() {
			// echo "Hello World";
			return view('newStudent');
	}
	//------------------------------------
	public function save(){

		echo "SAVE function from studentController.php is working";

		$student = new Student();
		$studentName = Request::input('studentName');
		$email = Request::input('email');
		$studentRank = Request::input('studentRank');
		$studentPhone = Request::input('studentPhone');
		$img1 = Request::input('img1');
		$img2 = Request::input('img2');
		$img3 = Request::input('img3');
		$img4 = Request::input('img4');
		$img5 = Request::input('img5');
		
		print_r($studentName);

		$student->studentName = $studentName;
		$student->studentRank = $studentRank;
		$student->studentPhone = $studentPhone;
		$student->email = $email;
		

		$student->save();
		print_r($studentPhone);
		return redirect("/students");
	}
	//---------------------------------------
	public function delete($id) {
		Student::delete($id);
		return "true";
	}
	//--------------------------------------

	public function edit($id) {
			$student = Student::get($id);
			// print_r($student);
	 		return view("editStudent", ["student"=>$student]);
	 	}
//-----------------------------------------
	public function postEdit($id) {
			$student = Student::get($id);
			$student->studentName = Request::input('studentName');
			$student->studentRank = Request::input('studentRank');
			$student->studentPhone = Request::input('studentPhone');
			$student->email = Request::input('email');
			$student->img1 = Request::input('img1');
			$student->img2 = Request::input('img2');
			$student->img3 = Request::input('img3');
			$student->img4 = Request::input('img4');
			$student->img5 = Request::input('img5');
			
			$student->save();
			// print_r($student);
			return redirect("/students");
		}	

//---------------------------------------------
	public function checkIn() {
		$user = Auth::user();
		$user->coming=1;
		$user->update();
		return redirect("/home");
	}
//--------------------------------------------































//---------------------------------------	
}



