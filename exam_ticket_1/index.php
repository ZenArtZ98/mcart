<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");

?><?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"template2",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "",
		"COMPONENT_TEMPLATE" => "template2",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N"
	)
);?><?php if ($APPLICATION->GetCurPage() != '/exam_ticket_1/'): ?>
<div>
	<h1>Заголовок страницы</h1>
</div>
<hr>
 <?php endif; ?>
<div class="page">
	 <!-- content box -->
	<div class="content-box">
		 <!-- content -->
		<div class="content">
			<div class="cnt">
				<p>
					 «Мебельная компания» осуществляет производство мебели на высококлассном оборудовании с применением минимальной доли ручного труда, что позволяет обеспечить высокое качество нашей продукции. Налажен производственный процесс как массового и индивидуального характера, что с одной стороны позволяет обеспечить постоянную номенклатуру изделий и индивидуальный подход – с другой.
				</p>
				 <!-- index column -->
				<div class="cnt-section index-column">
					<div class="col-wrap">
						 <!-- main actions box -->
						<div class="column main-actions-box">
							<div class="title-block">
								<h2>Новинки</h2>
								<hr>
							</div>
							<div class="items-wrap">
								<div class="item-wrap">
									<div class="item">
										<div class="title-block att">
											 Угловой диван!
										</div>
 <br>
										<div class="inner-block">
 <a href="" class="photo-block"> <img src="/local/templates/exam1/img/new01.jpg" alt=""> </a>
											<div class="text">
 <a href="">Угловой диван "Титаник", с большим выбором расцветок и фактур.</a> <a href="" class="btn-arr"></a>
											</div>
										</div>
									</div>
								</div>
								<div class="item-wrap">
									<div class="item">
										<div class="title-block att">
											 Угловой диван!
										</div>
 <br>
										<div class="inner-block">
 <a href="" class="photo-block"> <img src="/local/templates/exam1/img/new02.jpg" alt=""> </a>
											<div class="text">
 <a href="">Угловой диван "Титаник", с большим выбором расцветок и фактур.</a> <a href="" class="btn-arr"></a>
											</div>
										</div>
									</div>
								</div>
								<div class="item-wrap">
									<div class="item">
										<div class="title-block att">
											 Угловой диван!
										</div>
 <br>
										<div class="inner-block">
 <a href="" class="photo-block"> <img src="/local/templates/exam1/img/new03.jpg" alt=""> </a>
											<div class="text">
 <a href="">Угловой диван "Титаник", с большим выбором расцветок и фактур.</a> <a href="" class="btn-arr"></a>
											</div>
										</div>
									</div>
								</div>
							</div>
 <a href="" class="btn-next">Все новинки</a>
						</div>
						 <!-- /main actions box --> <!-- main news box -->
						<div class="column main-news-box">
							<div class="title-block">
								<h2>Новости</h2>
							</div>
							<hr>
							<div class="items-wrap">
								<div class="item-wrap">
									<div class="item">
										<div class="title">
 <a href="">29 августа 2012</a>
										</div>
										<div class="text">
 <a href="">Поступление лучших офисных кресел из Германии </a>
										</div>
									</div>
								</div>
								<div class="item-wrap">
									<div class="item">
										<div class="title">
 <a href="">29 августа 2012</a>
										</div>
										<div class="text">
 <a href="">Мастер-класс дизайнеров из Италии для производителей мебели </a>
										</div>
									</div>
								</div>
								<div class="item-wrap">
									<div class="item">
										<div class="title">
 <a href="">29 августа 2012</a>
										</div>
										<div class="text">
 <a href="">Поступление лучших офисных кресел из Германии </a>
										</div>
									</div>
								</div>
								<div class="item-wrap">
									<div class="item">
										<div class="title">
 <a href="">29 августа 2012</a>
										</div>
										<div class="text">
 <a href="">Наша дилерская сеть расширилась теперь ассортимент наших товаров доступен в Казани </a>
										</div>
									</div>
								</div>
							</div>
 <a href="" class="btn-next">Все новости</a>
						</div>
						 <!-- /main news box -->
					</div>
				</div>
				 <!-- /index column --> <!-- afisha box -->
				<div class="cnt-section afisha-box">
					<div class="section-title-block">
						<h2 class="second-ttile">Ближайшие мероприятия</h2>
 <a href="" class="btn-next">все мероприятия</a>
					</div>
					<hr>
					<div class="items-wrap">
						<div class="item-wrap">
							<div class="item">
								<div class="title">
 <a href="">29 августа 2012, Москва</a>
								</div>
								<div class="text">
 <a href="">Семинар производителей мебели России и СНГ, Обсуждение тенденций.</a>
								</div>
							</div>
						</div>
						<div class="item-wrap">
							<div class="item">
								<div class="title">
 <a href="">29 августа 2012, Москва</a>
								</div>
								<div class="text">
 <a href="">Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</a>
								</div>
							</div>
						</div>
						<div class="item-wrap">
							<div class="item">
								<div class="title">
 <a href="">29 августа 2012, Москва</a>
								</div>
								<div class="text">
 <a href="">Открытие нового магазина в нашей дилерской сети.</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				 <!-- /afisha box -->
			</div>
		</div>
		 <!-- /content --> <!-- side -->
		<div class="side">
			 <!-- side anonse --><!-- side anonse -->
			<div class="side-block side-anonse">
				<div class="title-block">
 <span class="i i-title01"></span>Полезная информация!
				</div>
				<div class="item">
					<p>
                        <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => "",
		"EDIT_TEMPLATE" => "",
		"AREA_FILE_SUFFIX" => "useful_info",
		"AREA_FILE_RECURSIVE" => "Y"
	),
	false
);?>
<!--						 Клиенты предпочитают все больше эко-материалов.-->
					</p>
				</div>
			</div>
			 <!-- /side anonse --> <!-- side wrap -->
			<div class="side-wrap">
				<div class="item-wrap">
					 <!-- side action -->
					<div class="side-block side-action">
 <img src="/local/templates/exam1/img/side-action-bg.jpg" alt="" class="bg">
						<div class="photo-block">
 <img src="/local/templates/exam1/img/side-action.jpg" alt="">
						</div>
						<div class="text-block">
							<div class="title">
								 Акция!
							</div>
							<p>
								 Мебельная полка всего за 560 <span class="r">a</span>
							</p>
						</div>
 <a href="" class="btn-more">подробнее</a>
					</div>
					 <!-- /side action -->
				</div>
			</div>
			 <!-- /side wrap -->
		</div>
		 <!-- /side -->
	</div>
	 <!-- /content box --><!-- /content box -->
</div>
 <!-- /page -->
<div class="empty">
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>