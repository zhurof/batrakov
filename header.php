<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Верстка</title>
	<meta name="viewport" content="width=device-width, shrink-to-fit=no" />	
	<link rel="stylesheet" href="css/fonts.css" />	
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="libs/slick/slick.css" />
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<header class="header">
		<div class="wrapper header__wrapper">
			<a href="/" class="logo header__logo">
				<img src="img/logo.svg" alt="" class="logo__img">
				<span class="logo__text">
					<strong class="logo__title">batrakov.info</strong>
					<span>Персональный СЕО блог</span>
				</span>				
			</a>
			<ul class="header__menu">
				<li><a href="/">Главная</a></li>
				<li><a href="#">Работы</a></li>
				<li><a href="#">Услуги</a></li>
				<li class="desktop-hidden"><a href="page.php">О чём этот блог</a></li>
				<li class="desktop-hidden">
					<a href="/">Записи</a>
					<ul>
						<li><a href="post.php">Подраздел 1</a></li>
						<li><a href="post.php">Подраздел 2</a></li>
						<li><a href="post.php">Подраздел N</a></li>
					</ul>
				</li>
				<li class="desktop-hidden"><a href="#">Кейсы</a></li>
				<li class="desktop-hidden">
					<a href="/">База знаний</a>
					<ul>
						<li><a href="post.php">Подраздел 1</a></li>
						<li><a href="post.php">Подраздел 2</a></li>
						<li><a href="post.php">Подраздел N</a></li>
					</ul>
				</li>
				<li class="desktop-hidden"><a href="tools.php">Инструменты</a></li>
				<li><a href="contacts.php">Контакты</a></li>
			</ul>
			<a href="#search-form" class="search-btn icon-magnify" data-fancybox></a>
			<span class="menu-btn icon-menu"></span>
		</div>
	</header>
	<form action="" class="search-form" id="search-form">
		<input type="text" class="search-form__input" />
		<button class="icon-magnify search-form__btn"></button>
	</form>
<!-- Переход на страницу со ссылками на современные браузеры для ie9 и ниже -->
<!--[if lt IE 10]><script>location.href='/old-ie.html';</script><![endif]-->