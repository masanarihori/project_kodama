<?php 
include("assets/func.php");

$title = "Mental Energy | TOP"; 
$css_href = "top.css";

include("assets/html/meta.php");

?>

<link rel="stylesheet" type="text/css" href="css/components/slick.css">
<link rel="stylesheet" type="text/css" href="css/components/slick-theme.css">


<header class="header">
	<div class="header__wrapper">
		<div class="header__logo"></div>
		<nav class="header__nav">
			<ul class="header__list">
				<li class="header__item header__item1">
					<a class="header__link" href="app.php">app</a>
				</li>
				<li class="header__item header__item2">
					<a class="header__link" href="#about">about</a>
				</li>
				<li class="header__item header__item3">
					<a class="header__link" href="login.php">login</a>
				</li>
			</ul>
		</nav>
	</div>
</header><!-- .header -->

<main class="main">
	<div class="main__catch">メンタルエナジー専用TODOリスト</div>
	<div class="main__catch-body">決断しない人生へ</div>
	<div class="main__mesh"></div>
	<div class="main__dark-mesh"></div>
	<ul class="main__photos">
		<li class="main__photo"><div class="main__photo1"></div></li>
		<li class="main__photo"><div class="main__photo2"></div></li>
		<li class="main__photo"><div class="main__photo3"></div></li>
	</ul>
</main><!-- .main -->

<div class="content">
	<section class="about">
		<div class="about1">
			<div class="about1__ttl">メンタルエナジーとは</div>
			<div class="about1__txt">
				メンタル・エナジーとは人間の集中力や意志力のことです。<br>
				この力は１日のうちで使える量に限りがあり、<br>
				日常の何気ない意思決定のたびに減っていきます。<br>
				何を食べるのか、何を着るのか、何のテレビを見るのか・・・<br>
				そんな些細な意思決定のたびにメンタル・エナジーは減っていくのです。
			</div>
			<div class="about1__detail"><a class="about1__link" href="#">詳細</a></div>
			<div class="about1__img"></div>
		</div>
		<div class="about2">
			<div class="about2__txt"></div>
			<div class="about2__img"></div>
		</div>
		<div class="about3">
			<div class="about3__txt"></div>
			<div class="about3__img"></div>
		</div>
	</section><!-- .about -->
	
	<section class="usage">
		<ul class="usage__list">
			<li class="usage__item1"></li>
			<li class="usage__item2"></li>
			<li class="usage__item3"></li>
			<li class="usage__item4"></li>
			<li class="usage__item5"></li>
			<li class="usage__item6"></li>
			<li class="usage__item7"></li>
			<li class="usage__item8"></li>
			<li class="usage__item9"></li>
		</ul>
	</section><!-- .usage -->
</div>



<?php 
include("assets/html/footer.php");
?>


<script src="js/lib/slick.min.js"></script>
<script src="js/top.js"></script>
