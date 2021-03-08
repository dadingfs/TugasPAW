<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="CSS/css.css" />
    <script type = "text/javascript" src="JS/js.js"></script> 
</head>

<body class="body">
    <section id="home" class="s-home">
        <div class="bg">
            <img src="images/me1.jpg" />
        </div>
        <div class="overlay"></div>
        <div class="shadow-overlay"></div>
        <div class="hello">
            <h1>HELLO THERE</h1>
            <h2>
                I am Dading F. Sukma.<br>
                I am a Computer Engineering Student<br>
                Brawijaya University.
            </h2>
        </div>
        <div class="about">
            <h1>About Me</h1>
            <p>
                I am an enthusiactic, reliable, responsible and hard working person.
                I am adabtable to all challenging situations.
                I am able to work well both in a team environment as well as using own initiative.
                I am able to work well under pressure and adhere to strict deadlines.
            </p>
        </div>
        <div class="skill">
            <h3>I've Got Some skills.</h3>

            <ul class="skill-bars">
                <li>
                    <div class="progress percent80"><span>80%</span></div>
                    <strong>C++</strong>
                </li>
                <li>
                    <div class="progress percent50"><span>50%</span></div>
                    <strong>Python</strong>
                </li>
                <li>
                    <div class="progress percent40"><span>40%</span></div>
                    <strong>HTML5</strong>
                </li>
                <li>
                    <div class="progress percent30"><span>30%</span></div>
                    <strong>CSS</strong>
                </li>
                <li>
                    <div class="progress percent20"><span>20%</span></div>
                    <strong>JS</strong>
                </li>
                <li>
                    <div class="progress percent80"><span>80%</span></div>
                    <strong>Arduino</strong>
                </li>
            </ul>
        </div>
        <div id="social">
            <ul class="home-social">
                <li>
                    <a href="https://web.facebook.com/dadingfsukma/"><img class="facebook" src="icon/facebook.png"
                            height="auto" width="auto" /></a>
                </li>
                <li>
                    <a href="https://twitter.com/dadingfs"><img class="twitter" src="icon/twitter.png" height="auto"
                            width="auto"></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/dadingfs/"><img class="instagram" src="icon/Instagram.png"
                            height="auto" width="auto"></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/dadingfs/"><img class="linkedin" src="icon/linkedin.png"
                            height="auto" width="auto"></a>
                </li>
                <li>
                    <a href="https://github.com/dadingfs"><img class="github" src="icon/github.png" height="auto"
                            width="auto"></a>
                </li>
            </ul>
        </div>
        <button class="button" onclick="contact()">Find Me....</button>
    </section>


</body>

<?php
$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_harga($units);
        $result_str = 'Total amount of ' . $units . ' - ' . $result;
    }
}

function calculate_harga($units) {
    $harga_pertama = 3.50;
    $harga_kedua = 4.00;
    $harga_ketiga = 5.20;
    $harga_keempat = 6.50;

    if($units <= 50) {
        $harga = $units * $harga_pertama;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $harga_pertama;
        $kelebihan_unit = $units - 50;
        $harga = $temp + ($kelebihan_unit * $harga_kedua);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $harga_kedua);
        $kelebihan_unit = $units - 150;
        $harga = $temp + ($kelebihan_unit * $harga_ketiga);
    }
    else {
        $temp = (50 * 3.5) + (100 * $harga_kedua) + (100 * $harga_ketiga);
        $kelebihan_unit = $units - 250;
        $harga = $temp + ($kelebihan_unit * $harga_keempat);
    }
    return number_format((float)$harga, 2, '.', '');
}

?>

<div>
	<div id="page-wrap">
		<h1>Php - Calculate Electricity bill</h1>

		<form action="" method="post" id="quiz-form">
            	<input type="number" name="units" id="units" placeholder="Please enter no. of Units" />
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
		</form>

		<div>
		    <?php echo '<br />' . $result_str; ?>
		</div>
	</div>
</div>
</html>