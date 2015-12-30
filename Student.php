<?php 
//THIS IS THE MODEL
Namespace App\Models;
use PDO;
use DB;

class Student {
	public $studentID;
	public $studentName;
	public $email;
	public $studentRank;
	public $studentPhone;
	public $img1;
	public $img2;
	public $img3;
	public $img4;
	public $img5;

	public static function getStudents() {
		$sql = "SELECT * from students";
		$rows = DB::select($sql);

		$students =  [];

		foreach($rows as $row){
			$student = new Student ();
			$student->studentID = $row->studentID;
			$student->studentName = $row->studentName;
			$student->email = $row->email;
			$student->studentRank = $row->studentRank;
			$student->studentPhone = $row->studentPhone;
			$student->img1 = $row->img1;
			$student->img2 = $row->img2;
			$student->img3 = $row->img3;
			$student->img4 = $row->img4;
			$student->img5 = $row->img5;
			$students[] = $student; 
		}
		return $students;
	}

	public static function getStudentsCheckedIn() {
		$sql = "SELECT * from students WHERE coming = 1";
		$rows = DB::select($sql);

		$students =  [];

		foreach($rows as $row){
			$student = new Student ();
			$student->studentID = $row->studentID;
			$student->studentName = $row->studentName;
			$student->studentRank = $row->studentRank;
			$student->studentPhone = $row->studentPhone;
			$student->img1 = $row->img1;
			$student->img2 = $row->img2;
			$student->img3 = $row->img3;
			$student->img4 = $row->img4;
			$student->img5 = $row->img5;
			$students[] = $student; 
		}
		return $students;
	}
//-------------------------------------------------
	 public static function get($studentID){

		$sql = "SELECT * from students WHERE studentID = :x";
	  	$row = DB::selectOne($sql, ['x'=>$studentID]);
	  	

	  	$student = new Student();
	  	$student->studentID = $row->studentID;
	  	$student->studentName = $row->studentName;
	  	$student->email = $row->email;
		$student->studentRank = $row->studentRank;
		$student->studentPhone = $row->studentPhone;
		$student->img1 = $row->img1;
		$student->img2 = $row->img2;
		$student->img3 = $row->img3;
		$student->img4 = $row->img4;
		$student->img5 = $row->img5;
		
		// print_r($student);
		return $student;
	}



//-------------------------------------------------------

public function save() {

		if($this->studentID > 0){
			$this->update();
		}
		else{
			$this->insert();
		}
	}	

// //--------------------------------------------

	public function insert() {
		$sql = "INSERT INTO students (studentName, email, studentRank, studentPhone, img1, img2, img3, img4, img5) values (:studentName, :email, :studentRank, :studentPhone, :img1, :img2, :img3, :img4, :img5)";
		//$sql = "INSERT INTO students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values (:studentName, :studentRank, :studentPhone, :img1, :img2, :img3, :img4, :img5)";
		DB::insert ($sql, [":studentName"=>$this->studentName, ":email"=>$this->email, ":studentRank"=>$this->studentRank, ":studentPhone"=>$this->studentPhone, ":img1"=>$this->img1, ":img2"=>$this->img2, ":img3"=>$this->img3, ":img4"=>$this->img4, ":img5"=>$this->img5]);
	}

//----------------------------------------------
	public static function delete($id) {
		$sql = "DELETE FROM students WHERE studentID=:id";
		DB::delete($sql, ["id"=>$id]);
	}
//----------------------------------------------
	private function update() {
		// TODO fix this to be an update SQL ...
		$sql = "UPDATE students SET studentName=:studentName, email=:email, studentRank=:studentRank, studentPhone=:studentPhone, img1=:img1, img2=:img2, img3=:img3, img4=:img4, img5=:img5, coming=0 WHERE studentID=:id";
		DB::insert ($sql, [":studentName"=>$this->studentName, ":email"=>$this->email, ":studentRank"=>$this->studentRank, ":studentPhone"=>$this->studentPhone, ":img1"=>$this->img1, ":img2"=>$this->img2, ":img3"=>$this->img3, ":img4"=>$this->img4, ":img5"=>$this->img5,":id"=>$this->studentID]);
	}
//--------------------------------------
}


//closes Student class

//UPDATE students SET coming=1 WHERE studentID=12
//UPDATE students SET coming=0 WHERE coming=1