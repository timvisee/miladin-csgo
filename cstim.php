
<!DOCTYPE html>
 
<head>
	<title>Maat wat CSGO jij?</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script type="text/javascript">
        
        /**
         * Toggle the play state of a HTML media element.
         * 
         * @param {HTMLMediaElement} mediaElement HTML media element to toggle the
         * play state for.
         */
        function togglePlay(mediaElement) {
            if(mediaElement.currentTime > 0.0)
                mediaElement.stop();
            else
                mediaElement.start();
        }

    </script>
</head>
 
<body>
  <!-- 	Knettahhh  -->
	<audio id="broer" src="audio/knettah/grotebroer.mp3"></audio>
	<audio id="dak" src="audio/knettah/dak.mp3"></audio>
	<audio id="maat" src="audio/knettah/maat.mp3"></audio>
	<audio id="goud" src="audio/knettah/goud.mp3"></audio>
	<audio id="kanka" src="audio/knettah/kankaneus.mp3"></audio>
	<audio id="knetta" src="audio/knettah/knetta.mp3"></audio>

	  <!-- 	CSGO ingame  -->
	<audio id="planted" src="audio/csgo/planted.mp3"></audio>
	<audio id="defused" src="audio/csgo/defused.mp3"></audio>
	<audio id="ready" src="audio/csgo/ready.mp3"></audio>

	  <!-- 	music	  -->
	<audio id="bochka" src="audio/music/bochka.mp3"></audio>
	<audio id="dawai" src="audio/music/dawai.mp3"></audio>
	<audio id="anthem" src="audio/music/anthem.mp3"></audio>
	<audio id="dimitri" src="audio/music/dimitri.mp3"></audio>
	<audio id="djfuck" src="audio/music/djfuck.mp3"></audio>
	
	 <!-- NL meuk -->
	 <audio id="amigo" src="audio/nederlands/amigo.mp3"></audio>
	 <audio id="man" src="audio/nederlands/man.mp3"></audio>


<!-- Knettahhh play -->
		<div class="col-md-8">
			<button disabled>play</button>
				<button onclick="togglePlay(document.getElementById('broer'))">Grote broer</button>
				<button onclick="togglePlay(document.getElementById('dak'))">Dak</button>
				<button onclick="togglePlay(document.getElementById('goud'))">Goud</button>
				<button onclick="togglePlay(document.getElementById('knetta'))">Helemaal knett&acirc;h</button>
				<button onclick="togglePlay(document.getElementById('maat'))">Maat, wat doe jij?</button>
				<button onclick="togglePlay(document.getElementById('kanka'))">K&acirc;nkahneus</button>
		 </div>
  	</div>

 <!-- Knettahhh pause -->
		<div class="col-md-8">
			Pause:
				  <button onclick="togglePlay(document.getElementById('broer'))">Grote broer</button>
				  <button onclick="togglePlay(document.getElementById('dak'))">Dak</button>
				  <button onclick="togglePlay(document.getElementById('goud'))">Goud</button>
				  <button onclick="togglePlay(document.getElementById('knetta'))">Helemaal knett&acirc;h</button>
				  <button onclick="togglePlay(document.getElementById('maat'))">Maat, wat doe jij?</button>
				  <button onclick="togglePlay(document.getElementById('kanka'))">K&acirc;nkahneus</button>

		  </div>
  	</div>


  <br><br><br><br><br><br>


<!-- CSGO play -->
			<div class="col-md-8">
				<button onclick="togglePlay(document.getElementById('planted'))">Planted</button>
				<button onclick="togglePlay(document.getElementById('defused'))">Defused</button>
				<button onclick="togglePlay(document.getElementById('ready'))">Ready</button>
			</div>

  <!-- CSGO pause -->
  <div class="col-md-8">
	  <button onclick="togglePlay(document.getElementById('planted'))">Planted</button>
	  <button onclick="togglePlay(document.getElementById('defused'))">Defused</button>
	  <button onclick="togglePlay(document.getElementById('ready'))">Ready</button>
  </div>


  <br><br><br><br><br><br>


  <!-- music play -->
  <div class="col-md-8">
			<button onclick="togglePlay(document.getElementById('bochka'))">Bochka, Bass</button>
			<button onclick="togglePlay(document.getElementById('dawai'))">Dawai Dawai</button>
			<button onclick="togglePlay(document.getElementById('anthem'))">Russian Anthem</button>
		</div>

  <!-- music pause-->
  		<div class="col-md-8">
			  <button onclick="togglePlay(document.getElementById('bochka'))">Bochka, Bass</button>
			  <button onclick="togglePlay(document.getElementById('dawai'))">Dawai Dawai</button>
			  <button onclick="togglePlay(document.getElementById('anthem'))">Russian Anthem</button>
		</div>



  <br><br><br><br><br><br>


  <!-- Nederlands play-->
  <div class="col-md-8">
			<button onclick="togglePlay(document.getElementById('man'))">Man man man</button>
			<button onclick="togglePlay(document.getElementById('amigo'))">Amigo</button>
  </div>

  <!-- Nederlands pause-->
  <div class="row">
  <div class="col-md-8">
	  <button onclick="togglePlay(document.getElementById('man'))">Man man man</button>
	  <button onclick="togglePlay(document.getElementById('amigo'))">Amigo</button>
  </div>
  </div>
<br>
	<div class="row">
		<div class="col-md-2">
			<div class="col-md-4">
				hoi
			</div>
			<div class="col-md-4">
				hoi
			</div>
			<div class="col-md-4">
				hoi
			</div>
		</div>
</body>


</html>