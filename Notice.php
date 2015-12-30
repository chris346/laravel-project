<?php 
Namespace App\Models;

use PDO;
use DB;

class Notice {
	public $noticeID;
	public $noticeContent;

	public static function getNotice($id) {
		$sql = "SELECT * from notices WHERE noticeID = :id";
		$row = DB::selectOne($sql, [':id'=>$id]);

		$notice = new Notice();
		$notice->noticeID = $row->noticeID;
		$notice->noticeContent = $row->noticeContent;

		return $notice;


	}

	public static function getNotices() {
		$sql = "SELECT * from notices order by noticeID desc";
		$rows = DB::select($sql);

		$notices =  [];

		foreach($rows as $row){
			$notice = new Notice();
			$notice->noticeID = $row->noticeID;
			$notice->noticeContent = $row->noticeContent;
			$notices[] = $notice; 
		}
		return $notices;
	}

//-----------------------------------------------------------
	public function save() {

		if($this->noticeID > 0){
			$this->update();
		}
		else{
			$this->insert();
		}
	}	
//------------------------------------------------------------
	public function insert() {
		$sql = "INSERT INTO notices (noticeContent) values (:noticeContent)";
		DB::insert ($sql, [":noticeContent"=>$this->noticeContent]);
	}

//-----------------------------------------------------------

	private function update() {
		// TODO fix this to be an update SQL ...
		$sql = "UPDATE notices SET noticeContent=:noticeContent WHERE noticeID=:id";
		DB::insert ($sql, [":noticeContent"=>$this->noticeContent, ":id"=>$this->noticeID]);
	}

	// private function update() {
	// 	// TODO fix this to be an update SQL ...
	// 	$sql = "UPDATE game SET name=:name, year=:year WHERE id=:id";
	// 	DB::insert ($sql, [":name"=>$this->title, ":year"=>$this->year, ":id"=>$this->id]);
	// }

//--------------------------------------------------------------------------------
public static function delete($id) {
		$sql = "DELETE FROM notices WHERE noticeID=:id";
		DB::delete($sql, ["id"=>$id]);
	}
//-------------------------------------------------------------
}
?>