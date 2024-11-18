<?php require_once 'baglan.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<!--mate kodla sayfanın bilgileri girdim-->
	<meta name="title" content="Anasayfa"/>
	<meta name="description" content="Arabalar Hakkında Bilgiler"/>
	<meta name="keywords" content="Liza-WCtrl,arabalar,bmw"/>
	<meta name="author" content="Liza-WCtrl"/>
	<meta name="refresh" content="20"/>
<title>Arabalar</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<!--background: linear-gradient(90deg, rgba(0,212,255,1) 19%, rgba(3,0,102,1) 49%, rgba(187,0,0,1) 87%)-->
	<style>
		body{
		background-color: #696969;
		}
		.navbar{
        background: #161616;
		}
		footer{
		background-color: #1F1F1F;
		}
		nav{
			position: fixed;
			box-shadow: 0px 0px 30px white;
		}
		nav div h5{
			font-color: black;
		}
		main img{
			height: 800px;
			width: auto;
		}
		p{
			font-family: "crete-round";
		}
		main{
			box-shadow: 0px 0px 30px white;
		}
		cart{
			box-shadow: 0px 0px 30px white;
		}
	</style>
</head>

<body>
	<!--Navbar: En az 4 menüden oluşacaktır.-->
<nav class="navbar navbar-expand-md navbar-dark fixed-top">
	<div class="container">
		<a href="index.php" class="navbar-brand">
			<i class="fa-solid fa-location-dot fa-beat-fade">Cars</i>
		</a>
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Anasayfa</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#cart">Araba Tipleri</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#accordion">Bilgiler</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#form">İletişim</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
	
	<!--Carousel: En az 3 slayttan oluşacaktır.-->
<main>
<div class="container-fluid">
		<div class="carousel slider" data-bs-ride="carousel" id="slider1">
			<ol class="carousel-indicators" style="list-style-type:none;">
				<li data-bs-target="#slider1" data-bs-slide-to="0" class="active"></li>
				<li data-bs-target="#slider1" data-bs-slide-to="1"></li>
				<li data-bs-target="#slider1" data-bs-slide-to="2"></li>
			</ol>
			
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img alt="" src="img/carousel1.jpg" class="d-block w-100">
				</div>
				
				<div class="carousel-item">
					<img alt="" src="img/carousel2.jpg" class="d-block w-100">
				</div>
				
				<div class="carousel-item">
					<img alt="" src="img/carousel3.jpg" class="d-block w-100">
				</div>
			</div>
			
			<a href="#slider1" class="carousel-control-prev" data-bs-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a href="#slider1" class="carousel-control-next" data-bs-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
	</div>	
</main>
	
	<!--Cart: En az 6 adet carttan oluşacaktır.-->
