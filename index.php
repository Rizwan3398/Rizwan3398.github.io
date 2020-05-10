<!DOCTYPE html>
<html>
<head>
	<title>Coron Virus Update</title>
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
</head>
<body><!-- onload=fetch() -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top nav_style p-3">
  <a class="navbar-brand pl-5" href="index.php">
  	<span class="corona-rot"><img src="images/corona19.png" class="img-fluid" width="50" height="50"></span>Covid-19
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symtoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
      
    </ul>
    
  </div>
</nav>
<div class="container-fluid main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/corona19.png" alt="corona19" class="img-fluid" width="300" height="300">
			</div>
		</div>

		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's Stay Safe & Fight Together Against
					Cor<span class="corona-rot"><img src="images/corona19.png" class="img-fluid" width="50" height="50"></span>na Virus</h1>
			</div>
		</div>
	</div>
</div>

<!-- 
********************************corona latest update************** -->

<section class="corona_update container-fluid">
	<div class="mb-3">
		<h3 class="text-uppercase text-center text-capital">covid-19 live updates of the world</h3>
	</div>
	<div class="table-responsive">
		<table class="table table-bordered table-striped text-center" id="tbval">
			<tr>
				<th>lastupdatedtime</th>
        		<th>state</th>
        		<th>confirmed</th>
        		<th>active</th>
        		<th>recovered</th>
        		<th>deaths</th>
			</tr>
		<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($data,true);
 

 $statescount = count($coronalive['statewise']);

$i=1;
while($i < $statescount){
  ?>
  <tr>
    <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
    <td><?php echo $coronalive['statewise'][$i]['state'] ?> </td>
    <td><?php echo $coronalive['statewise'][$i]['confirmed'] ?> </td>
    <td><?php echo $coronalive['statewise'][$i]['active'] ?> </td>
    <td><?php echo $coronalive['statewise'][$i]['recovered'] ?> </td>
    <td><?php echo $coronalive['statewise'][$i]['deaths'] ?> </td>
  </tr>



<!--   echo $coronalive['statewise'][$i]['lastupdatedtime']."<br>";
  echo $coronalive['statewise'][$i]['state']."<br>";
  echo $coronalive['statewise'][$i]['confirmed']."<br>";
  echo $coronalive['statewise'][$i]['active']."<br>";
  echo $coronalive['statewise'][$i]['recovered']."<br>";
  echo $coronalive['statewise'][$i]['deaths']."<br>"; -->




  <?php

  $i++;
}


?> 
		</table>
		
	</div>

	
</section>
<!-- -------*******************************************ABOUT SECTION************************************************ -->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>About COVID-19</h1>
	</div>
	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 container about_res">
			<img src="images/covid.jpg" class="img-fluid">
		</div>
		<div class="col-lg-6 col-md-6 col-12" >
			<h2>What is COVID-19 (Corona-Virus)</h2>
			<p>COVID-19 is the infectious disease caused the most recently discovered coronavirus.This new virus and disease were unknown before the outbreak began in Wuhan, in December 2019.</p>
			<p>The virus that causes COVID-19 is mainly transmitted through droplets generated when an infected person coughs, sneezes, or exhales. These droplets are too heavy to hang in the air, and quickly fall on floors or surfaces.</p>
		</div>
	</div>
</div>

<!-- ****************************Coronavirus symtoms**************** -->
<div class="container-fluid pt-5 pb-5" id="sympid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Coronavirus symtoms</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/khasi.png" class="img-fluid" width="120" height="120">
					<figcaption>cough</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/runny nose.png" class="img-fluid" width="120" height="120">
					<figcaption>runny nose</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/fever.png" class="img-fluid" width="120" height="120">
					<figcaption>fever</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/cold.png" class="img-fluid" width="120" height="120">
					<figcaption>cold</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/tiredness.png" class="img-fluid" width="120" height="120">
					<figcaption>tiredness</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/difficulty breathing.png" class="img-fluid" width="120" height="120">
					<figcaption>difficulty breathing (severe cases)</figcaption>
				</figure>
			</div>
		</div>
	</div>
</div>

<!-- ****************************6 Steps Prevention Againts Coronavirus**************** -->
<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>6 Steps Prevention Againts Coronavirus</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="images/hand.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>wash your hand for 20 seconds, with soap and water or alcohol-based hand</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="images/face.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="images/close.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>avoid close contact (1 meter or 3 feet) with people who are unwell</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="images/home.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>stay home and self-isolate from others in the household if you feel unwell</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="images/news.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Stay informed by watching news & follow the recommended practices</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="images/fever-icon.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>If you have fever, cough and difficulty brething, seek medical care early</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	

	
	
<!-- ////////////////////cursor//////////////////////// -->
<div class="container scrolltop float-right pr-5">
	<button onclick="topFunction()" id="myBtn" class="fa fa-arrow-up" title="Go to top"></button>
</div>

<!-- ************************************footer************************************** -->
<footer class="footer_style mt-5 mb-0">
	<div class="text-white text-center container-fluid">
		<p>copyright by RIZWAN KAZI</p>
	</div>
</footer>

<script type="text/javascript">
// *******************************automatic counter******************************************************
	$('.count').counterUp({
    delay: 10,
    time: 3000
    });

//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}






// function fetch(){
// 	$.get("https://api.covid19api.com/summary",

// 		function(data){
// 			console.log(data['Countries'].length);
// 			var tbval =document.getElementById('tbval');
			

// 			for (var i =1; i<(data['Countries'].length); i++){
// 				var x = tbval.insertRow();
// 				x.insertCell(0);

// 				tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
// 				tbval.rows[i].cells[0].style.background = '#7a4a91';
// 				tbval.rows[i].cells[0].style.color = '#fff';

// 				x.insertCell(1);
// 				tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
// 				tbval.rows[i].cells[1].style.background = '#4bb7b8';

// 				x.insertCell(2)
// 				tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
// 				tbval.rows[i].cells[2].style.background = '#4bb7b8';

// 				x.insertCell(3);
// 				tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
// 				tbval.rows[i].cells[3].style.background = '#f36e23';

// 				// x.insertCell(4);
// 				// tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
// 				// tbval.rows[i].cells[4].style.background = '#4bb7d8';

// 				// x.insertCell(5);
// 				// tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
// 				// tbval.rows[i].cells[5].style.background = '#9cc850';

// 				// x.insertCell(6);
// 				// tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
// 				// tbval.rows[i].cells[6].style.background = '#f36e23';
// 			}
// 		}
// 	);
//}


</script>
</body>
</html>

<!-- 
<?php

include 'dbcon.php';


if(isset($_POST['submit'])){
	$username= $_POST['username'];
	$email= $_POST['email'];
	$mobile= $_POST['mobile'];
	$symp= $_POST['coronasym'];
	$msg= $_POST['msg'];
}
	
	$chk= "";

	foreach($symp as $chk1) {
		$chk .= $chk1.",";
	}

	$insertquery = " insert into coronacase(username,email,mobile,symp,message) values('$username','$email','$mobile','$chk','$msg')";
	$query = mysqli_query($con,$insertquery);

	if($query){
	?>
	<script>
		alert("inserted successfully");
	</script>
	<?php
}else{
	?>
	<script>
		alert("No inserted");
	</script>
	<?php
}


?> -->