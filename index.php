<?php
require("config.php");
$echostatus = "";
if(isset($_POST["submit"])){
	$phonenumber = preg_replace("/[^0-9]/", "",$_POST["phonenumber"]);
	$msg = $_POST["msg"];
	$sendSMSJson = file_get_contents("http://userapi.izinumber.com/sms/$api/to/$phonenumber/msg/$msg");
	$status = json_decode($sendSMSJson, true);
	if(strpos($status["status"],'successfully') !== false){
		$echostatus = "<span style='color:green'>Your message was sent successfully</span>";
	}else {
		$echostatus = "<span style='color:red'>".$status["status"]."</span>";
	}
}
if(empty($api)){
	$echostatus = "<span style='color:red'>Please input API key in file config.php</span>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>iZiNumber.com - Demo API Key</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	.nostyle {
    float: left;
    border: 1px solid #e1e1e1;
    width: 25%;
    text-align: center;
	padding: 3px 0;
}
a {
    color: #ea6300;
    text-decoration: none;
    font-weight: bold;
}
tr td {padding-top: 10px; padding-bottom:10px}
	</style>
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="/">Start Bootstrap</a>
            </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="/"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/">Send SMS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/showphone.php">List number</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Send SMS</h1>
					<table style="width:600px;margin:0 auto;text-align:left">
						<tbody>
							<form method="POST">
								
								<tr> 
									<td width="150">
										<label>Phone Number</label>
									</td>
									<td>
											<input type="text" name="phonenumber" placeholder="Destination Phone number" > (example: 12246034360)
									</td>
								</tr>
								
								<tr>
									<td>
										<label>Message</label>
									</td>
									<td>
										<textarea rows="4" cols="50" name="msg"></textarea>
									</td>
								</tr>
								
								<tr>
									<td colspan="2"><input type="submit" value="Submit" name="submit"></td>
								</tr>
								
								<tr>
									<td colspan="2"><?php echo $echostatus ;?></td>
								</tr>
							</form> 
						</tbody>	
					</table>
				</div>
            </div>
        </div>
    </section>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
