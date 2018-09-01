<!DOCTYPE HTML>
<html>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

td, th {
    text-align: left;
}

th:nth-child(3) {
   text-align: right;
}

p.small {
    line-height: 1.0;
}

.btn {
    background-color: white;
    border-radius: 5px;
    border: 1px solid;
    border-color: DodgerBlue;
    color: DodgerBlue;
    padding: 10px 30px;
    cursor: pointer;
}

/* Darker background on mouse-over */
 .btn:hover {
    background-color: white;
    /* color: white; */
} 
.alignright {
	float: right;
}

</style>

	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122351166-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-122351166-1');
		</script>

		<title>Hugo V. Lepage</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
	</head>
	<body>

		<!-- Wrapper-->
			<div id="wrapper">

				<!-- Nav -->
					<nav id="nav">
						<a href="#me" class="icon fa-home active"><span>Home</span></a>
						<a href="#about" class="icon fa-user"><span>About me</span></a>
						<a href="#cv" class="icon fa-address-card"><span>CV</span></a>
						<a href="#publications" class="icon fa-file-text"><span>Publications</span></a>
						<a href="#contact" class="icon fa-envelope"><span>Contact</span></a>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Me -->
							<article id="me" class="panel">
								<header>
									<h1><span style="font-weight:100">Hugo V.</span> Lepage  </h1>
									<p>Quantum Physicist<br />
										Marie Skłodowska-Curie Fellow<br />
									<font size="4"><a class="icon fa-university"></a> Cavendish Laboratory, University of Cambridge</font><br />
									</p>
								</header>
								<a href="#about" class="jumplink pic">
									<span class="arrow icon fa-chevron-right"><span>See my work</span></span>
									<img src="images/hugo3.jpg" alt="" />
								</a>
							</article>

						<!-- Work -->
							<article id="about" class="panel">
								<header>
									<h2>About me</h2>
								</header>
								<p>
									Hey there!<br />
									I am a good boy :)

								</p>
								
							</article>

							<article id="cv" class="panel">
								<header>
									<h2>Curriculum Vitae <p class="alignright"><button onclick="location.href='./LEPAGE_cv_A4.pdf'" class="btn"><i class="fa fa-download"></i> Download</button> </p></h2>
								</header>
								<section>
									 <h6><a class="icon fa-graduation-cap"><span> &nbsp; Education</span></a></h6>
									<table>
									  <tr>
									    <th width="20%">2020</th>
									    <th width="60%"><p class="small">
									    	<span style="font-weight:400">University of Cambridge</span> <br>
									    	Ph.D. Theoretical Physics <br>
									    	Marie Skłodowska-Curie Fellow </p>
									    </th>
									    <th width="20%" text-align="left">Cambridge, UK</th>
									  </tr>
									  <tr>
									  <th width="20%">2015</th>
									    <th width="60%"><p class="small">
									    	<span style="font-weight:400">University of Toronto</span> <br>
									    	M.A.Sc. Electrical & Computer Engineering </p>
									    </th>
									    <th width="20%">Toronto, ON</th>
									  </tr>
									  <tr>
									  <th width="20%">2013</th>
									    <th width="60%"><p class="small">
									    	<span style="font-weight:400">McGill University</span> <br>
									    	B.Sc. Honours Physics <br>
									    	Graduated with first class honours </p>
									    </th>
									    <th width="20%">Montreal, QC</th>
									  </tr>
									</table>

									<h6><a class="icon fa-suitcase"><span> &nbsp; Work Experience</span></a></h6>
									<table>
									  <tr>
									    <th width="20%">2017</th>
									    <th width="80%"><p class="small">
									    	<span style="font-weight:400">University of Cambridge</span> <br>
									    	Supervisor for Girton College <br>
									    	Teaching and tutoring Natural Sciences Tripos Maths 1A course. </p>
									    </th>
									  </tr>
									  <tr>
									    <th width="20%">2013</th>
									    <th width="80%"><p class="small">
									    	<span style="font-weight:400">McGill University</span> <br>
									    	Research Assistant under Prof. Michael Hilke <br>
									    	Growth of graphene monolayers and band structure analysis via Raman spectroscopy. </p>
									    </th>
									  </tr>
									  <tr>
									    <th width="20%">2013</th>
									    <th width="80%"><p class="small">
									    	<span style="font-weight:400">McGill University</span> <br>
									    	Teaching Assistant for Prof. Johannes Walcher <br>
									    	Grading of MATH 249 (Complex Variables). </p>
									    </th>
									  </tr>
									  <tr>
									    <th width="20%">2012</th>
									    <th width="80%"><p class="small">
									    	<span style="font-weight:400">University of Cambridge</span> <br>
									    	Research Internship under Prof. Chris Ford <br>
									    	Coding a finite element modelling tool to calculate the charge density and potential layout of semiconductor devices. </p>
									    </th>
									  </tr>
									  <tr>
									    <th width="20%">2011</th>
									    <th width="80%"><p class="small">
									    	<span style="font-weight:400">University of Montreal</span> <br>
									    	Research Internship under Prof. Michel Côté <br>
									    	Coding a numerical solver calculate the conversion efficiency of tandem organic photovoltaic cells. </p>
									    </th>
									  </tr>									  
									</table>


									<h6><a class="icon fa-trophy"><span> &nbsp; Awards</span></a></h6>
									<table>
									  <tr>
									    <th width="20%">2017</th>
									    <th width="80%"><p class="small">
									    	<span style="font-weight:400">FRQNT Doctoral Award</span> <br>
									    	Fonds de recherche du Québec - Nature et technologies </p>
									    </th>
									  </tr>	
									  <tr>
									    <th width="20%">2016</th>
									    <th width="80%"><p class="small">
									    	<span style="font-weight:400">MSCA Fellowship</span> <br>
									    	Marie Skłodowska-Curie Actions <br>
									    	Horizon 2020 Grant No. 642688 </p>
									    </th>
									  </tr>	
									  <tr>
									    <th width="20%">2013</th>
									    <th width="80%"><p class="small">
									    	<span style="font-weight:400">NSERC Stipend</span> <br>
									    	Natural Sciences and Engineering Research Council </p>
									    </th>
									  </tr>	
									  <tr>
									    <th width="20%">2012</th>
									    <th width="80%"><p class="small">
									    	<span style="font-weight:400">Edgar & Margaret Wilson Bursary</span> <br>
									    	McCall MacBain Scholarships and Student Aid Centre </p>
									    </th>
									  </tr>	
									  <tr>
									    <th width="20%">2012</th>
									    <th width="80%"><p class="small">
									    	<span style="font-weight:400">Mobility Award</span> <br>
									    	McGill Student Exchanges and Study Abroad (SESA) </p>
									    </th>
									  </tr>	
									</table>

									<h6><a class="icon fa-handshake-o"><span> &nbsp; Outreach & Social Engagement</span></a></h6>
									<table>
									<tr><th width="20%">2017</th>
									    <th width="80%"><p class="small">
									    	<span style="font-weight:400">Cavendish Physics @ Work</span> <br>
									    	University of Cambridge - Cavendish Laboratory <br>
									    	Scientific talks and demonstrations for high-school classes. </p></th></tr>	
									<tr><th width="20%">2012</th>
									    <th width="80%"><p class="small">
									    	<span style="font-weight:400">OSD Note-Taker</span> <br>
									    	McGill University - Office for Students with Disabilities <br>
									    	Transcribe and upload lecture notes for students with disabilities. </p></th></tr>	
									<tr><th width="20%">2011</th>
									    <th width="80%"><p class="small">
									    	<span style="font-weight:400">Projet SEUR</span> <br>
									    	University of Montreal <br>
									    	One hour lectures on superconductivity to high school students. Demonstrations using superconductors and liquid nitrogen. </p></th></tr>	
									</table>
									<h6><a class="icon fa-wrench"><span> &nbsp; Skills</span></a></h6>
									<span style="font-weight:400">Programming languages:</span>
									    	C, C++, C#, CUDA, OpenCL, FORTRAN, Python, Bash <br>
									 <span style="font-weight:400">Operating systems:</span>
									    	Linux, MacOS, Windows <br>
									 <span style="font-weight:400">Applications:</span>
									    	Visual Studio, Mathematica, MATLAB, Maple, ssh, LATEX, various others... <br>
									 <span style="font-weight:400">Spoken Languages:</span>
									    	English (Native), French (Native), German (Fair) <br>
									 <p class="small"><span style="font-weight:400">Miscellaneous:</span>
									    	Strong verbal and written communication skills, excellent problem solving skills, practiced with the redaction of research papers, good team spirit. </p>

								</section>
							</article>

							<article id="publications" class="panel">
								<header>
									<h2>Publications</h2>
								</header>
								<section>
									<h6><a class="icon fa-file-text"><span> &nbsp; Articles</span></a></h6>
									<table>
										<tr><th width="15%">2018</th>
									    <th width="85%"><p class="small">
									    	Shuji Mori, Yousuke Kikuchi, Nobuyuki Hirose, <span style="font-weight:400">Hugo Lepage</span>, and Willy Wong, <i>Auditory gap detection: psychometric functions and insights into the underlying neural activity</i>, Biological Cybernetics (Submitted BICY-D-18-00033). </p></th></tr>	
										<tr><th width="15%">2017</th>
									    <th width="85%"><p class="small">
									    	D. R. M. Arvidsson-Shukur=, <span style="font-weight:400">H. V. Lepage=</span>, E. T. Owen=, T. Ferrus, and C. H. W. Barnes, <i>Protocol for Fermionic Positive-Operator-Valued Measures</i>, Phys. Rev. A 96, 052305 </p></th></tr>	
										<tr><th width="15%">2016</th>
									    <th width="85%"><p class="small">
									    	<span style="font-weight:400">Hugo Lepage</span>, Willy Wong, Markus Bussmann, and Honghi Tran. <i>Acoustic analysis of recovery boiler dissolving tank operation and smelt shattering efficiency</i>, TAPPI Journal. </p></th></tr>	
										<tr><th width="15%">2016</th>
									    <th width="85%"><p class="small">
									    	Willy Wong and <span style="font-weight:400">Hugo Lepage</span>, <i>A peripheral model of gap detection</i>, The Journal of the Acoustical Society of America. </p></th></tr>
									</table>
									<h6><a class="icon fa-microphone"><span> &nbsp; Talks</span></a></h6>
									<table>
										<tr><th width="15%">2018</th>
									    <th width="85%"><p class="small">
									    	<i>Quantum Optics with Fermions using Surface Acoustic Waves.</i><br>
									    	Towards Ultimate Quantum Theory (UQT), Växjö, Sweden. </p></th></tr>
										<tr><th width="15%">2018</th>
									    <th width="85%"><p class="small">
									    	<i>Quantum optics with electrons using surface acoustic waves.</i><br>
									    	Deutsche Physikalische Gesellschaft (DPG) Spring Meeting, Berlin, Germany. </p></th></tr>	

									    <tr><th width="15%">2017</th>
									    <th width="85%"><p class="small">
									    	<i>GPU-accelerated simulations of SAW-driven single electron transport.</i><br>
									    	Frontiers of Quantum Information Physics (FQIP), Santa Barbara, California, USA. </p></th></tr>

										<tr><th width="15%">2017</th>
									    <th width="85%"><p class="small">
									    	<i>Describing the time evolution of single electrons.</i><br>
									    	SAWtrain Summer School, Cargèse, Corsica, France. </p></th></tr>

										<tr><th width="15%">2017</th>
									    <th width="85%"><p class="small">
									    	<i>GPU-accelerated simulations of SAW-driven single electron transport.</i><br>
									    	Foundations of Quantum Mechanics and Technology (FQMT), Växjö, Sweden. </p></th></tr>


										<tr><th width="15%">2017</th>
									    <th width="85%"><p class="small">
									    	<i>Single electron transport using surface acoustic waves in semiconductor devices.</i><br>
									    	American Physical Society (APS) March Meeting, New Orleans, Louisiana, USA. </p></th></tr>									    	
										<tr><th width="15%">2016</th>
									    <th width="85%"><p class="small">
									    	<i>Single electron transport using surface acoustic waves in semiconductor devices.</i><br>
									    	Spin Phenomena Interdisciplinary Center (SPICE), Mainz, Germany. </p></th></tr>	

										<tr><th width="15%">2016</th>
									    <th width="85%"><p class="small">
									    	<i>Quantum Media Conversion Between SAW Driven Flying Electron-Spin Qubits and Flying Photon-Polarization Qubits.</i><br>
									    	Asian Quantum Information Symposium (AQIS), Taipei, Taiwan. </p></th></tr>		

									    <tr><th width="15%">2016</th>
									    <th width="85%"><p class="small">
									    	<i>Quantum Media Conversion Between Electron-Spin Qubits and Photon-Polarization Qubits.</i><br>
									    	Physics by the Lake, Windsor Great Park, United Kingdom. </p></th></tr>	
									</table>


								</section>
							</article>

						<!-- Contact -->
							<article id="contact" class="panel">
								<header>
									<h2>Contact me</h2>
								</header>

