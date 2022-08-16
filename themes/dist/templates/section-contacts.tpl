{include file="header-two.tpl"}
<main class="main">
      <section class="contacts indent">
            <div class="container">
              <div class="contacts__wrapper">
                <div class="contacts__marker-row">
                  <div class="contacts__start">
                    <h2 class="contacts__title title">{$section.name}</h2>
                    <div class="contacts__link">
                      <a href="tel:{$config.phone|replace:'(':''|replace:')':''|replace:'-':''|replace:' ':''}"><img src="{$section.images.original.url}" alt="phone">{$config.phone|replace:'(':''|replace:')':''|replace:'-':' '}</a>
                      {images_sections assign=sImages section=$section.sectionId orderBy=$sImages.field order=DESC getFrom='gallery'}
                      <a href="mailto:atllc@gmail.com"><img src="{$SITE_URL}/uploads/gallery/big-{$sImages.0.fileName}" alt="email">{$config.feedback_email}</a>
                    </div>
                  </div>
                  <div class="contacts__end">
                      <div class="contacts__end-image">
                        <img src="{$SITE_URL}/uploads/gallery/big-{$sImages.1.fileName}" alt="gps">
                      </div>
                  </div>
                </div>
                <div class="maps__wrapper">
                  <div class="maps__wrapper-info">
                    <div class="maps__wrapper-item">
                      <p>Название</p>
                      <h3 class="maps__wrapper-item-title">{$config.company_name}</h3>
                    </div>
                    <div class="maps__wrapper-item">
                     <p>Адрес</p>
                     <h3 class="maps__wrapper-item-title">{$config.address}</h3>
                    </div>
                    <div class="maps__wrapper-item">
                      <p>Время работы</p>
                      <h3 class="maps__wrapper-item-title">{$config.operating_mode}</h3>
                    </div>
                  </div>
                  <div class="maps__wrapper-maps">
                    <div id="ymap_ctrl_display" style="display: none; width: 100%; height: 100%; position: absolute; background-color: rgba(0, 0, 0, 0.5); z-index: 100; pointer-events: none;">
                      <div style="position: relative; top: 50%; left: 0; right: 0; color: white; text-align: center; font-size: 18px; line-height: 25px; pointer-events: none;">Чтобы изменить масштаб, прокручивайте карту, удерживая клавишу Ctrl.</div>
                    </div>
                    <div id="YMapsID"></div>
                  </div>
                </div>
              </div>
            </div>
      </section>
  </main>

{include file="footer-maps.tpl"}
