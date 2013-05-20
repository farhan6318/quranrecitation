<?php
 
class block_quranrecitation extends block_base {
    public function init() {
        global $PAGE;
        $this->title = get_string('quranrecitation', 'block_quranrecitation');
        $PAGE->requires->js("/blocks/quranrecitation/jsqari/jquery.js",true);
        $PAGE->requires->js("/blocks/quranrecitation/jsqari/jquery.jplayer.min.js",true);
        $PAGE->requires->js("/blocks/quranrecitation/jsqari/jsqari.js",true);
         }
    public function get_content() {
    if ($this->content !== null) {
      return $this->content;
    }
 
    $this->content         =  new stdClass;
    $this->content->text   = '<style>
		body,td,input,select,textarea{
			font-family:Arial,Helvetica,sans-serif;
			font-size:10pt;
		}
	</style>

	<!--<link href="/moodle/blocks/quranrecitation/jsqari/skin/jsqari.skin.css" rel="stylesheet" type="text/css" />
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="/gqmc/blocks/quranrecitation/jsqari/jquery.jplayer.min.js"></script>
	
        <script type="text/javascript" src="/gqmc/blocks/quranrecitation/jsqari/jsqari.js"></script>-->
	
	<script type="text/javascript">

	var jsQari;

	$(document).ready(function(){
                //alert("loading");
		jsQari = new JSQari();
		jsQari.init();
                $(\'#jsqari-times\').hide();

	});

	</script>
	<form class="jsqari-interface">
		<ul>

			<li>

				<span>
					<label for="jsqari-ui-surah-selector">Surah</label>
					<select id="jsqari-ui-surah-selector" class="medium">
						<option value="1">1. Al-Faatiha</option>
						<option value="2">2. Al-Baqarah</option>
						<option value="3">3. Aale \'Imran</option>
						<option value="4">4. An-Nisaa</option>
						<option value="5">5. Al-Maaidah</option>
						<option value="6">6. Al-An\'aam</option>
						<option value="7">7. Al-A\'raaf</option>
						<option value="8">8. Al-Anfaal</option>
						<option value="9">9. At-Tawbah</option>
						<option value="10">10. Younus</option>
						<option value="11">11. Huud</option>
						<option value="12">12. Yusuf</option>
						<option value="13">13. Ar-Ra\'ad</option>
						<option value="14">14. Ibraheem</option>
						<option value="15">15. Al-Hijr</option>
						<option value="16">16. An-Nahl</option>
						<option value="17">17. Al-Israa</option>
						<option value="18">18. Al-Kahf</option>
						<option value="19">19. Maryam</option>
						<option value="20">20. Taha</option>
						<option value="21">21. Al-Anbiya</option>
						<option value="22">22. Al-Hajj</option>
						<option value="23">23. Al-Muminoon</option>
						<option value="24">24. An-Noor</option>
						<option value="25">25. Al-Furqaan</option>
						<option value="26">26. Ash-Shu\'araa</option>
						<option value="27">27. An-Naml</option>
						<option value="28">28. Al-Qasas</option>
						<option value="29">29. Al-\'Ankaboot</option>
						<option value="30">30. Ar-Ruum</option>
						<option value="31">31. Luqmaan</option>
						<option value="32">32. As-Sajdah</option>
						<option value="33">33. Al-Ahzaab</option>
						<option value="34">34. Saba</option>
						<option value="35">35. Faatir</option>
						<option value="36">36. Yaseen</option>
						<option value="37">37. As-Saffat</option>
						<option value="38">38. Saad</option>
						<option value="39">39. Az-Zumar</option>
						<option value="40">40. Ghafir</option>
						<option value="41">41. Fussilat</option>
						<option value="42">42. Ash-Shura</option>
						<option value="43">43. Az-Zukhruf</option>
						<option value="44">44. Ad-Dukhan</option>
						<option value="45">45. Al-Jathiya</option>
						<option value="46">46. Al-Ahqaf</option>
						<option value="47">47. Muhammad</option>
						<option value="48">48. Al-Fath</option>
						<option value="49">49. Al-Hujuraat</option>
						<option value="50">50. Qaf</option>
						<option value="51">51. Adh-Dhariyat</option>
						<option value="52">52. At-Tur</option>
						<option value="53">53. An-Najm</option>
						<option value="54">54. Al-Qamar</option>
						<option value="55">55. Ar-Rahman</option>
						<option value="56">56. Al-Waqia</option>
						<option value="57">57. Al-Hadid</option>
						<option value="58">58. Al-Mujadila</option>
						<option value="59">59. Al-Hashr</option>
						<option value="60">60. Al-Mumtahina</option>
						<option value="61">61. As-Saff</option>
						<option value="62">62. Al-Jumua</option>
						<option value="63">63. Al-Munafiqoon</option>
						<option value="64">64. At-Taghabun</option>
						<option value="65">65. At-Talaq</option>
						<option value="66">66. At-Tahrim</option>
						<option value="67">67. Al-Mulk</option>
						<option value="68">68. Al-Qalam</option>
						<option value="69">69. Al-Haaqqah</option>
						<option value="70">70. Al-Ma\'arij</option>
						<option value="71">71. Nooh</option>
						<option value="72">72. Al-Jinn</option>
						<option value="73">73. Al-Muzzammil</option>
						<option value="74">74. Al-Muddaththir</option>
						<option value="75">75. Al-Qiyamah</option>
						<option value="76">76. Al-Insaan</option>
						<option value="77">77. Al-Mursalat</option>
						<option value="78">78. An-Naba</option>
						<option value="79">79. An-Naziat</option>
						<option value="80">80. Abasa</option>
						<option value="81">81. At-Takwir</option>
						<option value="82">82. Al-Infitar</option>
						<option value="83">83. Al-Mutaffifin</option>
						<option value="84">84. Al-Inshiqaaq</option>
						<option value="85">85. Al-Burooj</option>
						<option value="86">86. At-Tariq</option>
						<option value="87">87. Al-A\'la</option>
						<option value="88">88. Al-Ghashiyah</option>
						<option value="89">89. Al-Fajr</option>
						<option value="90">90. Al-Balad</option>
						<option value="91">91. Ash-Shams</option>
						<option value="92">92. Al-Lail</option>
						<option value="93">93. Ad-Duha</option>
						<option value="94">94. Ash-Sharh</option>
						<option value="95">95. At-Tin</option>
						<option value="96">96. Al-\'Alaq</option>
						<option value="97">97. Al-Qadr</option>
						<option value="98">98. Al-Bayyinah</option>
						<option value="99">99. Az-Zalzalah</option>
						<option value="100">100. Al-\'Adiyat</option>
						<option value="101">101. Al-Qariyah</option>
						<option value="102">102. At-Takathur</option>
						<option value="103">103. Al-\'Asr</option>
						<option value="104">104. Al-Humazah</option>
						<option value="105">105. Al-Fil</option>
						<option value="106">106. Quraysh</option>
						<option value="107">107. Al-Maoun</option>
						<option value="108">108. Al-Kawthar</option>
						<option value="109">109. Al-Kafiroon</option>
						<option value="110">110. An-Nasr</option>
						<option value="111">111. Al-Masad</option>
						<option value="112">112. Al-Ikhlaas</option>
						<option value="113">113. Al-Falaq</option>
						<option value="114">114. An-Naas</option>
					</select>
				</span>

				<span>
					<label for="jsqari-ui-ayah-selector">Ayah</label>
					<select id="jsqari-ui-ayah-selector" class="small">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
					</select>
				</span>

			</li>

			<li class="single">

				<label for="jsqari-ui-reciter-selector">Reciter</label>
				<select id="jsqari-ui-reciter-selector" class="medium">
					<option value="Alafasy_64kbps/">Al-Afasy</option>
					<option value="Ahmed_ibn_Ali_al-Ajamy_64kbps_QuranExplorer.Com/">Al-Ajamy</option>
					<option value="Salaah_AbdulRahman_Bukhatir_128kbps/">Bukhatir</option>
					<option value="Ghamadi_40kbps/">Ghamadi</option>
					<option value="Hudhaify_64kbps/">Hudhaify</option>
					<option value="Husary_64kbps/">Husary Tarteel</option>
					<option value="Husary_Muallim_128kbps/">Husary Teaching</option>
					<option value="Menshawi_16kbps/">Minshawy</option>
					<option value="Maher_AlMuaiqly_64kbps/">Muaiqly</option>
					<option value="Abu_Bakr_Ash-Shaatree_64kbps/">Shaatri</option>
					<option value="Saood_ash-Shuraym_64kbps/">Shuraym</option>
					<option value="Abdurrahmaan_As-Sudais_64kbps/">Sudais</option>
				</select>

			</li>

			<li class="single">

				<label for="jsqari-ui-mode-selector">Play Mode</label>
				<select id="jsqari-ui-mode-selector" class="medium" onchange="showtimes(this.value)">
					<option value="continious">Continious</option>
					<option value="surah">Surah</option>
					<option value="repeatsurah">Repeat Surah</option>
					<option value="singleayah">Single Ayah</option>
					<option value="repeatayah">Repeat Ayah</option>

					<option value="repeattimesayah">Repeat Times Ayah</option>
				</select>

			</li>
                        
			<li class="single" id="jsqari-times">

				<label for="jsqari-ui-times">Number of Times</label>
				<select id="jsqari-ui-times" class="medium" >
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
		

			</li>

		</ul>
	</form>
           <br/><br/>
	<div id="jquery_jplayer_1" class="jp-jplayer"></div>

	<div class="jp-audio" style="width: 170px">
		<div class="jp-type-single">
			<div id="jp_interface_1" class="jp-interface">
				<ul class="jp-controls">
					<li><a href="#" class="jp-play" tabindex="1">play</a></li>
					<li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
					<li><a href="#" class="jp-stop" tabindex="1">stop</a></li>
					<li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
					<li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
				</ul>
				<div class="jp-progress">
					<div class="jp-seek-bar">
						<div class="jp-play-bar"></div>
					</div>
				</div>
				<div class="jp-volume-bar">
					<div class="jp-volume-bar-value"></div>
				</div>
				<div class="jp-current-time"></div>
				<div class="jp-duration"></div>
			</div>
			<!--
			<div id="jp_playlist_1" class="jp-playlist">
				<ul>
					<li>Al-Quran</li>
				</ul>
			</div>
			-->
		</div>
	</div>
	';
   //$this->content->footer = 'Footer here...';
 
    return $this->content;
  }
}   // Here's the closing bracket for the class definition