<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = 'From: TangledDemo'; 
    $to = 'hugo.lepage@gmail.com'; 
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST['submit']) {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>

								<form action="index.php" method="post">
									<div>
										<div class="row">
											<div class="6u 12u$(mobile)">
												<input type="text" name="name" placeholder="Name" />
											</div>
											<div class="6u$ 12u$(mobile)">
												<input type="email" name="email" placeholder="Email" />
											</div>
											<div class="12u$">
												<input type="text" name="subject" placeholder="Subject" />
											</div>
											<div class="12u$">
												<textarea name="message" placeholder="Message" rows="8"></textarea>
											</div>
											<div class="12u$">
												<input type="submit" value="Send Message" />
											</div>
										</div>
									</div>
								</form>
							</article>

					</div>

				<!-- Footer -->
					<div id="footer">
						<ul class="copyright">
							<li>&copy; H. V. Lepage (2018).</li><li>Design: HTML5 UP</li>
						</ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>

<!--
	Astral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->










<!-- 
								<section>
									<div class="row">
										<div class="4u 12u$(mobile)">
											<a href="#" class="image fit"><img src="images/pic01.jpg" alt=""></a>
										</div>
										<div class="4u 12u$(mobile)">
											<a href="#" class="image fit"><img src="images/pic02.jpg" alt=""></a>
										</div>
										<div class="4u$ 12u$(mobile)">
											<a href="#" class="image fit"><img src="images/pic03.jpg" alt=""></a>
										</div>
										<div class="4u 12u$(mobile)">
											<a href="#" class="image fit"><img src="images/pic04.jpg" alt=""></a>
										</div>
										<div class="4u 12u$(mobile)">
											<a href="#" class="image fit"><img src="images/pic05.jpg" alt=""></a>
										</div>
										<div class="4u$ 12u$(mobile)">
											<a href="#" class="image fit"><img src="images/pic06.jpg" alt=""></a>
										</div>
										<div class="4u 12u$(mobile)">
											<a href="#" class="image fit"><img src="images/pic07.jpg" alt=""></a>
										</div>
										<div class="4u 12u$(mobile)">
											<a href="#" class="image fit"><img src="images/pic08.jpg" alt=""></a>
										</div>
										<div class="4u$ 12u$(mobile)">
											<a href="#" class="image fit"><img src="images/pic09.jpg" alt=""></a>
										</div>
										<div class="4u 12u$(mobile)">
											<a href="#" class="image fit"><img src="images/pic10.jpg" alt=""></a>
										</div>
										<div class="4u 12u$(mobile)">
											<a href="#" class="image fit"><img src="images/pic11.jpg" alt=""></a>
										</div>
										<div class="4u$ 12u$(mobile)">
											<a href="#" class="image fit"><img src="images/pic12.jpg" alt=""></a>
										</div>
									</div>
								</section>
								-->




















