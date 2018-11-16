<?php
class Uploads extends Model {

	public function insertFiles() {

		if(isset($_POST['name']) && !empty($_POST['name'])) {
			$nm = addslashes($_POST['name']);

			if(isset($_POST['typeFile']) && !empty($_POST['typeFile'])) {		

				if(isset($_FILES['fileName']) && !empty($_FILES['fileName']['tmp_name'])) {
					$permit = array('image/jpeg', 'image/jpg', 'image/png', 'audio/mp3', 'audio/wma', 'video/mp4');

					if(in_array($_FILES['fileName']['type'], $permit)) {

						$name = md5(time().rand(0,999).'.jpg');

						$fileType = $_POST['typeFile'];

						switch($fileType) {
							case 'image':
								move_uploaded_file($_FILES['fileName']['tmp_name'],'assets/upload/imgs/'.$name);
								break;
							case 'video':
								move_uploaded_file($_FILES['fileName']['tmp_name'],'assets/upload/videos/'.$name);
								break;
							case 'audio':
								move_uploaded_file($_FILES['fileName']['tmp_name'],'assets/upload/audios/'.$name);
								break;
						}

						//move_uploaded_file($_FILES['fileName']['tmp_name'],'assets/images/upload/'.$name);

						$id = '';
						$type = '';
		
						if($fileType == 'image') {
							$type = '0';
							$sql = "INSERT INTO images (name_img, url_img) VALUES (:name_img, :url_img)";
							$sql = $this->db->prepare($sql);
							$sql->bindValue(':name_img', $nm);
							$sql->bindValue(':url_img', $name);
							$sql->execute();
						} else if($fileType == 'video') {
							$type = '1';
							$sql = "INSERT INTO videos (name_video, url_video) VALUES (:name_video, :url_video)";
							$sql = $this->db->prepare($sql);
							$sql->bindValue(':name_video', $nm);
							$sql->bindValue(':url_video', $name);
							$sql->execute();
						} else if($fileType == 'audio') {
							$type = '2';
							$sql = "INSERT INTO audios (name_audio, url_audio) VALUES (:name_audio, :url_audio)";
							$sql = $this->db->prepare($sql);
							$sql->bindValue(':name_audio', $nm);
							$sql->bindValue(':url_audio', $name);
							$sql->execute();
						}
						/*
						$sql = "UPDATE up_videos SET type = :type AND name_files = :name_files AND url = :url WHERE id = :id";
						$sql = $this->db->prepare($sql);
						$sql->bindValue(':id', $id);
						$sql->bindValue(':type', $type);
						$sql->bindValue(':name_files', $name_files);
						$sql->bindValue(':url', $name);
						$sql->execute();
						*/

						header("Location: index.php");
						exit;
						
					}
				}
			}
		} 
	}

	public function getImg() {
		$data = array();

		$sql = "SELECT * FROM images ORDER BY id DESC LIMIT 4";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$data = $sql->fetchAll();
		}

		return $data;
	}

	public function getVideo() {
		$data = array();

		$sql = "SELECT * FROM videos ORDER BY id DESC LIMIT 4";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$data = $sql->fetchAll();
		}

		return $data;
	}

	public function getAudio() {
		$data = array();

		$sql = "SELECT * FROM audios ORDER BY id DESC LIMIT 3";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$data = $sql->fetchAll();
		}

		return $data;
	}
	
	public function getAllFilesAudios() {
		$dados = array();
		$sql = "SELECT * FROM audios ORDER BY id DESC";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$dados = $sql->fetchAll();
		}
		return $dados;
	}

	public function getAllFilesImages() {
		$dados = array();
		$sql = "SELECT * FROM images ORDER BY id DESC";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$dados = $sql->fetchAll();
		}
		return $dados;
	}

	public function getAllFilesVideos() {
		$dados = array();
		$sql = "SELECT * FROM videos ORDER BY id DESC";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$dados = $sql->fetchAll();
		}
		return $dados;
	}
}