<?php
/**
 * Template Name: Rate Company  
 *
 * Template for displaying the front page of the site.
 *
 * @package Jobboard
 */


get_header();
?>

<main class="rate-company__main">
    <section class="rate-company">
        <div class="container rate-company__container">
            <div class="rate-company__wrapper">
                <div class="rate-company__top">
                    <h3>RATE A COMPANY</h3>
                    <p>CREATE A GHOSTING SCORE</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ghost-2.png" alt="" />
                </div>
                <div class="rate-company-rate rate-company__bottom">
                    <div class="rate-company-rate__top">
                        <p>Company website</p>
                        <input type="url" name="" placeholder="https://company.com" />
                    </div>
                    <div class="rate-company-rate__guide">
                        <h3>RATING SYSTEM</h3>
                        <p>1 = Poor 5 = Fair 10 = Excellent</p>
                    </div>
                    <div class="rate-company-rate__quiz">
                        <div class="rate-company-rate__step">
                            <h4>RESPONSE TIME</h4>
                            <h5>How responsive was the company to your application and inquiries during the interview process?</h5>
                            <div class="slider-container">
                                <div class="numbers">
                                    <span data-value="0">0</span><span data-value="1">1</span><span data-value="2">2</span><span data-value="3">3</span><span data-value="4">4</span><span data-value="5">5</span> <span data-value="6">6</span>
                                    <span data-value="7">7</span><span data-value="8">8</span><span data-value="9">9</span><span data-value="10">10</span>
                                </div>
                                <input id="range-slider" type="range" min="0" max="10" step="1" value="0" />
                                <script src="script.js"></script>
                            </div>
                        </div>
                        <div class="rate-company-rate__step">
                            <h4>INTERVIEW SCHEDULING</h4>
                            <h5>How transparent was the company in communicating details about the application process and interview stages?</h5>
                            <div class="slider-container">
                                <div class="numbers">
                                    <span data-value="0">0</span><span data-value="1">1</span><span data-value="2">2</span><span data-value="3">3</span><span data-value="4">4</span><span data-value="5">5</span> <span data-value="6">6</span>
                                    <span data-value="7">7</span><span data-value="8">8</span><span data-value="9">9</span><span data-value="10">10</span>
                                </div>
                                <input id="range-slider" type="range" min="0" max="10" step="1" value="0" />
                                <script src="script.js"></script>
                            </div>
                        </div>
                        <div class="rate-company-rate__step">
                            <h4>INTERVIEW EFFICIENCY</h4>
                            <h5>How efficient was the company at scheduling their interviews and were they respectful of your time?</h5>
                            <div class="slider-container">
                                <div class="numbers">
                                    <span data-value="0">0</span><span data-value="1">1</span><span data-value="2">2</span><span data-value="3">3</span><span data-value="4">4</span><span data-value="5">5</span> <span data-value="6">6</span>
                                    <span data-value="7">7</span><span data-value="8">8</span><span data-value="9">9</span><span data-value="10">10</span>
                                </div>
                                <input id="range-slider" type="range" min="0" max="10" step="1" value="0" />
                                <script src="script.js"></script>
                            </div>
                        </div>
                        <div class="rate-company-rate__step">
                            <h4>POST INTERVIEW</h4>
                            <h5>Did the company provide timely updates on the status and next steps after the interview?</h5>
                            <div class="slider-container">
                                <div class="numbers">
                                    <span data-value="0">0</span><span data-value="1">1</span><span data-value="2">2</span><span data-value="3">3</span><span data-value="4">4</span><span data-value="5">5</span> <span data-value="6">6</span>
                                    <span data-value="7">7</span><span data-value="8">8</span><span data-value="9">9</span><span data-value="10">10</span>
                                </div>
                                <input id="range-slider" type="range" min="0" max="10" step="1" value="0" />
                                <script src="script.js"></script>
                            </div>
                        </div>
                        <div class="rate-company-rate__step">
                            <h4>COMPANY COURTESY</h4>
                            <h5>How professional were the interviewers in terms of preparedness, courtesy, and respect?</h5>
                            <div class="slider-container">
                                <div class="numbers">
                                    <span data-value="0">0</span><span data-value="1">1</span><span data-value="2">2</span><span data-value="3">3</span><span data-value="4">4</span><span data-value="5">5</span> <span data-value="6">6</span>
                                    <span data-value="7">7</span><span data-value="8">8</span><span data-value="9">9</span><span data-value="10">10</span>
                                </div>
                                <input id="range-slider" type="range" min="0" max="10" step="1" value="0" />
                                <script src="script.js"></script>
                            </div>
                        </div>
                        <div class="rate-company-rate__step">
                            <h4>OVERALL EXPERIENCE</h4>
                            <h5>How would you rate your overall interview experience with the company?</h5>
                            <div class="slider-container">
                                <div class="numbers">
                                    <span data-value="0">0</span><span data-value="1">1</span><span data-value="2">2</span><span data-value="3">3</span><span data-value="4">4</span><span data-value="5">5</span> <span data-value="6">6</span>
                                    <span data-value="7">7</span><span data-value="8">8</span><span data-value="9">9</span><span data-value="10">10</span>
                                </div>
                                <input id="range-slider" type="range" min="0" max="10" step="1" value="0" />
                                <script src="script.js"></script>
                            </div>
                        </div>
                    </div>
                    <div class="rate-company-rate__comment">
                        <p>Comments or review (optional)</p>
                        <textarea name=""> </textarea>
                    </div>
                    <div class="rate-company-rate__submit">
                        <button class="ui-button ui-button-orange" type="submit">Submit your score</button>
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