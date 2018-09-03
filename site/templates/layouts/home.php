<?php namespace Processwire; ?>
<section class="news">
  <div class="container container_center">
    <h3 class="news__subheading">Добро пожаловать</h3>
    <h2 class="news__heading">Мы гордимся нашими работами</h2>
    <div class="news__wrapper">
      <div class="news__grid">
        <div class="news__cell news__cell_40">
          <div class="news__grid">
            <div class="news__cell">
              <div class="news__item">
                <div class="news-block">
                  <p class="news-block__date">Декабрь 3, 2018</p>
                  <h3 class="news-block__heading">Gilette</h3>
                  <p class="news-block__text">Проснувшись однажды утром после беспокойного сна, Грегор Замза обнаружил.после беспокойного сна...</p>
                </div>
              </div>
            </div>
            <div class="news__cell">
              <div class="news__item">
                <div class="news__img news__img_rect"></div>
                <div class="news-block">
                  <p class="news-block__date">Декабрь 3, 2018</p>
                  <h3 class="news-block__heading">Gilette</h3>
                  <p class="news-block__text">Проснувшись однажды утром после беспокойного сна, Грегор Замза обнаружил.после беспокойного сна...</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="news__cell news__cell_60">
          <div class="news__grid">
            <div class="news__cell">
              <div class="news__item">
                <div class="news__img news__img_big"></div>
              </div>
            </div>
            <div class="news__cell news__cell_60">
              <div class="news__item">
                <div class="news__img"></div>
              </div>
            </div>
            <div class="news__cell news__cell_40">
              <div class="news__item">
                <div class="news__img"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php foreach ($page->blocks as $block): ?>
    <?php bd($block); ?>
    <?php if ($block->repeater_matrix_type == 1): ?>
    <section class="header">
      <div class="header__grid">
        <div class="header__menu menu">
          <div class="container container_center">
            <div class="menu__grid">
              <a href="" class="menu__logo"></a>
              <ul class="menu__nav">
                <li class="menu__item"><a href="" class="menu__link">главная</a></li>
                <li class="menu__item"><a href="" class="menu__link">меню</a></li>
                <li class="menu__item"><a href="" class="menu__link">пункт</a></li>
                <li class="menu__item"><a href="" class="menu__link">пункт</a></li>
                <li class="menu__item"><a href="" class="menu__link">пункт</a></li>
                <li class="menu__item"><a href="" class="menu__link">пункт</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="header__panel">
          <div class="container container_center">
            <h3 class="header__subheading"><?= $block->header_header ?></h3>
            <h2 class="header__heading"><?= $block->header_title ?></h2>
            <p class="header__description"><?= $block->header_subtitle ?></p>
            <div class="header__button-wrapper">
              <a href="" class="header__button">узнать подробнее</a>
              <a href="" class="header__button">меню</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>
    <?php if ($block->repeater_matrix_type == 6): ?>
    <section class="text-block">
  <div class="container container_center">
    <div class="text-block__grid">
      <div class="text-block__cell">
        <div class="text-block__img-wrapper">
          <img src="https://www.fing.edu.uy/inco/grupos/gsi/img/placeholder.png" alt="" class="text-block__img">
        </div>
      </div>
      <div class="text-block__cell">
        <h3 class="text-block__heading">Заголовок этого пункта примерно так</h3>
        <p class="text-block__text">
          Проснувшись однажды утром после беспокойного сна, Грегор Замза обнаружил, что он у себя в постели превратился в страшное насекомое. Лежа на панцирнотвердой спинон видел, стоило ему.
        </p>
        <ul class="text-block__list">
          <li class="text-block__item">
            Проснувшись однажды утром после беспокойного сна, Грегор Замза обнаружил,
          </li>
          <li class="text-block__item">
            Что он у себя в постели превратился в страшное насекомое. Лежа на панцирнотвердой спинон видел, стоило ему.
          </li>
        </ul>
        <p class="text-block__quote">Какая-то подпись</p>
        <p class="text-block__name">Какая-то подпись</p>
      </div>
    </div>
  </div>
