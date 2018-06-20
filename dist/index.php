<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Kalaris</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="img/favicon.ico"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
	<link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.4/css/mdb.min.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
	<link rel="stylesheet" href="css/libs.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
 <?php
 	include "header.php"; 
 ?>
	<section id="main" class="hidden-xs">
		<div class="video-wrap">
			<video autoplay="true" loop="true" preload="auto" muted>
				<source src="video/mp4.mp4" type="video/mp4"></source>
				<source src="video/webm.webm" type="video/webm"></source>
			</video>
		</div>
		<div class="container flex-start">
			<ul id="main-slider" class="col-sm-8 col-sm-offset-2">
				<li>СОЗДАНИЕ САЙТОВ ЛЮБОЙ СЛОЖНОСТИ</li>
				<li>ПРОДВИЖЕНИЕ БИЗНЕСА  В ИНТЕРНЕТЕ</li>	
				<li>КОМПЛЕКСНОЕ ОБСЛУЖИВАНИЕ  БИЗНЕСА В ИНТЕРНЕТЕ</li>
			</ul>
		</div>
		<div class="container flex-end text-center">
			<a class="btn btn-new col-md-3 col-sm-5" id="mainSlider-but" href="price/site">
				Заказать сайт
			</a>
		</div>
	</section>

	<section id="service" class="clearfix">
			<h2>Наши услуги</h2>
			<hr/>
			<div class="col-md-3 col-sm-6 block z-depth-1">
				<div class="overlay"></div>
				<div class="block-wrap">
					<img src="img/services/personal-computer.png">
					<h3>Создание сайтов</h3>
					<div class="block-content">
						<p>
							Сайт – это лицо компании. Наша команда поможет Вам создать сайт любого типа и уровня сложности.
						</p>
						<a class="btn btn-new" href="price/site">
							подробнее
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 block z-depth-1">
				<div class="overlay"></div>
				<div class="block-wrap">
					<img src="img/services/advertising.png">
					<h3>Контекстная реклама</h3>
					<div class="block-content">
						<p>
							С помощь данной услуги от Kalaris Вы сможете получить клиентов в короткие сроки при минимальных вложениях.
						</p>
						<a class="btn btn-new" href="price/context">
							подробнее
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 block z-depth-1">
				<div class="overlay"></div>
				<div class="block-wrap">
					<img src="img/services/group.png">
					<h3>Продвижение<br>в социальных сетях (SMM)</h3>
					<div class="block-content">
						<p>
							Мы сделаем Ваш бизнес более привлекательным для пользователей социальных сетей и направим к Вам клиентов.
						</p>
						<a class="btn btn-new" href="price/smm">
							подробнее
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 block z-depth-1">
				<div class="overlay"></div>
				<div class="block-wrap">
					<img src="img/services/search.png">
					<h3>Поисковое<br>продвижение (SEO)</h3>
					<div class="block-content">
						<p>
							Мы поможем продвинуть Ваш сайт в ТОПЫ поисковой системы.
						</p>
						<a class="btn btn-new" href="price/seo">
							подробнее
						</a>
					</div>
				</div>
			</div>
	</section>
	
	<section id="present" class="clearfix">
		<div class="container">
			<h2>Закажите сайт и получите<br>один из подарков на Ваш выбор</h2>	
			<hr/>
				<div class="col-sm-4 wow fadeInUp">
					<div class="img-wrap col-xs-10 col-xs-offset-1"><img src="img/presents/tablet-and-laptop.png" ></div>
					<p class="col-xs-12 gift-text">Мобильная версия<br>Вашего сайта</p>
				</div>
				<div class="col-sm-4 wow fadeInUp">
						<div class="img-wrap col-xs-10 col-xs-offset-1"><img src="img/presents/instagram-logo.png"></div>
						<p class="col-xs-12 gift-text">3 месяца продвижения<br>Вашего бизнеса в Instagram</p>
				</div>
				<div class="col-sm-4 wow fadeInUp">
						<div class="img-wrap col-xs-10 col-xs-offset-1"><img src="img/presents/website.png"></div>
						<p class="col-xs-12 gift-text">Настроим контекстную<br>рекламу для Вашего бизнеса</p>
				</div>
		</div>
	</section>

	<section id="portfolio" class="clearfix hidden-sm">
		<div class="container">
			<h2>Наши проекты</h2>	
			<hr/>
		</div>
		<div class="clearfix">
			<a href="http://tubingitillini.by/" target="_blank">
				<div class="col-md-4 block">
					<div class="row img-wrap">
						<img src="img/portfolio/1.jpg" />
						<div class="item">
							TUBINGITILLINI.BY
						</div>
					</div>
				</div>
			</a>
			<a href="http://www.peskom.by/" target="_blank">
				<div class="col-md-4 block">
					<div class="row img-wrap">
						<img src="img/portfolio/2.jpg" />
						<div class="item">
							PESKOM.BY
						</div>
					</div>
				</div>
			</a>
			<a href="http://palisadnik.by/" target="_blank">
				<div class="col-md-4 block">
					<div class="row img-wrap">
						<img src="img/portfolio/3.jpg" />
						<div class="item">
							PALISADNIK.BY
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="btn btn-new block-center col-sm-3 col-xs-8 hidden">Ещё проекты</div>
	</section>
	
	<section id="clients" class="clearfix">
		<div class="container">
			<h2>Наши клиенты</h2>	
			<hr/>
		</div>
		<div class="marquee-wrap col-xs-12">
			<div class="marquee">
					<div class="col-xs-3 item"><img src="img/clients/logo_kresla.png"/></div>
					<div class="col-xs-3 item"><img src="img/clients/peskom.png"/></div>
					<div class="col-xs-3 item"><img src="img/clients/logo_tub.png"/></div>
					<div class="col-xs-3 item"><img src="img/clients/palisadnik.png"/></div>
			</div>
		</div>
	</section>

	<section id="main_form" class="clearfix">
		<div class="container">
			<form class="col-md-6 col-xs-12">
				<div class="col-left">
					<p class="title">Остались вопросы?</p>
					<p class="subtitle">Напишите, и мы свяжемся с Вами</p>
				</div>
				<input class="col-xs-12 z-depth-1" type="text" name="name" placeholder="Ваше имя">
				<input class="col-xs-12 z-depth-1" type="tel" name="phone" placeholder="Ваш телефон">
				<textarea class="col-xs-12 z-depth-1" type="textarea" name="quest" placeholder="Ваш вопрос"></textarea>
				<input class="col-xs-12 z-depth-2 btn-new" type="submit">
			</form>
			<div class="col-md-5 col-md-offset-1 col-xs-12">
				<div class="col-right">
					<p class="title">Контакты</p>
				</div>
				<div class="img-wrap info-row"><img src="img/logo_small.png"></div>
				<div class="info-row">г. Минск, ул. Казинца, 125</div>
				<div class="info-row">+375 29 803-30-80</div>
				<div class="info-row">info@kalaris.by</div>
				<div class="info-row">МЫ В СОЦИАЛЬНЫХ СЕТЯХ</div>
				<div class="info-row">
					<a class="fab fa-vk" href="https://vk.com/kalaris_by" target="_blank"></a>
					<a class="fab fa-instagram" href="https://www.instagram.com/kalaris_by" target="_blank"></a>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<p>Copyright © 2018 Kalaris</p>
	</footer>
	<!-- Modal -->
	<div class="modal fade" id="main_modal" tabindex="-1" role="dialog" aria-labelledby="mainModalLabel" aria-hidden="true">
	  <div class="modal-dialog clearfix">
	    <div class="modal-content col-md-6">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="mainModalLabel">Заполните форму</h4>
	        <h5 class="modal-subtitle">и мы обязательно свяжемся с Вами</h5>
	      </div>
	      <div class="modal-body clearfix">
	        <form>
	        	<input type="text" name="name" required class="col-xs-12" placeholder="Ваше имя*">
	        	
	        	<input type="tel" name="phone" required class="col-xs-12" placeholder="Ваш телефон*">
	        	
	        	<input type="email" name="email" class="col-xs-12" placeholder="Ваш e-mail">
	        	
	        	<input type="text" name="site" class="col-xs-12" placeholder="Ваш сайт (если есть)">
	        	
	        	<input type="checkbox" class="checkbox" id="check_site" name="check_site" value="Хочу заказать создание сайта" />
				<label for="check_site">Хочу заказать создание сайта</label>
				
				<input type="checkbox" class="checkbox" id="check_seo" name="check_seo" value="Хочу заказать поисковое продвижение (SEO)" />
				<label for="check_seo">Хочу заказать поисковое продвижение (SEO)</label>
				
				<input type="checkbox" class="checkbox" id="check_SMM" name="check_SMM" value="Хочу заказать продвижение в социальных сетях (SMM)" />
				<label for="check_SMM">Хочу заказать продвижение в социальных сетях (SMM)</label>
				
				<input type="checkbox" class="checkbox" id="check_idk" name="check_idk" value="Я еще не знаю, что мне нужно, просто перезвоните мне" />
				<label for="check_idk">Я еще не знаю, что мне нужно, просто перезвоните мне</label>
	        	
				<input type="submit" class="btn-new">
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
		<script src="js/libs.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.4/js/mdb.min.js"></script>

	<script src="js/main.js"></script>
</body>
</html>
