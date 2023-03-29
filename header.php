<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= bloginfo('template_url');?>/assets/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= bloginfo('template_url');?>/assets/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= bloginfo('template_url');?>/assets/img/favicon/favicon-16x16.png">
	<!-- <link rel="manifest" href="<?= bloginfo('template_url');?>/assets/img/favicon/site.webmanifest"> -->
	<link rel="mask-icon" href="<?= bloginfo('template_url');?>/assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<!-- <link rel="icon" href="<?= bloginfo('template_url');?>/assets/img/favicon.ico" type="image/x-icon"> -->
	<!-- <link rel="shortcut icon" href="<?= bloginfo('template_url');?>/assets/img/favicon.ico" type="image/x-icon"> -->
	<!-- <link rel="apple-touch-icon" href="<?= bloginfo('template_url');?>/assets/img/favicon.ico" type="image/x-icon"> -->
	<meta name="description" content="Мережа реабілітаційних центрів “Джерело Life” - це команда висококласних фахівців, які щоденно,
	 системно та якісно виконують свою роботу, дотримуючись новітніх європейських протоколів.">
	<meta name="keywords"
		content="Фізична реабілітация,Нейрореабілітація,Ерготерапія,Терапія мови та мовлення,Патронажна служба,Реабілітація вдома,Амбулаторне лікування,Догляд 24\7,Прокат Медтехніки">
	<title><?php the_title()?></title>

  <?php wp_head(); ?>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap&_v=20230318120416"
		rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css?_v=20230318120416" />
</head>

