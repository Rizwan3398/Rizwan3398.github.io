<style type="text/css">
	*{ margin: 0; padding: 0; box-sizing: border-box;
		font-family: 'Muli', sans-serif;}
	 .nav_style{
	 	background-color: #a29bfe!important;
	 }
	 nav a{ color: white!important; }

	 a:hover {
  	color: #4c4c4c!important;
	}

html{
	scroll-behavior: smooth;
	}
.row{margin-left: 0!important; margin-right: 0!important;}


/*/////////////////////////////////////main_header/////////////////////*/

.main_header{
	height: 450px;
	width: 100%;
}

.rightside h1{
	font-size: 3rem;
}

.corona-rot img{
	animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
	0%{ transform: rotate(0); }
	100%{ transform: rotate(360deg); }
}

.leftside img{
	animation: heartbeat 5s linear infinite
}

@keyframes heartbeat{
	0%
	{
		transform: scale(.75 );
	}
	20%
	{
		transform: scale(1);
	}
	40%
	{
		transform: scale(.75);
	}
	60%
	{
		transform: scale(1);
	}
	80%
	{
		transform: scale(.75);
	}
	100%
	{
		transform: scale(.75);
	}
}



/*
*****************************corona update***************************/
.corona_update{
	margin: 0 0 30px 0;
}
.corona_update h3{color: #ff7675;}
/*.center-block {
  display: block;
  margin-right: auto;
  margin-left: auto;
}*/

.corona_update h1{font-size: 2rem; text-align: center;}

/**********************about section**********************/
.sub_section{
	background-color: #fbfafd;
}

/**************************footer*****************************/
.footer_style{
	background-color: #a29bfe!important;
}
.footer_style{
	margin-bottom: 0px!important;
}
.footer_style p{
	margin-bottom: 0px!important;
}
/*//////////////////////top screeen/////////////////////////*/
#myBtn{
	display: none; 
	position: fixed; 
	bottom: 30px; 
	right: 40px; 
	z-index: 00;
	border: none;
	outline: none;
	background-color: #00A8ff;
	color: white;
	cursor: pointer;
	padding: 10px;
	border-radius: 10px;
}
#myBtn:hover{
	background: #606060;
}

/*////////////////////////////////////////RESPONSIVE////////////////////////////////////////*/
@media(max-width: 786px){
	.main_header{height: 700px; text-align: center;})

	.main_header h1{
		text-align: center;
		padding: 0;
		width: 100%;
		font-size: 30px;


	.count_style{
		display: inline!important;
	}

	.count_style p{
		text-align: center!important;

	}
	.about_res{
		margin-left: 0!important;
	}
}

/*///////////////table heading/////////////*/
table {
    overflow-y: auto;
    height: 50vh;     /* !!!  HEIGHT MUST BE IN [ vh ] !!! */
}

table th {
    position: sticky;
    top: 0;
}


</style>