<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Верстка</title>
	<meta name="viewport" content="width=device-width, shrink-to-fit=no" />	
	<link rel="stylesheet" href="css/fonts.css" />	
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="libs/slick/slick.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<header class="header">
		<div class="wrapper header__wrapper">
			<a href="/" class="logo header__logo"><img src="img/logo.svg" alt=""></a>
			<ul class="header__menu">
				<li><a href="/">Главная</a></li>
				<li><a href="#">Работы</a></li>
				<li><a href="#">Услуги</a></li>
				<li class="desktop-hidden"><a href="#">О чём этот блог</a></li>
				<li class="desktop-hidden">
					<a href="#">Записи</a>
					<ul>
						<li><a href="#">Подраздел 1</a></li>
						<li><a href="#">Подраздел 2</a></li>
						<li><a href="#">Подраздел N</a></li>
					</ul>
				</li>
				<li class="desktop-hidden"><a href="#">Кейсы</a></li>
				<li class="desktop-hidden">
					<a href="#">База знаний</a>
					<ul>
						<li><a href="#">Подраздел 1</a></li>
						<li><a href="#">Подраздел 2</a></li>
						<li><a href="#">Подраздел N</a></li>
					</ul>
				</li>
				<li class="desktop-hidden"><a href="#">Инструменты</a></li>
				<li><a href="#">Контакты</a></li>
			</ul>
			<span class="search-btn icon-magnify"></span>
			<span class="menu-btn icon-menu"></span>
		</div>
	</header>
<!-- Переход на страницу со ссылками на современные браузеры для ie9 и ниже -->
<!--[if lt IE 10]><script>location.href='/old-ie.html';</script><![endif]-->