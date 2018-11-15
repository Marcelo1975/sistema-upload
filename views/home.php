<div class="container">
	<form method="POST" enctype="multipart/form-data">
		<div class="form-group">
			Nome para o arquivo:
			<input type="text" name="name" class="form-control"/>
		</div>
		<div class="form-group">
			Tipo do arquivo:
			<select name="typeFile" class="form-control">
				<option value="image">Imagem</option>
				<option value="video">Vídeo</option>
				<option value="audio">Áudio</option>
			</select>
		</div>
		<div class="form-group">
			Escolha um arquivo:
			<input type="file" name="fileName" class="form-control"/>
		</div>
		<div class="form-group">
			<button type="submit" name="submit" class="btn btn-success">Enviar</button>
		</div>
	</form>
<hr/>
	<h3><strong class="title">Imagens</strong></h3>
	<div class="img">
		<?php foreach($imgs as $img): ?>
			<div class="item">
				<img src="assets/upload/imgs/<?php echo $img['url_img']; ?>" border="0" width="250" height="150" />
			</div>		
		<?php endforeach; ?>
	</div>
	<hr/>
	<h3><strong class="title">Vídeos</strong></h3>
	<div class="video">
		<?php foreach($videos as $video): ?>
			<div class="item">
				<video  width="250" height="150" controls>
					<source src="assets/upload/videos/<?php echo $video['url_video']; ?>" type="video/mp4" />
				</video>
			</div>
		<?php endforeach; ?>
	</div>
	<hr/>
	<h3><strong class="title">Áudios</strong></h3>
	<div class="audio">
		<?php foreach($audios as $audio): ?>	
			<div class="item">	
				<audio controls>
					<source src="assets/upload/audios/<?php echo $audio['url_audio']; ?>" type="audio/mpeg" />
				</audio>
			</div>
		<?php endforeach; ?>
	</div>
	<hr/>
</div>