<div class="container">
	<div class="bg-muted p-1 mb-2 rounded">
		<h1 id="cart" class="text-center">En Bilinen Otomobil Tipleri</h1>
	</div>
	<hr>
	<div class="row">
	<div class="card w-50 mb-4">
		<div class="card-header"><img alt="" class="card-img-top" src="img/card_1.jpg"></div>
		<div class="card-body"><strong>Sedan</strong><br><p>Genellikle dört kişilik olan, iki ya da dört kapısı bulunan araçlara sedan adı verilir. Sedan arabaların ilk bakışta dikkat çeken en önemli farkını ise, bagaj kısmının sürücü ve yolcu kısmından tamamen ayrı olması oluşturur. Böylece hem sürücü ve yolcular hem de yükler için daha fazla alan ortaya çıkar. Bu yüzden sedan araçlar, çoğu zaman çocuklu ailelerin ilk tercihleri arasında yer alır. Ancak sedan otomobiller kapasite ve alan dışında yol tutuşu ve benzeri sebeplerden dolayı gerek şirket aracı olarak gerek bireysel kullanım amacıyla da yaygın şekilde tercih edilir.</p></div>
		<div class="card-footer">Son Güncellenme:30.05.2024</div>		 
	</div>
	<div class="card w-50 mb-4">		
		<div class="card-header"><img alt="" class="card-img-top" src="img/card_2.jpg"></div>
		<div class="card-body"><strong>SUV</strong><br><p>SUV açılım açısından "Sport Utility Vehicle" anlamına gelmekle beraber "Spor Amaçlı Arazi Aracı" tabirinin kısaltması olarak kullanılıyor. Bu nedenle "SUV nedir?" sorusunun en temel cevabını da "Şehir içi kullanıma uygun dört çeker araç." tanımı oluşturuyor. Ancak SUV modelleri çeşitlendirilirken bu temel tanımın dahi dışına çıkılan noktalar bulunuyor.<br>
		SUV araçların çok fazla tanım karmaşasına sebep olması ise aslında birçok farklı türdeki aracın özelliklerini bir araya getiriyor olmalarından kaynaklanıyor. Tam anlamıyla füzyon bir araç tipi olan SUV'lar, station wagon'dan hatchback'e, 4x4'lerden offroad araçlarına kadar oldukça fazla türün özelliklerini bir araya getiriyor.</p></div>
		<div class="card-footer">Son Güncellenme:30.05.2024</div>			 	 		 
	</div>
	</div>
	<div class="row">
		<div class="card w-50 mb-4">		
			<div class="card-header"><img alt="" class="card-img-top" src="img/card_3.jpg"></div>		 
			<div class="card-body"><strong>Hatchback</strong><br><p>Hatchback; bagaj uzantısı olmayan araçları ifade etmek için kullanılan bir terimdir. Bu kasa tipindeki araçlar 3 ila 5 kapılı olarak tanımlanırlar. Bunun yanı sıra hatchback modeller, marka ve modellere göre değişmekle birlikte genellikle 4 ya da üzerinde oturma alanına sahip olurlar.<br>
			Hatchback araçların bagaj kısmı sedan model araçlara göre daha farklı bir tasarıma sahiptir. Hatchback arabalarda bagaj, tavandan aşağıya doğru yuvarlak hatlarla iner. Dünya genelinde yaygın olarak tercih edilen bu araç tipi; kompakt araçlar olarak sınıflandırılır.<br>
			Hatchback otomobillerin bagaj kapıları, aracın arka camı ile birlikte açılan bir gövde tipine sahiptir. Bu da yüksek bagaj hacmi ile araca yüklenecek yükün daha kolay ve pratik bir şekilde yerleştirilmesi anlamına gelir. Ayrıca hatchback araba modellerinin gövdeleri kısa olduğu için şehir içi kullanıma da hayli uygundurlar.</p></div>
			<div class="card-footer">Son Güncellenme:30.05.2024</div>		 		 			 	 
		</div>
		<div class="card w-50 mb-4">
			<div class="card-header"><img alt="" class="card-img-top" src="img/card_4.jpg"></div>		 
			<div class="card-body"><strong>Coupe</strong><br><p>Halk arasında sıklıkla “cabrio” kelimesiyle karıştırılan coupe araba, iki kapılı olarak tasarlanmış otomobil modellerine verilen isimdir. Bu noktada “iki kapılı” tanımlamasının yine halk arasında sıklıkla “tek kapılı” olarak belirtildiğini de hatırlatalım. Oldukça sportif bir görünüme sahip olan coupe arabalarda 2 ya da 4 adet pencere bulunur. Oturma koltukları da aynı şekilde 2 ya da 4 adet olabilmektedir. Ender de olsa bazı modellerde önde 2 ve arkada 1 oturma alanı bulunabilir.<br><br>		 
			Çoğunlukla iki kişilik olarak tasarlanırlar, fakat dört kişilik coupe modelleri de mevcuttur. Dört kişilik araçlarda arka oturma koltuklarına ön kapıdan ulaşılır. Bu araçların üstü açık olabilir, ama tamamen üzeri açık arabalara coupe cabrio adı verilir.</p></div>		 
			<div class="card-footer">Son Güncellenme:30.05.2024</div>		 
		</div>
	</div>
	<div class="row">
		<div class="card w-50 mb-4">
			<div class="card-header"><img alt="" class="card-img-top" src="img/card_5_2.jpg"></div>
			<div class="card-body"><strong>Station Wagon</strong><br><p>Station wagon; dilimize “istasyon vagonu” ya da "istasyon kasası" şeklinde çevrilebilen bir kasa tipidir. Ancak Türkçe karşılığı tam olarak oturmadığından orijinal biçimiyle ya da kısaca SW olarak kullanılır. Bu tipteki otomobil modellerine ilk olarak 1920'li yıllarda rastlanır. Çoğunlukla 5 kapılı olan station wagon araçlarda çatı kısmı, otomobilin arka ucuna kadar uzanır.<br><br>
			Geçmişte daha çok yük ve yolcu taşımacılığı yapmak için tasarlanan station wagon modellerini, günümüzde çocuklu kalabalık aileler de tercih eder. Tabii bu araçlar günümüzde yük taşımacılığı için kullanılmaya da devam eder.</p></div>
			<div class="card-footer">Son Güncellenme:30.05.2024</div>			 		 		 	 
		</div>
		<div class="card w-50 mb-4">
			<div class="card-header"><img alt="" class="card-img-top" src="img/card_6.jpg"></div>		 
			<div class="card-body"><strong>Pick-up</strong><br><p>Pick up ya da Türkçeleşmiş haliye pikap; çoğunlukla kamyonet tipinde olan ve arka kasasında yük taşınabilen araçlara denir. Ancak pick up’lar, kamyonetlerden farklı olarak araziye ve zorlu doğa koşullarına daha uygun şekilde tasarlanırlar.<br>		 
			Ayrıca pick up'lar, kamyonetlere göre daha hızlı ve daha konforlu bir sürüşe de imkan sağlar. Geçmişte daha çok iş ve arazi için tercih edilen pick up tipindeki araçlar, günümüzde şehir içi kullanım için de tercih edilmektedir.<br>
			Hafif ticari araç statüsünde bulunan pick up'lar, özellikle ABD’de en çok tercih edilen araçlar arasında yer alır. Bu tarzdaki araçların iş, arazi, şehir gibi pek çok farklı alanda kullanabilmesi ve kış şartlarına da dayanıklı olması, öne çıkan özellikleri arasında gösterilir. Son dönemde birçok otomotiv markası da şehir içi kullanıma daha uygun özelliklere sahip yeni pick up modelleri üretmektedir.</p></div>
			<div class="card-footer">Son Güncellenme:30.05.2024</div>			 	 
		</div>
	</div>
</div>
	
	<!--Accordion: En az 10 konu ve içerikten oluşacaktır.-->
