<?php
	session_start();
	include "connect.php";
	$role = (isset($_SESSION["role"])) ? $_SESSION["role"] : "guest";

	$sql = "SELECT * FROM `products` WHERE  `product_id` < 502 ORDER BY `created_at` DESC";
	if(!$result = $connect->query($sql))
		return die ("Ошибка получения данных: ". $connect->error);

	$data = "";
	while($row = $result->fetch_assoc())
		$data .= sprintf('
			<div class="col">
				<img src="%s"  alt="Тур" title="Изображение тура">
				<div class="row" style=" display: flex;
				flex-direction:column;">
					<p><a href="product.php?name=%s">%s</a></p>
					<h4>от %s p.</h4>
					<input type="hidden" value="%s" name="name">
					
				</div>
				%s
				
			</div>
		', $row["image"], $row["name"], $row["name"], $row["price"],$row["name"], 
		($role == "admin") ? '
			<div class="row">
				<p><a href="update.php?name='.$row["name"].'" class="text-small">Редактировать</a></p>
				<p><a onclick="return confirm(\'Вы действительно хотите удалить этот товар?\')" href="assets/controllers/delete_product.php?id='.$row["name"].'" class="text-small">Удалить</a></p>
			</div>
		' : '');

	if($data == "")
		$data = '<h3 class="text-center">Товары отсутствуют</h3>';

	include "header.php";
?>
<!-- баннер -->

<div class="slideshow-container">
	<div class="mySlides fade">
		<div class="myimg">

			<img src="assets/img/j.png" alt="Тур" title="Изображение тура" style="width:100%; height: 891px;">
		</div>
		<div class="text2">JAPAN</div>
	</div>

	<div class="mySlides fade">
		<div class="myimg">

			<img src="assets/img/k.png" alt="Тур" title="Изображение тура" style="width:100%; height: 891px;">
		</div>

		<div class="text2">KYOTO</div>
	</div>

	<div class="mySlides fade">
		<div class="myimg">

			<img src="assets/img/o.png" alt="Тур" title="Изображение тура" style="width:100%; height: 891px;">
		</div>

		<div class="text2">OSAKA</div>
	</div>

	<div class="mySlides fade">
		<div class="myimg">

			<img src="assets/img/h.png" alt="Тур" title="Изображение тура" style="width:100%; height: 891px;">
		</div>

		<div class="text2">HIROSIMA</div>
	</div>

	<div class="mySlides fade">
		<div class="myimg">

			<img src="assets/img/t.png" alt="Тур" title="Изображение тура" style="width:100%; height: 891px;">
		</div>

		<div class="text2">TOKYO</div>
	</div>

	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!--общий контейнер-->
<div class="content">
	<div class="div-11">
		<div class="div-12">
			<img loading="lazy" src="assets/img/denys-nevozhai-D68ADLeMh5Q-unsplash1.png" alt="tokyo" class="img-2" />
			<a href="indexTokyo.html" class="ssilka">
				<div class="div-13">
					<div class="div-14">ПЕРЕМЕСТИТЬСЯ В</div>
					<div class="div-15">Tokyo</div>
				</div>
			</a>
		</div>
		<div class="div-16">
			<img loading="lazy" src="assets/img/zhijian-dai-MUUnrhZ0xmA-unsplash1.png" alt="kyoto" class="img-3" />
			<a href="indexKyoto.html" class="ssilka">
				<div class="div-17">
					<div class="div-18">ПЕРЕМЕСТИТЬСЯ В</div>
					<div class="div-19">Kyoto</div>
				</div>
			</a>
		</div>
		<div class="div-20">
			<img loading="lazy" src="assets/img/zhijian-dai-nCGpqcaSRnU-unsplash1.png" alt="osaka" class="img-4" />
			<a href="indexOsaka.html" class="ssilka">
				<div class="div-21">
					<div class="div-22">ПЕРЕМЕСТИТЬСЯ В</div>
					<div class="div-23">Osaka</div>
				</div>
			</a>
		</div>
		<div class="div-24">
			<img loading="lazy" src="assets/img/sorasak-_UIN-pFfJ7c-unsplash1.png" alt="Hiroshima" class="img-5" />
			<a href="indexHiroshima.html" class="ssilka">
				<div class="div-25">
					<div class="div-26">ПЕРЕМЕСТИТЬСЯ В</div>
					<div class="div-27">Hiroshima</div>
				</div>
			</a>
		</div>
	</div>



	<div class="div-31">
		<div class="div-32">
			<div class="div-33">Когда лучше ехать в Японию</div>
			<div class="div-34">
				<div class="div-35">
					<div class="column">
						<img loading="lazy" src="assets/img/romeo-a-SlIl9eZjWUc-unsplash1.png" alt="Hiroshima"
							class="img-7" />
					</div>
					<div class="column-2">
						<div class="div-36">
							Лучшее время года для отдыха в Японии весна и осень, когда
							стоит самая комфортная погода. Но и лето и зима имеют свою
							привлекательностью. Япония - это страна, где можно великолепно расслабиться, созерцая
							умиротворяющие пейзажи традиционных садов, храмов, природные
							красоты. Так как Япония имеет значительную протяженность с
							севера на юг, в пределах ее территории существуют большие
							климатические различия. В целом климат Японии влажный,
							морской. Например в мае, когда еще на Хоккайдо снег и зацветает сакура, на Окинаве можно
							загорать и купаться в океане.
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="div-44"></div>
	</div>


	<div class="div-45">Достопримечательности <div class="div-44"></div>
	</div>
	<div class="div-46">
		<div class="div-47">
			<div class="column-3">
				<div class="div-48">
					<img loading="lazy" src="assets/img/Rectangle18.png" alt="Hiroshima" class="img-8" />
					<div class="div-49">Япония, Никко</div>
					<div class="div-50">
						<img loading="lazy"
							src="https://cdn.builder.io/api/v1/image/assets/TEMP/3db2bc1bc643d8914015ce16462122ed0b3155567729589848cd9c19576355fe?"
							class="img-9" />
						<img loading="lazy"
							src="https://cdn.builder.io/api/v1/image/assets/TEMP/3db2bc1bc643d8914015ce16462122ed0b3155567729589848cd9c19576355fe?"
							class="img-10" />
						<img loading="lazy"
							src="https://cdn.builder.io/api/v1/image/assets/TEMP/3db2bc1bc643d8914015ce16462122ed0b3155567729589848cd9c19576355fe?"
							class="img-11" />
						<img loading="lazy"
							src="https://cdn.builder.io/api/v1/image/assets/TEMP/3db2bc1bc643d8914015ce16462122ed0b3155567729589848cd9c19576355fe?"
							class="img-12" />
					</div>
					<div class="div-51">
						Водопад имеет высоту 97 метров и питается водами реки Дайягава,
						которая берет свое начало на востоке озера Тюдзэндзи. Кэгон
						находится неподалеку от городка Никко, что в ста тридцати
						километрах от Токио – столицы Японии. © «wikiway.com»
					</div>
				</div>
			</div>
			<div class="column-4">
				<div class="div-52">
					<img loading="lazy" src="assets/img/Rectangle19.png" alt="Hiroshima" class="img-13" />
					<div class="div-53">Япония, хонсю</div>
					<div class="div-54">
						<img loading="lazy"
							src="https://cdn.builder.io/api/v1/image/assets/TEMP/3db2bc1bc643d8914015ce16462122ed0b3155567729589848cd9c19576355fe?"
							class="img-14" />
						<img loading="lazy"
							src="https://cdn.builder.io/api/v1/image/assets/TEMP/3db2bc1bc643d8914015ce16462122ed0b3155567729589848cd9c19576355fe?"
							class="img-15" />
						<img loading="lazy"
							src="https://cdn.builder.io/api/v1/image/assets/TEMP/184d91ed505e2795f70bdfa65b301b3375d22c8dff70774787bbe127f44bdd21?"
							class="img-16" />
						<img loading="lazy"
							src="https://cdn.builder.io/api/v1/image/assets/TEMP/3db2bc1bc643d8914015ce16462122ed0b3155567729589848cd9c19576355fe?"
							class="img-17" />
					</div>
					<div class="div-55">
						Никакой туристический буклет не в силах сделать Фудзияму банальным
						туристическим аттракционом, и даже самые пресытившиеся красотами
						мира путешественники не останутся безучастными к тому, что
						предстанет перед их взором. © «wikiway.com»
					</div>
				</div>
			</div>
			<div class="column-5">
				<div class="div-56">
					<img loading="lazy" src="assets/img/Rectangle20.png" alt="Hiroshima" class="img-18" />
					<div class="div-57">япония, хаконе</div>
					<div class="div-58">
						<img loading="lazy"
							src="https://cdn.builder.io/api/v1/image/assets/TEMP/3db2bc1bc643d8914015ce16462122ed0b3155567729589848cd9c19576355fe?"
							class="img-19" />
						<img loading="lazy"
							src="https://cdn.builder.io/api/v1/image/assets/TEMP/3db2bc1bc643d8914015ce16462122ed0b3155567729589848cd9c19576355fe?"
							class="img-20" />
						<img loading="lazy"
							src="https://cdn.builder.io/api/v1/image/assets/TEMP/184d91ed505e2795f70bdfa65b301b3375d22c8dff70774787bbe127f44bdd21?"
							class="img-21" />
						<img loading="lazy"
							src="https://cdn.builder.io/api/v1/image/assets/TEMP/3db2bc1bc643d8914015ce16462122ed0b3155567729589848cd9c19576355fe?"
							class="img-22" />
					</div>
					<div class="div-59">
						Хаконе — национальный парк и курортная зона к юго-востоку от
						Фудзиямы — пользуется огромной популярностью у токийцев как место
						отдыха в выходные дни. Здесь масса озер и горячих источников,
						святилищ и художественных музеев, а близость к Токио делает парк
						чудесным местом для краткого визита, если вдруг захочется
						отдохнуть от шумной городской жизни. © «wikiway.com»
					</div>
				</div>
			</div>
			<div class="column-6">
				<div class="div-60">
					<img loading="lazy" src="assets/img/Rectangle21.png" alt="Hiroshima" class="img-23" />
					<div class="div-61">япония, Киото</div>
					<div class="div-62">
						<img loading="lazy"
							src="https://cdn.builder.io/api/v1/image/assets/TEMP/3db2bc1bc643d8914015ce16462122ed0b3155567729589848cd9c19576355fe?"
							class="img-24" />
						<img loading="lazy"
							src="https://cdn.builder.io/api/v1/image/assets/TEMP/3db2bc1bc643d8914015ce16462122ed0b3155567729589848cd9c19576355fe?"
							class="img-25" />
						<img loading="lazy"
							src="https://cdn.builder.io/api/v1/image/assets/TEMP/3db2bc1bc643d8914015ce16462122ed0b3155567729589848cd9c19576355fe?"
							class="img-26" />
						<img loading="lazy"
							src="https://cdn.builder.io/api/v1/image/assets/TEMP/3db2bc1bc643d8914015ce16462122ed0b3155567729589848cd9c19576355fe?"
							class="img-27" />
					</div>
					<div class="div-63">
						Храм Фусими Инари — популярный синтоистский храм в городе Киото,
						Япония. Храм посвящен богу риса - Инари, который является одним из
						самых почитаемых богов в синтоистском пантеоне. © «wikiway.com»
					</div>
				</div>
			</div>
		</div>
	</div>


	<br>

	<div class="headline">
		<h1>ПОПУЛЯРНЫЕ ТУРЫ</h1>
		<div class="div-44"></div>
	</div>

	<div class="row" id="products">
		<?= $data ?>
	</div>


	<!--faq-->
	<div class="accordion">
		<div class="zagfaq">Часто задаваемые вопросы/ FAQ</div>
		<ul>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<div class="zagfaqtwo">Сколько стоит отдых в Японии в 2024-2025 году?</div>
				<p>Стоимость туров в Страну восходящего солнца зависит: <br> <br>
					1. от продолжительности отдыха, уровня отелей, вида транспорта во время экскурсий по Японии; <br>
					2. времени года. В пик туристического сезона цена путевок возрастает на 25-30%; <br>
					3. выбранного туристического маршрута. Индивидуальные туры, составленные по пожеланиям клиентов,
					дороже групповых экскурсий. <br> <br>
					Вы можете не сомневаться в том, что путешествие в Японию от JAPAN отличается выгодной стоимостью и
					высоким уровнем сопутствующих услуг.</p>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<h2>Что нужно для поездки?</h2>
				<p>Организация путешествия в Японию начинается с определения точных дат поездки. По Вашему запросу мы
					предлагаем либо уже готовую программу, либо составляем индивидуальную программу тура в Японию,
					исходя из пожеланий. Стоимость тура в Японию не включает оформление визы. Процесс ее получения
					занимает от 7 до 14 дней. При необходимости партнеры нашей компании подскажут, какие документы нужно
					подать в консульство Японии или сделают это за вас. Существенное преимущество работы с нашей
					компанией – размещение главного офиса компании в Японии. Главная особенность не только в том, что мы
					получаем ваши пожелания напрямую, а в том, что Вы заказываете тур в Японию по выгодной стоимости, не
					переплачивая за услуги посредников. </p>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<h2>Обмен валюты и банки в Японии</h2>
				<p>Денежная единица Японии - йена. Виды монет: 1, 5, 10, 50, 100, 500 йен. Виды банкнот: 1000, 2000,
					5000, 10000 qен. Обмен валюты можно произвести в аэропорту по прилету, а также в большинстве
					отделений банков (существуют также специальные автоматы для обмена валюты). Наиболее выгодные
					условия обмена обычно предлагаются в аэропорту, так как в отелях норма обмена - не более $300 на
					человека в день, а в банках процедура обмена часто сильно формализирована. Распространены основные
					международные карты: Visa International, American Express или Master Card. Банкоматы есть
					практически во всех гостиницах, универмагах, ресторанах и др.
			</li>
		</ul>
	</div>

</div>

</div>

<!--подключение к футеру-->
<?php
		include "footer.php";

		?>