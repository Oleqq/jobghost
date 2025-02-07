<?php
/**
 * Template Name: Company Search 
 *
 * Template for displaying the front page of the site.
 *
 * @package Jobboard
 */


get_header();
?>



<main>

<section class="breadcrumbs-prev">
    <div class="breadcrumbs-prev__container">
        <div class="breadcrumbs-prev__wrapper"><a href="/">Back to companies</a></div>
    </div>
</section>
<section class="search">
    <div class="container search__container">
        <div class="search__wrapper">
            <div class="hero-search">
                <div class="hero-search__wrapper">
                    <div class="hero-search__dropdown hero-search__dropdown-first">
                        <select name="">
                            <option value="1"> </option>
                            <option value="2"></option>
                            <option value="3"> </option>
                        </select>
                    </div>
                    <div class="hero-search__dropdown hero-search__dropdown-second">
                        <select name="">
                            <option value="1"> </option>
                            <option value="2"></option>
                            <option value="3"> </option>
                        </select>
                    </div>
                    <div class="hero-search__search">
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.56396 12.513C2.56396 15.2055 3.63356 17.7878 5.53744 19.6917C7.44133 21.5955 10.0235 22.6651 12.716 22.6651C15.4085 22.6651 17.9908 21.5955 19.8947 19.6917C21.7985 17.7878 22.8681 15.2055 22.8681 12.513C22.8681 9.82055 21.7985 7.23832 19.8947 5.33444C17.9908 3.43055 15.4085 2.36096 12.716 2.36096C10.0235 2.36096 7.44133 3.43055 5.53744 5.33444C3.63356 7.23832 2.56396 9.82055 2.56396 12.513V12.513Z"
                                stroke="#8C8C9E"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                            <path d="M19.894 19.6909L24.7769 24.5738" stroke="#8C8C9E" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <input type="text" name="" placeholder="Search for companies..." />
                        <button class="ui-button ui-button-orange" type="submit">Search</button>
                    </div>
                </div>
            </div>
            <div class="search-results">
                <div class="search-results__title">Search Results</div>
                <div class="search-results__wrapper">
                    <div class="search-results__result">
                        <div class="col"><img src="<?php echo get_template_directory_uri(); ?>/img/N1.jpg" alt="" /></div>
                        <div class="col flex flex-direction-column col_title">
                            <h4>WEBFLOW</h4>
                            <a href="#">
                                Webflow
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10.5L10 2.5" stroke="#171728" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10 10.0424V2.49999H2.45757" stroke="#171728" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                        <div class="col flex flex-direction-column col__score">
                            <h6>
                                Score
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.75546 2.86815C5.75546 2.18084 6.31264 1.62366 6.99995 1.62366C7.68727 1.62366 8.24445 2.18084 8.24445 2.86815V10.9829C8.24445 11.6702 7.68727 12.2274 6.99995 12.2274C6.31264 12.2274 5.75546 11.6702 5.75546 10.9829V2.86815Z"
                                        stroke="#4A4A5B"
                                        stroke-width="0.583333"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M1.61536 7.73918C1.61536 7.05186 2.17253 6.49468 2.85985 6.49468C3.54716 6.49468 4.10434 7.05186 4.10434 7.73918V10.9829C4.10434 11.6702 3.54716 12.2274 2.85985 12.2274C2.17253 12.2274 1.61536 11.6702 1.61536 10.9829V7.73918Z"
                                        stroke="#4A4A5B"
                                        stroke-width="0.583333"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M9.89556 5.34081C9.89556 4.6535 10.4527 4.09632 11.1401 4.09632C11.8274 4.09632 12.3845 4.6535 12.3845 5.34081V10.9829C12.3845 11.6702 11.8274 12.2274 11.1401 12.2274C10.4527 12.2274 9.89556 11.6702 9.89556 10.9829V5.34081Z"
                                        stroke="#4A4A5B"
                                        stroke-width="0.583333"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </h6>
                            <a href="">click to see </a>
                        </div>
                        <div class="col flex flex-direction-column col__color">
                            <h5>Color<img src="<?php echo get_template_directory_uri(); ?>/img/color wheel 1.png " alt="" /></h5>
                            <a href="">click to see </a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>
<section class="footer-cta">
    <div class="container footer-cta__container">
        <div class="footer-cta__wrapper">
            <div class="footer-cta__title">Join our newsletter and receive the latest updates about jobghost.</div>
            <div class="footer-cta__input">
                <input type="text" placeholder="Subscribe to our newsletter" />
                <button class="ui-button ui-button-orange">Subscribe</button>
            </div>
        </div>
    </div>
</section>



</main>




<?php
get_footer();
?>