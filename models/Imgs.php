<?php
/*
class Imgs extends Model {

	public function insertImgs() {

		if(isset($_POST['name']) && !empty($_POST['name'])) {
			$nm = addslashes($_POST['name']);

			if(isset($_POST['typeFile']) && !empty($_POST['typeFile'])) {		

				if(isset($_FILES['fileName']) && !empty($_FILES['fileName']['tmp_name'])) {
					$permit = array('image/jpeg', 'image/jpg', 'image/png');

					if(in_array($_FILES['fileName']['type'], $permit)) {

						$name = md5(time().rand(0,999).'.jpg');

						move_uploaded_file($_FILES['fileName']['tmp_name'],'assets/upload/imgs/'.$name);

						$sql = "INSERT INTO images (name_img, url_img) VALUES (:name_img, :url_img)";
						$sql = $this->db->prepare($sql);
						$sql->bindValue(':name_img', $name_img);
						$sql->bindValue(':url_img', $name);
						$sql->execute();
						

						header("Location: index.php");
						exit;
					}
				}
			}
		}
	}

	public function getImg() {
		$data = array();

		$sql = "SELECT * FROM images ORDER BY id DESC";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$data = $sql->fetchAll();
		}

		return $data;
	}*/
}