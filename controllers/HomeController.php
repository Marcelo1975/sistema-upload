<?php
class HomeController extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$dados = array();

		$file = new Uploads();
		/*
		$img = new Imgs();
		$video = new Videos();
		$audio = new Audios();
		*/

		$file->insertFiles();
		/*&
		$img->insertImgs();
		$audio->insertAudios();
		$video->insertVideos();
		*/

		$dados['files'] = $file->getFiles();
		
		$dados['imgs'] = $file->getImg();
		$dados['videos'] = $file->getVideo();
		$dados['audios'] = $file->getAudio();
		

		$this->loadTemplate('home', $dados);

	}
}