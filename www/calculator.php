<?php include("templates/base/header.php") ?>

<div class="container calculator-container">
	
	<?php include("templates/left_sidebar.php") ?>
	<div class="col-md-8 col-sm-8 right-calculator">
		<span class="top-nav-links"><a href="#">Главная</a> / Калькулятор стоимости</span>
		<h1>Калькулятор стоимости</h1>
		<form action="" class="calc-form">
			<div class="row form-part">
				<div class="col-md-6 col-sm-6">
					<div class="text-input">
						<span class="desktop">Вид перевозки</span>
						<select name="" id="">
							<option>Вид перевозки</option>
							<option>Вид перевозки</option>
							<option>Вид перевозки</option>
							<option>Вид перевозки</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row form-part">
				<div class="col-md-6 col-sm-6">
					<div class="select-input">
						<span class="map-mark">Пункт отправления</span>
						<select name="" id="">
							<option>Россия</option>
							<option>Россия</option>
							<option>Россия</option>
						</select>
					</div>
					<div class="select-input">
						<select name="" id="">
							<option>Город</option>
							<option>Город</option>
							<option>Город</option>
						</select>
					</div>
					<div class="text-input">
						<input type="text" placeholder="Улица">
					</div>
					<div class="text-input">
						<input type="text" placeholder="Дом">
					</div>
					<div class="chek-input">
						Забор груза
						<input type="checkbox" >Да
						<input type="checkbox" checked>Нет
					</div>
					<section>
						<article>
							<div class="single"></div>
						</article>
					</section>
					<div class="text-input">
						<input type="text" placeholder="Время">
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="select-input">
						<span class="map-mark">Пункт назначения</span>
						<select name="" id="">
							<option>Россия</option>
							<option>Россия</option>
							<option>Россия</option>
						</select>
					</div>
					<div class="select-input">
						<select name="" id="">
							<option>Город</option>
							<option>Город</option>
							<option>Город</option>
						</select>
					</div>
					<div class="chek-input">
						Доставка до двери
						<input type="checkbox" checked>Да
						<input type="checkbox" >Нет
					</div>
					<div class="text-input">
						<input type="text" placeholder="Улица">
					</div>
					<div class="text-input">
						<input type="text" placeholder="Дом">
					</div>
					<div class="text-input">
						<input type="text" placeholder="ФИО">
					</div>
					<div class="text-input">
						<input type="text" placeholder="Контактный телефон">
					</div>
					<div class="text-input">
						<input type="text" placeholder="Название фирмы">
					</div>
				</div>
			</div>
			<div class="row form-part">
				<div class="col-md-6 col-sm-6">
					<strong>Отправитель</strong>
					<div class="text-input">
						<input type="text" placeholder="ФИО">
					</div>
					<div class="text-input">
						<input type="text" placeholder="Контактный телефон">
					</div>
					<div class="text-input">
						<input type="text" placeholder="Название фирмы">
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<strong>Получатель</strong>
					<div class="text-input">
						<input type="text" placeholder="ФИО">
					</div>
					<div class="text-input">
						<input type="text" placeholder="Контактный телефон">
					</div>
					<div class="text-input">
						<input type="text" placeholder="Название фирмы">
					</div>
				</div>
			</div>
			<div class="row form-part">
				<div class="col-md-6 col-sm-8">
					<span class="param">Параметры груза</span>
					<div class="col-md-6 col-sm-6 inner-sep">
						<div class="select-input">
							<select name="" id="">
								<option>Вес</option>
								<option>Вес</option>
								<option>Вес</option>
							</select>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 inner-sep">
						<div class="select-input">
							<select name="" id="">
								<option>Объем</option>
								<option>Объем</option>
								<option>Объем</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row form-part">
				<div class="col-md-6 col-sm-6">
					<span class="haracter">Характер груза</span>
					<div class="select-input">
						<select name="" id="">
							<option>Обычный</option>
							<option>Обычный</option>
							<option>Обычный</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row form-part">
				<div class="col-md-6 col-sm-6">
					<span class="manager">Ваш менеджер</span>
					<div class="text-input">
						<input type="text">
					</div>
					<div class="submit-input">
						<input type="button" value="СТРАХОВКА"/>
						<strong>Упаковка</strong>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<mark>Если вы уже общались с нашим менеджером, укажите его имя.</mark>
					<div class="select-input">
						<select name="" id="">
							<option>Скотч</option>
							<option>Скотч</option>
							<option>Скотч</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row form-part">
				<div class="col-md-6 col-sm-6 chech-area">
					<span class="bag">Ответственный за оплату груза</span>
					<div class="chek-input check-area">
						<input type="checkbox" checked> Совпадает с отправителем<br>
						<input type="checkbox" checked> Совпадает с получателем<br>
						<input type="checkbox" checked> Совпадает с ответственным за отправку<br>
					</div>
					<div class="text-input">
						<input type="text" placeholder="ФИО">
					</div>
					<div class="text-input">
						<input type="text" placeholder="Контактный телефон">
					</div>
					<div class="text-input">
						<input type="text" placeholder="Название фирмы">
					</div>
					
				</div>
				<div class="col-md-6 col-sm-6">
					<span class="message">Ответственный за отправку</span>
					<div class="text-input">
						<input type="text" placeholder="ФИО">
					</div>
					<div class="text-input">
						<input type="text" placeholder="Контактный телефон">
					</div>
					<div class="text-input">
						<input type="text" placeholder="Название фирмы">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<strong>Дополнительная информация</strong>
					<div class="textarea-input">
						<textarea name="" id=""></textarea>
					</div>
					<div class="submit-input">
						<input type="sumbmit" value="ПОДТВЕРДИТЬ"/>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<?php include("templates/base/footer.php") ?>