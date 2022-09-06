{fetch_section assign=secondWorld section=998}
{fetch_articles assign=slides section=$secondWorld.sectionId status='visible' type_content="products"}


<section class="section section-features">
	<div class="accordion">
		<div class="row m-0 h-100">
			{foreach from=$slides item=slide key=key name=name}
				<div class="accordion-item col {if $slide.articleId == 1128 }accordion-characters curzr-hover{/if}">
					<div class="accordion-item-bg">
						<img src="{$slide.images.original.url}" alt="">
						{bracket_regex from=$slide.content}
						{if $slide.articleId == 1128}
							<video src="{$THEME_URL}/video/male.mp4" pip="false" preload muted loop></video>
							<video src="{$THEME_URL}/video/female.mp4" pip="false" preload muted loop></video>
							<video src="{$THEME_URL}/video/helmet.mp4" pip="false" preload muted loop></video>
							<video src="{$THEME_URL}/video/glasses.mp4" pip="false" preload muted loop></video>
						{/if}
					</div>
					<div class="accordion-next">
						Вперед
					</div>
					<div class="accordion-item-info">
						<div class="accordion-item-title">
							{$slide.title}
						</div>
						<div class="accordion-item-description">{$slide.summary nofilter}</div>
					</div>
				</div>
			{/foreach}


			{* <div class="accordion-item col">
					<div class="accordion-item-bg">
						<img src="images/accordion-2.jpg" alt="">
					</div>
					<div class="accordion-prev">
						Назад
					</div>
					<div class="accordion-next">
						Вперед
					</div>
					<div class="accordion-item-info">
						<div class="accordion-item-title">
							NFT персонажи
						</div>
						<div class="accordion-item-description">
							При первом входе в игру мы сможете создать своего уникального персонажа используя
							современные технологии вы сможете добиться реалистичного качества лица, мимику и многое
							другое. Вы сможете покупать уникальные NFT аксессуары, одежду и прочие атрибуты которые вы
							захотите.
							Вы можете создать как человека, так и любое существо которое будет отображать вас в
							метавселенной SecondWorld
						</div>
					</div>
				</div> *}
			{* <div class="accordion-item col">
					<div class="accordion-item-bg">
						<img src="images/accordion-3.jpg" alt="">
					</div>
					<div class="accordion-prev">
						Назад
					</div>
					<div class="accordion-next">
						Вперед
					</div>
					<div class="accordion-item-info">
						<div class="accordion-item-title">
							NFT Здания
						</div>
						<div class="accordion-item-description">
							В метавселенной SecondWorld существуют десятки экономических зданий - жилые дома, офисные
							здания, заводы, госпитали, пожарные и полицеские участки, казино, футбольный стадион,
							кинотеатры и многое другое.
							Каждое здание является физически реальным, вы сможете оформить каждый этаж, квартиру,
							обставить каждый милиметр вашей собственности как вы захотите.
							Также вы можете создавать своё здание или объект так как вы захотите - от произведения
							исскуства до здания будущего. Вы ограничены только вашей фантазией!
						</div>
					</div>
				</div> *}
			{* <div class="accordion-item col">
					<div class="accordion-item-bg">
						<img src="images/accordion-4.jpg" alt="">
					</div>
					<div class="accordion-prev">
						Назад
					</div>
					<div class="accordion-item-info">
						<div class="accordion-item-title">
							Заходи и зарабатывай!
						</div>
						<div class="accordion-item-description">
							Не хотите заниматься финансовой частью, не умеете играть? Это не проблема! Заходите каждый
							день, выполняйте уникальные задания и зарабатывайте деньги! SecondWorld первый проект цель
							которого подготовить пользователей к наступающему будущему Web3.0
						</div>
					</div>
				</div> *}
		</div>
	</div>
</section>