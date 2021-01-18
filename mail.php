<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

	<title>Thế giới điện thoại </title>
	<link rel="shortcut icon" href="img/favicon.ico" />

	<!-- Load font awesome icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
	<!-- Jquery -->
	<script src="lib/Jquery/Jquery.min.js"></script>

	<!-- owl carousel libraries -->
	<link rel="stylesheet" href="lib/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="lib/owlcarousel/owl.theme.default.min.css">
	<script src="lib/owlcarousel/owl.carousel.min.js"></script>

	<!-- Sweet Alert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

	<!-- Slider -->
	<link rel="stylesheet" href="lib/ion.rangeSlider-2.2.0/css/ion.rangeSlider.css">
	<link rel="stylesheet" href="lib/ion.rangeSlider-2.2.0/css/ion.rangeSlider.skinHTML5.css">
	<script src="lib/ion.rangeSlider-2.2.0/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>

	<!-- tidio - live chat -->
	<!-- <script src="//code.tidio.co/bfiiplaaohclhqwes5xivoizqkq56guu.js"></script> -->

	<!-- our files -->
	<!-- css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/topnav.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/banner.css">
	<link rel="stylesheet" href="css/taikhoan.css">
	<link rel="stylesheet" href="css/trangchu.css">
	<link rel="stylesheet" href="css/home_products.css">
	<link rel="stylesheet" href="css/pagination_phantrang.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/gioithieu.css">
    <!-- js -->
    <link rel="stylesheet" href="css/lienhe.css">
	<script src="js/dungchung.js"></script>
	<script src="js/trangchu.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php require_once "php/echoHTML.php"; ?>
</head>
<body>
	<?php addTopNav(); ?>
	<section>
		<?php 
			addHeader(); 
			//addHome();
		?>
    </section>
	<?php
		addContainTaiKhoan();
		//addPlc();
	?>
    <div class="container">
		<div class="formMail">
				<form action="mail.php" method="post">
					<label for="fname">Tên</label>
					<input type="text" name="first_name" id ="first_name">
					<label for="lname">Họ </label>
					<input type="text" name="last_name">
					<label for="country">Email khách hàng</label>
					<input type="text" name="emailCus">
					<label for="subject">Nội dung góp ý</label>
					<textarea id="subject" name="message" placeholder="Góp ý của bạn.." style="height:200px"></textarea>
					<input type="submit" name="submit" value="Submit">
				</form>
			</div>
        </div>
	<div class="footer">
		<?php addFooter(); ?>
	</div>
	<i class="fa fa-arrow-up" id="goto-top-page" onclick="gotoTop()"></i>
	<i class="fa fa-arrow-down" id="goto-bot-page" onclick="gotoBot()"></i>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $to = "thangit189@gmail.com"; // this is your Email address
    $from = $_POST['emailCus']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "PHẢN HỒI CỦA KHÁCH HÀNG: " . $first_name . "  " . $last_name . " TỪ EMAIL: " . $from;
    $message = $first_name . " " . $last_name . " đã viết:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
        if (mail($to, $subject, $message, $headers) == TRUE) {
            echo '<script>
            swal("Phản hồi thành công", "Chân thành cảm ơn những góp ý của bạn <3", "success");
           </script>';                   
        } else {
            echo '<script>
            swal("", "Phản hôi chưa thành công", "error");
            </script>';       
        }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

