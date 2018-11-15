<?php
/*
class Audios extends Model {

	public function insertAudios() {

		if(isset($_POST['name']) && !empty($_POST['name'])) {
			$nm = addslashes($_POST['name']);

			if(isset($_POST['typeFile']) && !empty($_POST['typeFile'])) {		

				if(isset($_FILES['fileName']) && !empty($_FILES['fileName']['tmp_name'])) {
					$permit = array('image/jpeg', 'image/jpg', 'image/png', 'audio/mp3', 'audio/wma', 'video/mp4');

					if(in_array($_FILES['fileName']['type'], $permit)) {

						$name = md5(time().rand(0,999).'.jpg');

						move_uploaded_file($_FILES['fileName']['tmp_name'],'assets/upload/audios/'.$name);

						$fileType = $_POST['typeFile'];
						print_r($fileType);
						exit;

						$sql = "INSERT INTO audios (name_audio, url_audio) VALUES (:name_audio, :url_audio)";
						$sql = $this->db->prepare($sql);
						$sql->bindValue(':name_audio', $name_audio);
						$sql->bindValue(':url_audio', $name);
						$sql->execute();

						header("Location: index.php");
						exit;
					}
				}
			}
		}
	}

	public function getAudio() {
		$data = array();

		$sql = "SELECT * FROM audios ORDER BY id DESC";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$data = $sql->fetchAll();
		}

		return $data;
	}*/
}