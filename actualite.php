<?php
include('./views/commons/doc_header.php');
include('./views/commons/header.php');
?>
<div class="wrapper">
  <main class="main">
    <section class="pg-first-face">
      <div class="container">
        <div class="pg-first-face__inner">
          <div class="pg-first-face__blackImg wow animate__animated animate__backInDown">
            <img src="./assets/images/svg/finab_head.svg" class="finab-head" alt="finab-head">
          </div>
          <h1 class="h1 pg-title">ACTUALITES</h1>
        </div>
      </div>
    </section>

    <section class="partner-section section-default-therm actualite-section">
      <div class="container">
        <div class="partner-section__inner actualite-inner">
          <h2 class="actualite-inner__h2">NOTRE ACTUALITES</h2>
          <hr class="actualite-inner_hr">
          <p class="actualite-inner__text">Tout ce que vous devez savoir sur finab</p>
        </div>

        <div class="actualite__content">
          <div class="actualite__content__filter">
            <div class="actualite__content__filter_search">
             <!-- <p class="actualite__content__filter__search__p">Recherche par date</p>-->
              <div class="search-container">
                <i class="icon icon-search" class="search-icon"></i>
                <input type="search" class="" placeholder="Recherche..." id="search-input"/>
              </div>
            </div>
            <!--
            <div class="actualite__content__date-filter">
              <p class="actualite__content__date-filter__p">Filtrage par période</p>
              <div class="date-input">
                <i class="icon icon-calendar"></i>
                <input type="text" class="actualite__content__date-filter__input" placeholder="Début" id="end" name="trip-end">
              </div>
            </div>
-->
          </div>

          <div class="actualite__content__news_paginate">
            <div class="actualite__content__news" id="news-container">
              <a href="#" class="single_new">
                <div class="single_new_img">
                  <img src="./assets/images/actualite/new.png" />
                </div>
                <p class="single_new_text">
                  Partenariat entre la structure bénin excellence nariat entre la structure la structure bénin excellence nariat bén...
                </p>
                <div class="single_new_date">
                  <i class="icon icon-calendar"></i>
                  <p class="single_new_date_p">23 Janvier 2023</p>
                </div>
              </a>
            </div>
            <div class="pagination-container" id="pagination-container">
            
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
<?php
include('./views/commons/footer.php');
include('./views/commons/doc_footer.php');
?>