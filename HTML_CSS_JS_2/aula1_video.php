<?php
	include('componentes/head.php');
	include('componentes/header.php');
?>
	
	<!--http://www.w3schools.com/html/horse.ogg-->
    <!-- http://www.w3schools.com/html/mov_bbb.mp4 -->
	<section class='video-section'>
		<div class='video-section-title'>
			Audio
		</div>
        <audio controls>
          <source src="horse.ogg" type="audio/ogg">
          <source src="horse.mp3" type="audio/mpeg">
        </audio> 
    </section>
	<section class="video-section">
		<div class='video-section-title'>
			Video
		</div>
    	<video width="320" height="240" controls>
          <source src="movie.mp4" type="video/mp4">
          <source src="movie.ogg" type="video/ogg">
        </video> 
    </section>
<?php
	include('componentes/footer.php');
?>