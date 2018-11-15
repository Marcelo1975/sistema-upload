<?php
/*
class Videos extends Model {

	public function insertVideos() {

		if(isset($_POST['name']) && !empty($_POST['name'])) {
			$nm = addslashes($_POST['name']);

			if(isset($_POST['typeFile']) && !empty($_POST['typeFile'])) {		

				if(isset($_FILES['fileName']) && !empty($_FILES['fileName']['tmp_name'])) {
					$permit = array('image/jpeg', 'image/jpg', 'image/png', 'audio/mp3', 'audio/wma', 'video/mp4');

					if(in_array($_FILES['fileName']['type'], $permit)) {

						$name = md5(time().rand(0,999).'.jpg');

						move_uploaded_file($_FILES['fileName']['tmp_name'],'assets/upload/videos/'.$name);

						$fileType = $_POST['typeFile'];

						$sql = "INSERT INTO videos (name_video, url_video) VALUES (:name_video, :url_video)";
						$sql = $this->db->prepare($sql);
						$sql->bindValue(':name_video', $name_video);
						$sql->bindValue(':url_video', $name);
						$sql->execute();
						

						header("Location: index.php");
						exit;
					}
				}
			}
		}
	}

	public function getVideo() {
		$data = array();

		$sql = "SELECT * FROM videos ORDER BY id DESC";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$data = $sql->fetchAll();
		}

		return $data;
	}*/
}