</section>
<section class="work">
      <div class="container container_center">
        <h3 class="work__subheading"><?=$block->list_blocks_header?></h3>
        <h2 class="work__heading"><?=$block->list_blocks_title?></h2>
        <p class="work__description"><?=$block->list_blocks_subtitle?></p>
        <div class="work__wrapper">
          <div class="work__grid">
            <?php foreach($block->list_blocks_items as $item): ?>
              <div class="work__cell">
              <div class="work__item work-block">
                <div class="work-block__header">
                  <div class="work-block__img"></div>
                  <p class="work-block__heading"><?=$item->list_blocks_item_header?></p>
                </div>
                <p class="work-block__description"><?=$item->list_blocks_item_description?></p>
                <?=str_replace("<li>", "<li class=\"work-block__item\">", str_replace("<ul>", "<ul class=\"work-block__list\">", $item->list_blocks_item_content))?>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>
    <?php if ($block->repeater_matrix_type == 7): ?>
    <section class="benefits">
      <div class="container container_center">
        <div class="benefits__header">
          <h3 class="benefits__heading"><?=$block->benefits_title?></h3>
          <p class="benefits__description">
              <?=$block->benefits_subtitle?>
          </p>
          <div class="benefits__button-wrapper">
            <a href="" class="benefits__button">получить консультацию</a>
          </div>
        </div>
        <div class="benefits__wrapper">
          <div class="benefits__grid">
            <?php foreach ($block->benefits_items as $item): ?>
              <div class="benefits__cell">
              <div class="benefits__item benefits-block">
                <div class="benefits-block__header">
                  <div class="benefits-block__img"></div>
                  <p class="benefits-block__heading"><?=$item->benefits_item_header?></p>
                </div>
                <p class="benefits-block__text">
                    <?=$item->benefits_item_content?>
                </p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>
    <?php if ($block->repeater_matrix_type == 5): ?>
    <section class="welcome">
      <h3 class="welcome__subheading"><?=$block->lineButton_header?></h3>
      <h2 class="welcome__heading"><?=$block->lineButton_title?></h2>
      <p class="welcome__description"><?=$block->lineButton_subtitle?></p>
      <div class="welcome__button-wrapper">
        <a href="" class="welcome__button">узнать подробнее</a>
      </div>
    </section>
    <?php endif; ?>

<?php endforeach; ?>

<section class="prices">
  <div class="container container_center">
    <h3 class="prices__subheading">Добро пожаловать</h3>
    <h2 class="prices__heading">Мы гордимся нашими работами</h2>
    <p class="prices__description">Проснувшись однажды утром после беспокойного сна, Грегор Замза обнаружил, что он у
      себя в постели превратился.</p>
    <div class="prices__wrapper">
      <div class="prices__grid">
        <div class="prices__cell">
          <div class="prices__item prices-block">
            <h3 class="prices-block__heading">Стандартный</h3>
            <div class="prices-block__img"></div>
            <h3 class="prices-block__price">25 000</h3>
            <ul class="prices-block__list">
              <li class="prices-block__item">Проснувшись однажды утром</li>
              <li class="prices-block__item">Проснувшись утром</li>
              <li class="prices-block__item">Проснувшись утром</li>
              <li class="prices-block__item">Проснувшись однажды</li>
            </ul>
            <div class="prices-block__button-wrapper">
              <a href="" class="prices-block__button">купить тариф</a>
            </div>
          </div>
        </div>
        <div class="prices__cell">
          <div class="prices__item prices-block">
            <h3 class="prices-block__heading">Стандартный</h3>
            <div class="prices-block__img"></div>
            <h3 class="prices-block__price">25 000</h3>
            <ul class="prices-block__list">
              <li class="prices-block__item">Проснувшись однажды утром</li>
              <li class="prices-block__item">Проснувшись утром</li>
              <li class="prices-block__item">Проснувшись утром</li>
              <li class="prices-block__item">Проснувшись однажды</li>
            </ul>
            <div class="prices-block__button-wrapper">
              <a href="" class="prices-block__button">купить тариф</a>
            </div>
          </div>
        </div>
        <div class="prices__cell">
          <div class="prices__item prices-block">
            <h3 class="prices-block__heading">Стандартный</h3>
            <div class="prices-block__img"></div>
            <h3 class="prices-block__price">25 000</h3>
            <ul class="prices-block__list">
              <li class="prices-block__item">Проснувшись однажды утром</li>
              <li class="prices-block__item">Проснувшись утром</li>
              <li class="prices-block__item">Проснувшись однажды</li>
            </ul>
            <div class="prices-block__button-wrapper">
              <a href="" class="prices-block__button">купить тариф</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
