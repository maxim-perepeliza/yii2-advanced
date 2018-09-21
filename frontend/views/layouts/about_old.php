<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlz7f8qQwqDy9wl8IRIZ58NiYgXTrqBTk&language=<?= Yii::$app->language ?>"></script>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap-body">
		<div class="header">
			<div id='cssmenu' class="align-right">
				<ul>
				   <li class="active"><a href='index.html'><span>Home</span></a></li>
				   <li class=' has-sub'><a href='archive.html'><span>Blog</span></a>
					  <ul>
						 <li class='has-sub'><a href='#'><span>Item 1</span></a>
							<ul>
							   <li><a href='#'><span>Sub Item</span></a></li>
							   <li class='last'><a href='#'><span>Sub Item</span></a></li>
							</ul>
						 </li>
						 <li class='has-sub'><a href='#'><span>Item 2</span></a>
							<ul>
							   <li><a href='#'><span>Sub Item</span></a></li>
							   <li class='last'><a href='#'><span>Sub Item</span></a></li>
							</ul>
						 </li>
					  </ul>
				   </li>
				   <li><a href='#'><span>Gallery</span></a></li>
				   <li><a href='single.html'><span>About</span></a></li>
				   <li class='last'><a href='contact.html'><span>Contact</span></a></li>
				</ul>
			</div>
		</div>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
				<div class="zerogrid">
					<div class="row">
						<div class="row">
							<div class="col-1-2">
                                                            <a href="index.html"><img class="img-logo" src="/zKingMan/images/logo-new-sec.png" /></a>
							</div>
							<div class="col-1-2">
								<form id="form-container" action="" class="f-right">
									<!--<input type="submit" id="searchsubmit" value="" />-->
									<a class="search-submit-button" href="javascript:void(0)">
										<i class="fa fa-search"></i>
									</a>
									<div id="searchtext">
										<input type="text" id="s" name="s" placeholder="Search Something...">
									</div>
								</form>
							</div>
						</div>
						<div class="crumbs">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="gallery.html">Contact</a></li>
							</ul>
						</div>
						<h1 class="color-red" style="margin: 20px 0">Contact</h1>
						<div class="col-full">
                                                    <div class='embed-container maps' style="height: 500px;" id="map">
								
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<h3 class="color-blue" style="margin: 20px 0">Contact Info</h3>
								<span>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS ERROR SIT VOLUPTATEM ACCUSANTIUM DOLOREMQUE LAUDANTIUM, TOTAM REM APERIAM.</span>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>
								<p>JL.Kemacetan timur no.23. block.Q3<br>
									Jakarta-Indonesia</p>
								   <p>+6221 888 888 90 <br>
									+6221 888 88891</p>
								<p>info@yourdomain.com</p>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<div class="contact">
									<h3 class="color-green" style="margin: 20px 0 20px 30px">Contact Form</h3>
									<div id="contact_form">
										<form name="form1" id="ff" method="post" action="contact.php">
											<label class="row">
												<div class="col-1-2">
													<div class="wrap-col">
														<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
													</div>
												</div>
												<div class="col-1-2">
													<div class="wrap-col">
														<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
													</div>
												</div>
											</label>
											<label class="row">
												<div class="wrap-col">
												<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
												</div>
											</label>
											<label class="row">
												<div class="wrap-col">
													<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
													placeholder="Message"></textarea>
												</div>
											</label>
											<center><input class="sendButton" type="submit" name="Submit" value="Submit"></center>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
		<footer>
			<div class="wrap-footer">
				<div class="zerogrid">
					<div class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<p>Copyright - Designed by <a href="https://www.zerotheme.com" title="free website templates">ZEROTHEME</a></p>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<ul class="social-buttons">
									<li><a href="#"><i class="fa fa-twitter"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-facebook"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<ul class="quick-link">
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Terms of Use</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

    
   <script>
        var titleMap = '<?php echo Yii::t('app', 'Наш главный офис'); ?>';
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: {lat: 50.040973, lng: 36.29391}
        });
        var marker = new google.maps.Marker({
            position: {lat: 50.040973, lng: 36.29391},
            map: map,
            title: titleMap
        });
    </script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