<div class="container my-2">
	<div class="bg-muted p-1 mb-2 rounded">
		<h1 id="accordion" class="text-center">Çeşitli Bilgiler</h1>
	</div>
	<hr>
	<div class="accordion" id="MyAccordion">
		<div class="accordion-item">
			<h2 class="accordion-header">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Accordion1" aria-expanded="false" aria-controls="collapse1">
					1.Otomobillerin Tarihi:
					</button>
			</h2>
			<div id="Accordion1" class="accordion-collapse collapse">
				<div class="accordion-body">
					<img alt="" src="img/accordion1_1.jpg" class="rounded mx-auto d-block"><br>
						İlk otomobilin icadı 1700’lü yıllara dayanmaktadır. İlk otomobil olarak tarihe geçecek araç, Fransız bilim insanı Nicolas Joseph Cugnot tarafından 1769 yılında icat edilmiştir. Başlarda buhar kazanı ile çalışan üç tekerlekli bir tasarıma sahip otomobil, tarihsel süreçte gelişimi farklı tasarımlar ile devam etmiştir.<br><br>
						1887 yılında Alman mühendis Gottlieb Daimler tarafından icat edilen ilk benzinle çalışan otomobildir. İçten yanmalı motorlar ve otomobil gelişimine çok büyük katkıları olan Daimler, ilk motosikletin de mucitlerindendir. Yaşam boyunca iş ortağı olan ve her projesinde yanında yer alan ortağı Wilhelm Maybach ile motorlu otomobiller konusunda hayalleri olan Daimler, 1890 senesinde ortağı ile Daimler Motoren Gesellschaft’ı kurmuşlardır.<br><br>
						Tarihte ilk otomobilin hangisi olduğunu söylemek zor olsa da ortaya çıkan otomobillerin doğru düzgün çalışmaması sebebiyle ‘‘otomobilin babası’’ olarak Alman makine mühendisi ve tasarımcısı Karl Benz kabul edilmektedir. Benz tarafından üretilen Benz Patent Motorwagen, tarihte tam anlamıyla ilk otomobil olarak kabul edilmektedir. Karl Benz, 1878’de tasarlamış olduğu içten yanmalı motorun patentini 1879’da alarak da tarihe ismini yazdırmıştır.<br><br>
				</div>
			</div>
		</div>
		<div class="accordion-item">
			<h2 class="accordion-header">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
					2.İsmini Az Duyduğumuz Önemli Araba Markaları
				</button>
			</h2>
			<div id="collapse2" class="accordion-collapse collapse">
				<div class="accordion-body">
					<img alt="" src="img/accordion2_1.jpg" class="rounded mx-auto d-block"><br>
					  <strong>1.SSC North America:</strong><br>
					  <p>Shelby SuperCars, (SSC) Amerika Birleşik Devletleri merkezli tek süper otomobil üreticisidir. Washington Eyaleti merkezli SSC’nin sahibi araba yarışçısı ve tasarımcı Jerod Shelby’dir. Marka, 1.268 beygir gücüne sahip SSC Ultimate Aero gibi önemli süper otomobiller üretiyor. Bu araç 2014’te Koenigsegg One: 1 piyasaya sürülene kadar dünyanın en güçlü üretim otomobili olarak kabul edildi. Ultimate Aero, 2010’da Bugatti Veyron Super Sport tarafından ele geçirilene kadar, 2007’de en hızlı üretim otomobili olarak Guinness Dünya Rekoru sahibi oldu. İsmini az duyduğumuz önemli araba markaları listesinde de yerini alıyor.</p><br><br>
					  <img alt="" src="img/accordion2_2.jpg" class="rounded mx-auto d-block"><br>
					  <strong>2.Renovo Motors:</strong><br>
					  <p>2010 yılında kurulan Renovo Motors, Tesla Motors ile rekabet eden Silikon Vadisi merkezli bir start-up şirketidir. Marka, 2015 yılında, etkileyici Tesla Roadster ile karşılaştırılabilen çarpıcı, tamamen elektrikli bir süper otomobil olan Renovo Coupe’yi piyasaya sürdü. Coupe, 500’den fazla beygir gücüne sahip ve 0’dan 60 mil / saat’e sadece 3,4 saniyede çıkabilir.</p><br><br>
					  <img alt="" src="img/accordion2_3.jpg" class="rounded mx-auto d-block"><br>
					  <strong>3.Denza:</strong><br>
					  <p>Denza Çin merkezli bir otomotiv şirketidir. Şirket, BYD Auto Co. ve Mercedes Benz ana şirketi Daimler AG’nin ortak girişimidir. Bu otomotiv şirketi Mayıs 2010’da kuruldu ve lüks elektrikli araçlar üretmeye odaklandı. Ürünlerinden ikisi, dört kapılı bir sedan olan Denza 500 ve bir crossover SUV olan Denza X. Şu an itibariyle şirket ürünlerini yalnızca Çin’de sunuyor ve dünyaya açılma planlarını açıklamadı.</p><br><br>
					  <img alt="" src="img/accordion2_4.jpg" class="rounded mx-auto d-block"><br>
					  <strong>4.Doonkervoort:</strong><br>
					  <p>Doonkervoort, 1978’den beri otomobil üretim sahnesindeydi. Ancak şirketin merkezi Hollanda’da olduğundan, bu Avrupalı otomobil üreticisinin az bilinen otomobil markaları arasına girmesi şaşırtıcı değil. Joop A. Doonkervoort tarafından kurulan şirket, Amerikan Plymouth Prowler’ın yabancı bir ripoff versiyonuna benzeyen spor otomobiller üretme becerisine sahip olarak tanımlanıyor. Şirketin en çok gurur duyduğu otomobillerden biri Doonkervoort D8 GTO-JD70. Bu, şirketin 70. doğum gününü kutlayan bir kutlama arabası. Bir diğeri, Nurburging’de rekabet edebilecek en hızlı arabalardan biri olan Doonkervort D8.</p><br><br>
					  <img alt="" src="img/accordion2_5.jpg" class="rounded mx-auto d-block"><br>
					  <strong>5.Leopaard:</strong><br>
					  <p>Leopaard Motors Co., Ltd., 1950 yılında kurulmuş bir otomobil üretim şirketidir. Orijinal adı Changfeng Group Co., Ltd.’dir ve Leopaard adını alması birkaç yıl sürmüştür. Şirket, çoğunlukla SUV olan çok sayıda araç sunuyor. Pazara sundukları araçlardan bazıları Leopaard Kylin, Leopaard CT7 ve Leopaard CS7’dir.</p>
				</div>
			</div>
		</div>
		<div class="accordion-item">
			<h2 class="accordion-header">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
					3.Elektrikli Arabalar:
				</button>
			</h2>
			<div id="collapse3" class="accordion-collapse collapse">
				<div class="accordion-body">
					<img alt="" src="img/accordion3_1.jpg" class="rounded mx-auto d-block"><br>
						1835 yılı, elektrikli araç tarihinde bir dönüm noktasıdır. Amerika’nın Vermont eyaletinde Thomas Davenport isimli bir mucit, küçük bir lokomotif formunda elektrik enerjisiyle çalışan ilk motoru icat etti. İki elektromıknatıs, bir pivot ve bir batarya kullanarak hareketi mümkün kılan basit, ancak devrim niteliğinde bir tasarımdı.<br>
						Elektrikli araçlar için asıl çıkış noktası, 19. yüzyılın sonlarına doğru gelmişti. 1897’de New York sokakları, elektrikli taksilerle tanıştı ve aynı yıl, Pope İmalat Şirketi büyük ölçekli elektrikli otomobil üretimine başladı. 1900’lere gelindiğinde ise elektrikli araçlar Amerika’da altın çağlarını yaşamaya başladı. O dönem üretilen otomobillerin %28’i elektrikle çalışıyor ve büyük şehirlerdeki araçların yaklaşık üçte birini temsil ediyordu.<br>
						1990’larda çevre politikalarının ve teknolojinin gelişimiyle birlikte elektrikli araçlar, tekrar önem kazandı. Bu dönemin simgesi, General Motors tarafından üretilen ve sadece kiralanabilen EV1 oldu. 2000’lerin başında Tesla’nın piyasaya sürdüğü Roadster ve Nissan’ın 2010 yılında piyasaya sürdüğü Leaf, elektrikli araçların modern çağdaki yükselişinin temsilcileri haline geldi. Bu araçlar, uzun menzil ve yüksek performans sunarak elektrikli araçların sadece çevreci bir alternatif olmadığını, aynı zamanda her açıdan rekabetçi olduğunu kanıtladı.<br>
						Bugün elektrikli araçlar sadece bir niş pazar olmaktan çıkmış, küresel otomobil endüstrisinin önemli bir bileşeni haline gelmiştir. Geleceğin sürdürülebilir mobilitesine doğru atılan bu adımlar hem teknolojik inovasyonları hem de çevresel sorumluluk bilincini yansıtıyor. Aynı zamanda elektrikli araçların gelişimi, batarya teknolojilerindeki ilerlemelerle de yakından ilişkilidir. Lityum-iyon bataryaların kapasitesinin ve enerji yoğunluğunun artması, elektrikli araçların menzilini önemli ölçüde artırdı ve şarj sürelerini azalttı. Bu gelişmeler, elektrikli araçları daha çekici hale getirerek daha geniş bir kullanıcı kitlesine ulaşmalarını sağladı.<br>
				</div>
			</div>
		</div>
		<div class="accordion-item">
			<h2 class="accordion-header">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
					4.Araç Egzozları ve Kirleticiler Nelerdir?
				</button>
			</h2>
			<div id="collapse4" class="accordion-collapse collapse">
				<div class="accordion-body">
					Araçlar, birçoğunun zararlı etkileri olan güçlü bir egzoz gazı emisyonu yayıyor. Peki bu egzoz emisyonlarının bileşenlerini ne kadar iyi tanıyoruz? Araçlardan kaynaklanan kirleticiler aşağıda yer alan maddelerden oluşuyor:<br>
					Karbondioksit (CO2): Sera gazı olarak da bilinen CO2, iklim değişikliğine neden olan faktörler arasında belki de en sık adından söz ettiren bileşen. Toksik olmamasına rağmen okyanuslarda asitlenmeye neden olabiliyor.<br>
					Karbonmonoksit (CO): Gözle görünmeyen bu gaz, yakıtın tam olarak yanmaması sonucu ortaya çıkıyor ve insanlar için zehirli bir bileşene sahip. Yeni nesil çoğu motor, verimli yanma sistemleri sayesinde az miktarda karbon monoksit üretiyor olsa da eski motorlar yüksek miktarlarda karbonmonoksit salgılayabiliyor.<br>
					Nitrojen oksit (NOx): Herhangi bir yakma işleminde üretilen nitrojen oksit reaktif yapısıyla biliniyor. Bununla birlikte havadaki diğer kimyasallarla temasa geçtiklerinde duman oluşumuna neden olabiliyor.<br>
					Sülfürdioksit (SO2): Yanmış kibrit gibi kokan renksiz bir az olan sülfür dioksit, benzin ve mazotun rafine edilmesinde kullanılan hem petrol içerisinde doğal olarak bulunuyor. Yandığında ise motor korozyonuna ve dumana yol açan asitler meydana getiriyor.<br>
					Hidrokarbonlar (HC): Yanma kalitesinin düşmesi nedeniyle yanmamış yakıt olarak ortaya çıkan HC, benzin istasyonunda doldurduğunuz yakıt deposundan bulaşabiliyor.<br>
					Benzen (C6H6): Benzin ve dizelde az miktarlarda ve doğal olarak bulunan benzen, yanmamış yakıt olarak araç egzozlarından salınıyor. Kanserojen bir madde olmasının yanı sıra yüksek düzeyde solunduğunda insan sağlığı üzerinden ciddi zararlara neden olabiliyor.<br>
					Partiküller: Dizel motorlar, parçacıklı madde olarak bilinen havada asılı siyah kurum ve metal parçacıkları yayıyor. Yeni nesil araçlarda bu zararlı partiküllerin atmosfere pompalanmasını önlemek için dizel partikül filtreleri (DPF) tercih edilebiliyor.<br>
				</div>
			</div>
		</div>
		<div class="accordion-item">
			<h2 class="accordion-header">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
					5.Uçan arabalar ne zaman çıkacak?
				</button>
			</h2>
			<div id="collapse5" class="accordion-collapse collapse">
				<div class="accordion-body">
					<img alt="" src="img/accordion5_2.jpg" class="rounded mx-auto d-block"><br>
						Birçok firma, hava ve uzay teknolojilerini kullanarak kişisel hava taşıtları veya uçan araçlar üzerine çalışıyor ancak bu tür araçların günlük yaşamda ne zaman yaygınlaşacağı konusunda kesin bir tahminde bulunmak zor olabilir. Teknolojik, düzenleyici ve altyapısal zorluklar, uçan arabaların ticari bir gerçeklik haline gelmesini engelleyebilir veya geciktirebilir.<br>
						Uçan arabaların tam olarak ne zaman günlük hayata entegre edileceği tahmin etmek zor bir konu çünkü bir dizi teknolojik, düzenleyici ve altyapı zorluğu bulunuyor ancak 2030'lu yılların ortalarına doğru uçan arabaların ticari kullanıma hazır hale gelebileceği öngürlüyor.
				</div>
			</div>
		</div>
		<div class="accordion-item">
			<h2 class="accordion-header">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
					6.Dünyanın En Ünlü Otomobil Markaları:
				</button>
			</h2>
			<div id="collapse6" class="accordion-collapse collapse">
				<div class="accordion-body">
					<img alt="" src="img/accordion6_1.jpg" class="rounded mx-auto d-block"><br>
					  <strong>1.Honda:</strong><br>
					  <p>Honda‘nın kurucusu Soichiro, bir Toyota teknisyeniydi ve yarış arabalarına büyük ilgi gösterdi. Toyota ile piston segmanı tedarik sözleşmesinin başarısız olmasından sonra Toyota ürününün kalitesini incelemeye devam etti. Hızla üretime döndü ve 1941’de kabul edilebilir Toyota standartlarına göre çok sayıda piston segmanı üretmeye başladı. Son olarak, şirket motosikletler, içten yanmalı motorlar ve imalat konusunda deneyime sahiptir.</p><br><br>
					<img alt="" src="img/accordion6_2.jpg" class="rounded mx-auto d-block"><br>
					  <strong>2.Mercedes-Benz:</strong><br>
					  <p>Mercedes-Benz, 1886’da icat edilen ilk benzinli otomobildi. Adını Alman şirket kurucusu Carl Benz’den alıyor. Daimler Motor Grubu için markayı tasarlayan Avusturyalı otomobil mühendisi Emil Jelinek, 1901 yılında ilk Mercedes 35 hp’yi piyasaya sürdü. Kızı Mercedes Jelinek’ten sonra. Şirket, lüks arabalar, otobüsler ve kamyonlar üretmeye devam ediyor.</p><br><br>
					<img alt="" src="img/accordion6_3.jpg" class="rounded mx-auto d-block"><br>
					  <strong>3.Nissan:</strong><br>
					  <p>Toshizuke Ikawa, 1928’de Japon Nihan Sangyeo tarafından kuruldu. Nissan ismi Tokyo Borsası nisan-san’dan türetilmiştir. Şu an dünyanın en ünlü otomobil markaları arasında olan Nissan, şirketin başlangıçta fabrikalara ve yedek parçalara odaklandığı 1933 yılına kadar üretime başlamadı.</p><br><br>
					<img alt="" src="img/accordion6_4.jpg" class="rounded mx-auto d-block"><br>
					  <strong>4.Porsche:</strong><br>
					  <p>Porsche, Ferdinand Porsche tarafından dünya çapında lüks spor otomobiller ve SUV’ler için bir ara isimdir. Ayrıca Porsche, Volkswagen ailesinin çoğunluk hissedarıdır ve 1931’de Almanya’nın Stuttgart şehrinde kurulmuştur.</p><br><br>
		  			<img alt="" src="img/accordion6_5.jpg" class="rounded mx-auto d-block"><br>
					  <strong>5.Rolls Royce:</strong><br>
					  <p>Bir İngiliz şirketi olan Rolls-Royce, 1906’da iki girişimci, Henry Royce ve Charles Rolls ile başladı. Son olarak, onu dünyanın en iyi arabalarından biri yapma vizyonunu aktif olarak paylaştılar. Rolls-Royce daha sonra bağımsız olarak jet motorlarının üretimine dahil oldu.</p><br><br>
		  			<img alt="" src="img/accordion6_6.jpg" class="rounded mx-auto d-block"><br>
					  <strong>6.Toyota:</strong><br>
					  <p>Bir Japon şirketi olan Toyota, 1937 yılında Kichiro Toyota tarafından kuruldu. Toyota’nın otomotiv endüstrisine iki anahtar kavramı, Toyota Üretim Sistemi (TPS) ve Tam Zamanında’yı (JIT) tanıttığı iyi bilinmektedir.</p><br><br>
				</div>
			</div>
		</div>
		<div class="accordion-item">
			<h2 class="accordion-header">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
					7.Tekerleğin Şekli Niçin Yuvarlak:
				</button>
			</h2>
			<div id="collapse7" class="accordion-collapse collapse">
				<div class="accordion-body">
					<img alt="" src="img/accordion7_2.jpg" class="rounded mx-auto d-block"><br>
		  				Tekerlek ilk icat edildiği zaman yuvarlak değildi. Kare şekline sahip olan tekerlik kullanılırdı. İnsanlar tekerliği taşıma amaçlı kullanmışlardır.<br>
						Tekerleğin yuvarlak olmasının sebebi daha kolay hareket ettirebilir olmasıdır. İlk zamanlarda kare şekline sahip olan tekerlek gereğinden fazla güce ihtiyaç duyuyordu. O zamanlarda yaşayan atalarımız daha kolay olabileceğini düşünmüş ve tekerleği yuvarlak yapmaya başlamışlar. Az kuvvetle hızlı ve kolay hareket edebileceğini fark ettiler. Bu nedenle tekerlek belli kuvvetin etkisinde kolaylıkla hareket edebiliyordu.<br>
						Dingine bağlı olarak kuvvetle beraber harekete sahipti. Kuvvetlere karşı hareket etme özelliği vardır. Kuvvet uygulandığı takdirde tekerlek kolaylıkla dönerek taşımacılığı kolaylaştırmaktadır. Böylece tekerlek insanlar için ulaşımın vazgeçilmez aletlerinden biri haline gelmiştir. Günümüzde tekerlekler sert lastikten yuvarlak yapılarak ulaşımı çok daha kolay hale getirdi.<br>
				</div>
			</div>
		</div>
		<div class="accordion-item">
			<h2 class="accordion-header">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
					8.Otomobil Üreten Ülkeler:
				</button>
			</h2>
			<div id="collapse8" class="accordion-collapse collapse">
				<div class="accordion-body">
					<img alt="" src="img/accordion8_1.jpg" class="rounded mx-auto d-block"><br>
					  <strong>1.Japonya</strong><br>
					  <p><ol>
							<li>Toyota</li>
							<li>Nissan</li>
							<li>Honda</li>
							<li>Suzuki</li>
							<li>Subaru</li>
							<li>Mazda</li>
							<li>Mitsubishi</li>
							<li>Motor</li>
							<li>Lexus</li>
							<li>Acura</li>
							<li>Hino</li>
						</ol></p><br>
					<strong>2.ABD:</strong><br>
					  <p><ol>
							<li>Buick</li>
							<li>Chevrolet</li>
							<li>Chrysler</li>
							<li>Dodge</li>
							<li>Hummer</li>
							<li>Ford</li>
							<li>GMC</li>
							<li>Jeep</li>
							<li>Lincoln</li>
							<li>Pontiac</li>
							<li>Cadillac</li>
						</ol></p><br>
				  <strong>3.Birleşik Krallık:</strong><br>
					  <p><ol>
							<li>Aston Martin</li>
							<li>Bentley.</li>
							<li>Jaguar</li>
							<li>Land Rover</li>
							<li>Lotus</li>
							<li>McLaren</li>
							<li>Mini</li>
							<li>Rolls-Royce</li>
							<li>Vauxhall</li>
						</ol></p><br>
					<strong>4.Almanya:</strong><br>
					  <p><ol>
							<li>Audi</li>
							<li>BMW</li>
							<li>Mercedes-Benz</li>
							<li>Porsche</li>
							<li>Ford-Werke GmbH</li>
							<li>Volkswagen</li>
							<li>Maybach</li>
							<li>Smart</li>
							<li>MAN</li>
						</ol></p><br>
				</div>
			</div>
  		</div>
		<div class="accordion-item">
			<h2 class="accordion-header">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
					9.Dünyadaki En Nadide Bulunan 5 Araba Modelleri:
				</button>
			</h2>
			<div id="collapse9" class="accordion-collapse collapse">
				<div class="accordion-body">
					<img alt="" src="img/accordion9_1.jpg" class="rounded mx-auto d-block"><br>
					  <strong>1.1955 Mercedes 300SL Martı Kanadı</strong><br>
					  <p>‘Eski olup da klasik olamayacak hiçbir Mercedes modeli yoktur’ sözünün anlam bulduğu araç olarak karşımıza çıkan Mercedes 300SL ‘martı kanadı’ şeklinde açılan kapılarıyla dikkat çekiyor. Alman otomobil üreticisi Mercedes-Benz tarafından üretilen bu otomobil, 1952-1953 yılları arasında yarış otomobili olarak üretilmişti. Daha sonra 1955-1963 yılları arasında spor otomobil olarak üretimine devam edildi. Mercedes 300SL’in en önemli parçası eski 3000 motoruydu ancak otomobil bu haliyle güçsüz kalıyordu. Mercedes mühendisleri üzerinde küçük değişiklikler yaparak onu daha da güçlendirdiler. Bu değişiklikler sayesinde performansı 170 hpden 208 hpye çıkarıldı. Ancak sadece motorda yapılan değişiklikler yeterli gelmedi çünkü şasinin de hafif ve güçlü olması gerekiyordu. Metal olarak alüminyum alaşımı seçilerek boru biçimli bir şasi yapıldı. Bu şasi geniş bir araba için yeterli sağlamlıkta olsa da Mercedes 300SL’in normal şekilde açılan dört kapılı kullanımı imkansız hale getirdi. Bu yüzden kapıların tasarımı değiştirildi ve bahsettiğimiz ‘martı kanadı’ halini aldı. İşte efsanenin hikayesi buradan geliyor.. Bu efsanevi tasarım olan martı kanatlarının zorunluluktan yapılmış olduğunu öğrenmek gerçekten şaşırtıcı. Çünkü sahip olduğu o harika kapılar sayesinde 1955 Mercedes 300SL hazırladığımız ‘Dünya’nın En Nadir 5 Arabası’ listemizde ilk sırada yer almayı başarıyor!</p><br><br>
		  			<img alt="" src="img/accordion9_2.jpg" class="rounded mx-auto d-block"><br>
					  <strong>2.1962 Ferrari 250 GTO</strong><br>
					  <p>Bir sürü paha biçilemez, paranın satın alamayacağı değerde Ferrari var ancak 1962’de piyasaya sürülen 250 GTO bir başka.. Bu otomobilin nadir oluşu şimdiye kadar toplamda sadece 39 model üretilmesinden kaynaklanıyor. 2004’te Sports Cars International tarafından hazırlanan 1960’lı yılların en iyi spor otomobilleri listesinde 6. Sırada yer alan Ferrari 250 GTO, ‘Dünya’nın En Nadir 5 Arabası’ listemizde 2. sıraya yerleşiyor! Gerçekten dış görünüşü ve tasarımıyla tüm zamanların en iyi Ferrarilerinden diyebileceğimiz 250 GTO’ya listemizde yer vermezsek olmazdı, çünkü Popular Mechanics tarafından da ‘Tüm Zamanların En Ateşli Otomobili’ seçildi.</p><br><br>
					<img alt="" src="img/accordion9_3.webp" class="rounded mx-auto d-block"><br>
					  <strong>3.1970 Porsche 917</strong><br>
					  <p>Şimdiye kadar yapılmış en iyi ve en başarılı yarış arabalarından bazılarını piyasaya süren Porsche, ürettiği 1970 model Porsche 917 ile Le Mans 24 Saat genel klasman zaferini kazandı. 390km/h hıza ulaşabilen Porsche 917 gücünü typ 912 12 silindir boksör motorundan alıyordu. Hatta Porsche 917, Steve McQueen’in filmi Le Mans ile film yıldızı da olmuştur. Spor otomobil yarışlarında hızı, motor gücü ve harika imajıyla efsanevi bir yere sahip olan Porsche 917, listemizde 3. sırada yer alıyor.</p><br><br>
		  			<img alt="" src="img/accordion9_4.jpg" class="rounded mx-auto d-block"><br>
					  <strong>4.McLaren F1</strong><br>
					  <p>Gordon Murray ve McLaren Automotive tarafından tasarlanıp üretilen McLaren F1, 31 mart 1998’de saatte 386.7 km hıza ulaşarak dünyanın en hızlı seri üretim otomobili olma rekorunu kırmış. Bu rekoru 2005 yılına dek elinde tutan McLaren F1, Ocak 2009 itibariyle halen en hızlı atmosferik motorlu üretim otomobili olmayı başarıyor. McLaren F1, gücünü 6.1 hacimli BMW S70 60° V12 motordan alıyor. Üretimi 1992’de başlayıp 1998’de sona eren otomobil, hazırlamış olduğumuz ‘Dünya’nın En Nadir 5 Arabası’ listemizde 4. sırada yer alıyor.</p><br><br>
		  			<img alt="" src="img/accordion9_5.webp" class="rounded mx-auto d-block"><br>
					  <strong>5.2019 Bugatti La Voiture Noire</strong><br>
					  <p>Hazırladığımız en nadide 5 araba listesini günümüze daha yakın bir model olan Bugatti La Voiture Noire ile sonlandırıyoruz. 2019 yılında şimdiye kadar satılan en pahalı yeni otomobil ünvanını alan Bugatti La Voiture Noire, Batman çizgi romanının sayfalarından fırlamış gibi görünüyor. Efsanevi üretici Bugatti tarafından tasarlanan bu ikonik otomobilin isminde yer alan Veyron kelimesi tam olarak ‘kara araba’ anlamına geliyor. El ile üretilmiş karbon fiber gövdesi ile dikkat çeken La Voiture Noire, Chiron, Chiron Sport ve Divo’da da bulunan 4 turbolu 8.0 litrelik W16 motora sahip. Bu motor 1500 beygir gücü ve 1600 Nm tork üretebiliyor. Günümüzde sadece bir tane var olduğu için hazırlamış olduğumuz ‘Dünya’nın En Nadir 5 Arabası’ listemizin kapanışını bu harika otomobille yapmak istedik.</p>
				</div>
			</div>
		</div>
		<div class="accordion-item">
			<h2 class="accordion-header">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
					10.Araba Alırken Nelere Dikkat Edilmeli?
				</button>
			</h2>
			<div id="collapse10" class="accordion-collapse collapse">
				<div class="accordion-body">
					<p>Aşağıda araba alırken dikkat edilmesi gerekenler maddeler halinde sıralanmıştır:<br><br>
						<ol>
							<li>Önce Bütçeni Belirle: İlk olarak ne kadar harcama yapabileceğini ve satın almak istediğin araba için ne kadar bütçe ayırabileceğini belirlemelisin. Bu, araç seçimini daraltmana yardımcı olacaktır.</li>
							<li>Araç Türünü ve Amacını Belirle: Hangi tür araca ihtiyacın olduğunu belirleyerek devam et. Örneğin şehir içi kullanım için küçük bir otomobil mi, aile için geniş bir SUV mu, iş amaçlı bir kamyonet mi gerekiyor? Ayrıca aracını ne amaçla kullanacağını da düşün.</li>
							<li>Yakıt Verimliliği ve Performans: Araçların yakıt ekonomisi ve performansı önemli bir faktördür. Yakıt tüketimi seni uzun vadede etkileyebilir; bu yüzden ekonomik bir araç tercih etmek her daim faydalı. Performans gereksinimleri de önemli olan bir diğer unsur.</li>
							<li>Güvenlik Özellikleri: Araçların güvenlik özellikleri herkes için büyük bir önem taşır. İleri sürüş destek sistemleri, çarpışma test sonuçları ve hava yastığı sayısı gibi faktörleri, araba satın almadan önce göz önünde bulundurmayı unutma!</li>
							<li>Sigorta Maliyeti: Aracın sigorta maliyetlerini kontrol et. Farklı araçlar farklı sigorta primleri gerektirebilir. Bu da bütçeni etkileyebilir.</li>
							<li>Sıfır veya Kullanılmış Araç: Yeni bir araç mı yoksa kullanılmış bir araç mı almak istediğinize karar verin. Her iki seçeneğin avantajları ve dezavantajlarını tart ve bu doğrultuda karar ver.</li>
							<li>Test Sürüşü Yap: Herhangi bir aracı satın almadan önce mutlaka bir test sürüşü yap. Araç sürüşü sana aracın nasıl hissettirdiği hakkında harika fikirler verecektir.</li>
							<li>Fiyat Karşılaştırması: Birden fazla araba modeli ve satıcı arasında fiyat karşılaştırması yapmakta da fayda var. Farklı satıcıları ziyaret et ve farklı teklifleri karşılaştırarak en iyi sonuca ulaş.</li>
							<li>Garanti ve Bakım Hizmetleri: Aracın garanti süresi ve satış sonrası bakım hizmetleri hakkında bilgi edin. İyi bir garanti ve servis desteği almak, aracı kullanmaya başladığı andan itibaren önemlidir.</li>
							<li>Belgeleri İnceleyin: Belgeler, noterde araç alırken dikkat edilmesi gerekenler arasında yer alır. Aracın tüm belgelerini ve evraklarını dikkatlice incele. Özellikle kullanılmış araçlarda bu çok çok önemlidir.</li>
						</ol></p><br>
				</div>
			</div>
  		</div>
	</div>