<body>
<?php if (function_exists('wpm_language_switcher')) wpm_language_switcher('select', 'name'); ?>
	<div class="hidden-box">
		<div class="preloader">
			<svg width="572" height="450" viewBox="0 0 572 450" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g>
					<path class="animation-laurel"
						d="M484.322 73.2726C485.964 70.3978 488.016 67.523 490.479 64.6482C497.868 55.2024 507.308 46.578 518.391 39.5963C547.944 47.8101 572.982 30.5612 574.214 29.3292C548.354 21.1154 531.115 26.865 521.674 32.204L521.264 32.6146L520.853 33.0253C520.443 33.436 520.033 33.436 519.622 33.8467C515.107 36.7215 510.592 39.5963 506.487 43.2925C520.443 23.9902 519.622 2.22384 519.212 0.17041C490.479 23.9902 492.531 49.0421 493.763 54.7917C491.711 57.2558 489.248 59.72 487.606 62.1841C485.143 65.4696 482.68 68.7551 480.628 72.4512C489.658 46.1673 477.755 22.3475 476.934 20.7047C460.105 54.7917 473.24 76.9688 476.113 81.0757C468.725 97.5031 466.672 114.752 470.366 132.411V132.822C470.777 133.644 471.598 134.465 472.419 134.054C472.419 134.054 472.419 134.054 472.829 134.054C473.24 134.054 474.061 133.644 474.061 133.233C474.471 132.822 474.471 132.001 474.471 131.59C470.366 113.52 473.24 95.4497 481.859 79.0222C490.069 81.897 514.697 87.236 544.66 65.0589C541.787 64.2375 512.234 55.6131 484.322 73.2726Z"
						fill="#78D651" />
					<path opacity="0.8" class="animation-pigeon"
						d="M478.986 93.8069C478.165 90.5214 475.702 88.468 472.419 88.0573L446.559 84.7718C439.992 79.0222 421.521 65.8802 398.535 65.8802C388.684 65.8802 379.243 68.3444 369.803 72.8619C347.227 84.3611 334.913 107.77 334.092 141.036C338.607 145.143 343.123 149.66 347.227 153.767L348.048 154.589V153.356C346.817 133.644 348.459 98.3245 375.96 84.3611C383.348 80.665 390.736 79.0222 398.535 79.0222C417.416 79.0222 432.604 90.1107 437.94 94.6283C439.992 96.271 442.865 97.5031 445.328 97.9138L456.41 99.1459L444.917 107.36C428.909 118.859 424.805 140.214 435.477 156.642C437.119 159.106 470.777 221.53 449.843 271.223C438.761 297.918 413.312 316.81 374.728 327.077C368.161 328.72 361.593 329.952 354.616 331.184H353.384L353.795 330.362C366.929 298.739 370.624 265.063 365.288 230.566C364.056 223.173 362.004 215.781 359.541 208.388C351.332 185.801 336.145 165.266 314.801 148.428C254.052 99.9672 167.034 74.094 63.1866 74.094C45.9471 74.094 28.2972 74.9154 10.2368 76.1474L1.20661 76.9688H0.796143L4.49031 85.5932C5.7217 88.468 32.4018 148.018 127.219 179.23H127.629C135.839 192.372 182.221 257.26 305.36 257.671H306.181L305.77 257.26C303.308 252.743 300.845 248.636 297.972 244.118C215.879 242.065 171.138 207.567 151.847 187.443L150.205 185.801L152.257 186.211C177.295 192.372 204.386 196.068 233.118 197.711H233.939L233.118 197.3C228.603 192.372 223.678 187.854 218.342 183.337C91.0981 173.069 38.9692 114.752 22.5507 90.1107L22.1402 89.2894H23.3716C36.9169 88.468 50.4622 88.0573 63.597 88.0573C164.161 88.0573 248.306 112.699 307.002 159.106C326.294 174.301 340.249 192.782 347.227 212.906C349.69 219.477 351.332 226.048 352.153 232.619C357.489 267.117 352.974 300.793 338.607 332.416V332.826H338.197C333.682 333.237 329.577 333.237 325.883 333.237C306.181 333.648 248.306 335.701 196.177 339.808C86.9934 348.433 85.3516 359.11 84.1202 366.503C82.4783 377.181 97.6655 382.52 104.233 384.573C152.668 401 164.571 419.481 172.37 431.802C178.116 441.248 183.452 449.051 198.229 449.051L200.692 448.64C248.716 436.73 313.569 400.59 338.197 361.164C341.07 356.646 343.944 351.718 346.817 345.968V345.558H347.227C358.31 344.326 368.571 342.683 378.012 340.219C421.111 328.72 449.433 307.364 462.157 276.562C485.964 219.888 448.612 152.535 446.97 150.071L446.559 149.66C439.992 139.393 442.455 125.84 452.306 118.859L475.702 102.021C478.575 99.9672 479.807 96.6817 478.986 93.8069ZM330.398 347.611C329.167 349.665 327.935 352.129 326.704 354.182C304.129 389.912 242.149 423.999 197.819 435.498C190.841 435.498 188.788 433.034 183.452 424.41C174.833 410.446 161.287 389.501 108.338 371.431C105.464 370.199 102.591 369.378 100.539 368.556L99.3073 367.735L100.539 367.324C127.219 355.825 259.388 348.022 325.883 346.79C327.114 346.79 328.346 346.79 329.988 346.79H331.219L330.398 347.611Z" />
				</g>
			</svg>
		</div>

		<header class="header">
			<div class="container">
				<div class="header__inner">
					<div class="header__picture">
						<a href="./">
							<img class="logo" src="<?= bloginfo('template_url');?>/assets/img/logo.svg" alt="logo">
						</a>
					</div>

					<div class="bars">
						<div class="bars__item">

						</div>
						<div class="bars__item">

						</div>
						<div class="bars__item">

						</div>
					</div>
					<nav class="navigation">
						<ul class="menu">
							<li class="menu__item">
								<a class="menu__item-link" href="#about" title="Про нас">
									Про нас
								</a>
							</li>
							<li class="menu__item menu__item--duble">
								<a class="menu__item-link " href="#">
									Послуги
								</a>


								<ul class="list-duble">
									<div class="list-duble__col">
										<li class="list-duble__item"><a class="list-duble__item-link" href="./programs.html">Фізична
												реабілітация</a></li>
										<li class="list-duble__item"><a class="list-duble__item-link"
												href="./neuro.html">Нейрореабілітація</a></li>
										<li class="list-duble__item"><a class="list-duble__item-link" href="./therapy.html">Ерготерапія</a>
										</li>
										<li class="list-duble__item"><a class="list-duble__item-link" href="./movement.html">Терапія мови та
												мовлення</a></li>
										<li class="list-duble__item"><a class="list-duble__item-link"
												href="./prokat-medtekhniky.html">Прокат
												Медтехніки</a></li>
									</div>
									<div class="list-duble__col">
										<li class="list-duble__item"><a class="list-duble__item-link" href="./service.html">Патронажна
												служба</a></li>
										<li class="list-duble__item"><a class="list-duble__item-link" href="./home.html">Реабілітація
												вдома</a></li>
										<li class="list-duble__item"><a class="list-duble__item-link" href="./outpatient.html">Амбулаторне
												лікування</a></li>
										<li class="list-duble__item"><a class="list-duble__item-link" href="./care.html">Догляд
												24\7</a>
										</li>
									</div>
								</ul>
							</li>
							<li class="menu__item">
								<a class="menu__item-link" href="doctors.html" title="Команда">
									Команда
								</a>
							</li>
							<li class="menu__item">
								<a class="menu__item-link" href="#gallery" title="Галерея">
									Галерея
								</a>
							</li>
							<li class="menu__item">
								<a class="menu__item-link" href="#reviews" title="Відгуки">
									Відгуки
								</a>
							</li>
							<li class="menu__item">
								<a class="menu__item-link" href="./blog.html" title="Блог">
									Блог
								</a>
							</li>
							<li class="menu__item">
								<a class="menu__item-link" href="#contacts" title="Контакти">
									Контакти
								</a>
							</li>
						</ul>

						<div class="languages">
							<a class="languages__item languages__item-active" href="#">
								UA
							</a>/
							<a class="languages__item" href="#">
								Ru
							</a>
						</div>
					</nav>
				</div>
			</div>
		</header>
