<?php include('gon2.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Ulusal Yarisma</title>
<link rel="stylesheet" href="css/main.css">
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async
	src="https://www.googletagmanager.com/gtag/js?id=UA-106958489-2"></script>


<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '280280292405363'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=280280292405363&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
	
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());

	gtag('config', 'UA-106958489-2');
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>

	<header class="main-header">
    <div class="header-top-part">
      <!-- <img src="img/date.jpg" alt="20-27 EKIM OCTOBER 2017" class="date-pic"> -->
      <a href="index.html" class="header-logo-link">
<img src="img/new-logo2018.png" alt="Ulusal Yarisma">
      </a>
    </div>

    <a href="#" class="nav-link mob-menu-btn">Menu</a>
    <nav class="nav-container">
      <ul class="navigation">
        <li class="nav-item"><a href="index.html" class="nav-link active">MANİFESTO</a>
        </li>
        <li class="nav-item"><a href="#" class="nav-link">Ulusal yarışma</a>
              <div class="dropdown-content">
                <a href="hakkinda.html">Ulusal Yarışma nedir?</a>
                <a href="yonetmelik.html">Yönetmelik</a>
                <a href="sss.html">Sıkça sorulan sorular</a>
                <a href="2017.html">54.Ulusal Yarışma</a>
              </div>
        </li>
        <li class="nav-item"><a href="#" class="nav-link">BASIN</a>
              <div class="dropdown-content">
                <a href="duyurular.html">Bültenler</a>
                <a href="galeri.html">Galeri</a>
                <a href="kurumsalkimlik.html">Kurumsal Kimlik</a>
              </div>
        </li>
        <li class="nav-item"><a href="juri.html" class="nav-link">JÜRİ</a>
   
        </li>
        <li class="nav-item"><a href="#" class="nav-link">PROGRAM</a>
              <div class="dropdown-content">
                <a href="etkinlikler.html">Etkinlikler</a>
                <a href="filmler.html">Filmler</a>
              </div>
        </li>
        <li class="nav-item"><a href="#" class="nav-link">Ödüller</a>
              <div class="dropdown-content">
                <a href="onurodulu.html">Onur Ödülü</a>
                <a href="tesekkurplaketi.html">Teşekkür Plaketi</a>
                <a href="emekodulu.html">Emek Ödülü</a>
                <a href="ulusalyarismaodulleri.html"">Ulusal Yarışma Ödülleri</a>
                <a href="odulverensanatcilar.html">Ödül veren sanatçılar</a>
              </div>
        </li>

        <li class="nav-item"><a href="#" class="nav-link">Başvurular</a>
             <div class="dropdown-content">
                <a href="cizelge.html">Çizelge</a>
                <a href="etkinlikler.html">Etkinlikler</a>
                <a href="filmler.html">Filmler</a>
              </div>
        </li>
      </ul>
    </nav>
  </header>

	<section class="article-container">
		<div class="article-content">

			<div class="row article-p">
				<div class="success" style="color: #bc1f44; font-size: 26px;">
					<?= $success ?>
				</div>
				<div class="col-sm-6" style="""">
					<h2>İletişim Bilgileri</h2>
					<br> E-Posta: info@ulusalyarisma.com<br> <br> <br>
				</div>
				<div class="col-sm-6">

					<h2>İletişim Formu</h2>
					<br>

					<form name="iletisim1" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
						<div class="control-group form-group">
							<div class="controls">
								<label
									style="display: inline-block; width: 15%; margin-bottom: 5px; font-weight: 700">Ad
									Soyad:</label> <input type="text" class="form-control" id="name"
									name="name" required=""
									data-validation-required-message="Adınız ve soyadınızı yazın">
								<p class="help-block"></p>
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<label
									style="display: inline-block; width: 15%; margin-bottom: 5px; font-weight: 700">Telefon:</label>
								<input type="tel" class="form-control" id="phone" name="phone"
									required=""
									data-validation-required-message="Telefon numaranızı yazın.">
								<p class="help-block"></p>
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<label
									style="display: inline-block; width: 15%; margin-bottom: 5px; font-weight: 700">E-Posta:</label>
								<input type="email" class="form-control" id="email" name="email"
									required=""
									data-validation-required-message="E-Posta adresinizi yazın.">
								<p class="help-block"></p>
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<label
									style="display: inline-block; width: 15%; margin-bottom: 5px; font-weight: 700">Mesaj:</label>
								<textarea rows="10" cols="100" class="form-control" id="message"
									style="width: 100%;" name="message" required=""
									data-validation-required-message="Mesajınızı yazın"
									maxlength="999" style="resize: none"></textarea>
							</div>
						</div>
<div class="g-recaptcha" data-sitekey="6LcTnDMUAAAAAFdBCYiFx_GQjwNP0FM-p2n6R_ZO"></div>
      <br/>
						<input type="submit" name="button" value="GÖNDER">
					</form>


				</div>
			</div>


		</div>
	</section>

	<script src="js/libs/jquery.min.js" charset="utf-8"></script>
	<script src="js/main.js" charset="utf-8"></script>

</body>
</html>