</div>

	<!--İletişim: Ad,e-mail ve mesajdan oluşacaktır.--><!--required: Zorunluluk belirtiyor.-->
<div class="container">
	<div class="bg-muted p-1 mb-2 rounded">
		<h1 id="form" class="text-center">İletişime Geç!</h1>
	</div>
	<hr>
	<!--Footer.-->
	<div class="row justify-content-center">
		<div class="col-md-6">
			<form id="form1" name="form1" method="post" action="islem.php">
				<div class="form-group">
					<label for="name">Ad:</label>
					<input type="text" class="form-control" id="name" name="bilgi_ad" required>
				</div>
				<div class="form-group">
					<label for="email">E-mail:</label>
					<input type="email" class="form-control" id="email" name="bilgi_mail" required>
				</div>
				<div class="form-group">
					<label for="comment">Yorum:</label>
					<textarea class="form-control" id="comment" name="bilgi_yorum" rows="3" required></textarea>
				</div>
				<button type="submit" class="btn btn-dark" name="ekle" id="submit">Gönder</button>
			</form>
			<div class="mt-3" id="error-msg" style="display:none;">
				<div class="alert alert-danger" role="alert" id="error-text"></div>
			</div>
		</div>
	</div> 
</div>

<footer>
	<div class="text-light fs-5 py-3 d-flex justify-content-center">Liza-WCtrl | 2024</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>