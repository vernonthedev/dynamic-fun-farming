@extends('home.base')

@section('content')

        <div class="l-main">
            <div class="o-component-area">
                <div class="o-hero  o-hero--main">
                    <div class="o-hero__main">
                        <div class="o-hero__video">
                            <div class="c-video">
                                <div class="c-video__placeholder">
                                    <div
                                        class="c-video__iframe  js-youtube-player"
                                        loading="lazy"
                                        data-youtube-link="#"
                                        data-auto-play="1"
                                        data-disable-kb="1"
                                        data-controls="0"
                                        data-loop="1"
                                        id="home-hero-video"
                                    >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="o-hero__title-area" data-kal="slide-up">
                            <h1 class="o-hero__title">
                                Plan your
                                <br>
                                farmtastic
                                <br>
                                day full of fun
                                <br>
                                activities
                                <br>

                            </h1>
                            <a class="c-button     " href="activiteiten.php">
                                <span class="c-button__text">View Activities</span>
                            </a>
                            <div class="o-hero__rating">
                                <a class="c-rating  c-rating--boxed" target="_blank" href="#">
                                    <div class="c-rating__stars">
                                        <span class="c-star  c-star--full">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="20"
                                                height="20"
                                                viewbox="0 0 24 24"
                                            >
                                                <g fill="none" fill-rule="evenodd">
                                                    <path fill="#e9ebf5" d="M12 18.27l4.151 2.505a1 1 0 0 0 1.49-1.083L16.54 14.97l3.669-3.178a1 1 0 0 0-.57-1.752l-4.829-.41-1.89-4.458a1 1 0 0 0-1.84 0L9.19 9.63l-4.828.41a1 1 0 0 0-.57 1.752L7.46 14.97l-1.102 4.722a1 1 0 0 0 1.491 1.083L12 18.27z"/>
                                                    <path class="full-star" fill="currentColor" d="M12 18.27l4.151 2.505a1 1 0 0 0 1.49-1.083L16.54 14.97l3.669-3.178a1 1 0 0 0-.57-1.752l-4.829-.41-1.89-4.458a1 1 0 0 0-1.84 0L9.19 9.63l-4.828.41a1 1 0 0 0-.57 1.752L7.46 14.97l-1.102 4.722a1 1 0 0 0 1.491 1.083L12 18.27z"/>
                                                    <path class="half-star" fill="none" d="M12 18.27l4.151 2.505a1 1 0 0 0 1.49-1.083L16.54 14.97 9.19 9.63l-4.828.41a1 1 0 0 0-.57 1.752L7.46 14.97l-1.102 4.722a1 1 0 0 0 1.491 1.083L12 18.27z"/>
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="c-star  c-star--full">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="20"
                                                height="20"
                                                viewbox="0 0 24 24"
                                            >
                                                <g fill="none" fill-rule="evenodd">
                                                    <path fill="#e9ebf5" d="M12 18.27l4.151 2.505a1 1 0 0 0 1.49-1.083L16.54 14.97l3.669-3.178a1 1 0 0 0-.57-1.752l-4.829-.41-1.89-4.458a1 1 0 0 0-1.84 0L9.19 9.63l-4.828.41a1 1 0 0 0-.57 1.752L7.46 14.97l-1.102 4.722a1 1 0 0 0 1.491 1.083L12 18.27z"/>
                                                    <path class="full-star" fill="currentColor" d="M12 18.27l4.151 2.505a1 1 0 0 0 1.49-1.083L16.54 14.97l3.669-3.178a1 1 0 0 0-.57-1.752l-4.829-.41-1.89-4.458a1 1 0 0 0-1.84 0L9.19 9.63l-4.828.41a1 1 0 0 0-.57 1.752L7.46 14.97l-1.102 4.722a1 1 0 0 0 1.491 1.083L12 18.27z"/>
                                                    <path class="half-star" fill="none" d="M12 18.27l4.151 2.505a1 1 0 0 0 1.49-1.083L16.54 14.97 9.19 9.63l-4.828.41a1 1 0 0 0-.57 1.752L7.46 14.97l-1.102 4.722a1 1 0 0 0 1.491 1.083L12 18.27z"/>
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="c-star  c-star--full">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="20"
                                                height="20"
                                                viewbox="0 0 24 24"
                                            >
                                                <g fill="none" fill-rule="evenodd">
                                                    <path fill="#e9ebf5" d="M12 18.27l4.151 2.505a1 1 0 0 0 1.49-1.083L16.54 14.97l3.669-3.178a1 1 0 0 0-.57-1.752l-4.829-.41-1.89-4.458a1 1 0 0 0-1.84 0L9.19 9.63l-4.828.41a1 1 0 0 0-.57 1.752L7.46 14.97l-1.102 4.722a1 1 0 0 0 1.491 1.083L12 18.27z"/>
                                                    <path class="full-star" fill="currentColor" d="M12 18.27l4.151 2.505a1 1 0 0 0 1.49-1.083L16.54 14.97l3.669-3.178a1 1 0 0 0-.57-1.752l-4.829-.41-1.89-4.458a1 1 0 0 0-1.84 0L9.19 9.63l-4.828.41a1 1 0 0 0-.57 1.752L7.46 14.97l-1.102 4.722a1 1 0 0 0 1.491 1.083L12 18.27z"/>
                                                    <path class="half-star" fill="none" d="M12 18.27l4.151 2.505a1 1 0 0 0 1.49-1.083L16.54 14.97 9.19 9.63l-4.828.41a1 1 0 0 0-.57 1.752L7.46 14.97l-1.102 4.722a1 1 0 0 0 1.491 1.083L12 18.27z"/>
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="c-star  c-star--full">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="20"
                                                height="20"
                                                viewbox="0 0 24 24"
                                            >
                                                <g fill="none" fill-rule="evenodd">
                                                    <path fill="#e9ebf5" d="M12 18.27l4.151 2.505a1 1 0 0 0 1.49-1.083L16.54 14.97l3.669-3.178a1 1 0 0 0-.57-1.752l-4.829-.41-1.89-4.458a1 1 0 0 0-1.84 0L9.19 9.63l-4.828.41a1 1 0 0 0-.57 1.752L7.46 14.97l-1.102 4.722a1 1 0 0 0 1.491 1.083L12 18.27z"/>
                                                    <path class="full-star" fill="currentColor" d="M12 18.27l4.151 2.505a1 1 0 0 0 1.49-1.083L16.54 14.97l3.669-3.178a1 1 0 0 0-.57-1.752l-4.829-.41-1.89-4.458a1 1 0 0 0-1.84 0L9.19 9.63l-4.828.41a1 1 0 0 0-.57 1.752L7.46 14.97l-1.102 4.722a1 1 0 0 0 1.491 1.083L12 18.27z"/>
                                                    <path class="half-star" fill="none" d="M12 18.27l4.151 2.505a1 1 0 0 0 1.49-1.083L16.54 14.97 9.19 9.63l-4.828.41a1 1 0 0 0-.57 1.752L7.46 14.97l-1.102 4.722a1 1 0 0 0 1.491 1.083L12 18.27z"/>
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="c-star  c-star--half">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="20"
                                                height="20"
                                                viewbox="0 0 24 24"
                                            >
                                                <g fill="none" fill-rule="evenodd">
                                                    <path fill="#e9ebf5" d="M12 18.27l4.151 2.505a1 1 0 0 0 1.49-1.083L16.54 14.97l3.669-3.178a1 1 0 0 0-.57-1.752l-4.829-.41-1.89-4.458a1 1 0 0 0-1.84 0L9.19 9.63l-4.828.41a1 1 0 0 0-.57 1.752L7.46 14.97l-1.102 4.722a1 1 0 0 0 1.491 1.083L12 18.27z"/>
                                                    <path class="full-star" fill="currentColor" d="M12 18.27l4.151 2.505a1 1 0 0 0 1.49-1.083L16.54 14.97l3.669-3.178a1 1 0 0 0-.57-1.752l-4.829-.41-1.89-4.458a1 1 0 0 0-1.84 0L9.19 9.63l-4.828.41a1 1 0 0 0-.57 1.752L7.46 14.97l-1.102 4.722a1 1 0 0 0 1.491 1.083L12 18.27z"/>
                                                    <path class="half-star" fill="none" d="M12 18.27l4.151 2.505a1 1 0 0 0 1.49-1.083L16.54 14.97 9.19 9.63l-4.828.41a1 1 0 0 0-.57 1.752L7.46 14.97l-1.102 4.722a1 1 0 0 0 1.491 1.083L12 18.27z"/>
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                    <span class="c-rating__score">
                                        <span class="c-rating__points">9.4</span>
                                        <span class="c-rating__max">/ 10</span>
                                    </span>
                                    <span class="c-rating__reviews">1095 reviews</span>
                                    <span class="c-rating__platform">via Google</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-slant-top u-mb-neg-slant-height u-bg-primary--500">
                    <div class="l-contain  o-component-area__component">
                        <div class="o-certainties" data-kal="slide-up">
                            <figure class="o-certainties__badge">
                                <img
                                    src="img/fun_farming_log.png"
                                    alt="7 zekerheden badge"
                                    width="400px"
                                    height="400px"
                                >
                            </figure>
                            <div>
                                <h2 class="o-certainties__heading">
                                    Enjoy your next team event
                                    <span class="o-certainties__heading-moooh">with fun surprises</span>
                                </h2>
                                <h2 class="o-certainties__heading o-certainties__heading--mobile">
                                    Enjoy your next team event
                                    <span class="o-certainties__heading-moooh">with fun surprises</span>
                                </h2>
                                <ul class="u-list--clean">
                                    <li class="o-certainties__list-item">Everyone's Welcome</li>
                                    <li class="o-certainties__list-item">Organized for maximum enjoyment</li>
                                    <li class="o-certainties__list-item">Connect and learn from each other</li>
                                    <li class="o-certainties__list-item">Exciting activities with enthusiastic staff</li>
                                    <li class="o-certainties__list-item">Get more than you expect</li>
                                    <li class="o-certainties__list-item">Any issues? We'll fix them</li>
                                    <li class="o-certainties__list-item">Enjoy local Ugandan farm food options</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-slant-top-reversed u-mt-neg-slant-height   u-bg-neutral--0"></div>
                <div id="component-item-2" data-type="videoText" class="u-mb-neg-slant-height

          u-slant-top

          ">
                    <div class="o-component-area__component l-contain  l-contain--wide ">
                        <div class="o-vt__main  ">
                            <div class="o-vt__video">
                                <div class="c-video">
                                    <div class="c-video__placeholder">
                                        <div>
                                            <img src="img/webimgs/foodland_img10.jpg" alt="potatoes being packed from fun farming uganda" style="border-radius:20px;"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="o-vt__content  s-text">

                                <h2>Discover "Who is Cow-rupted?"</h2>
<p>
    Have a great time with this fun activity and find out who might be playing tricks in your team.
    <br>
    <br>
    "Who is Cow-rupted" is a fun and interactive program set in a farm-themed environment, offering various games and opportunities to connect with each other. It's perfect for an enjoyable evening or after-work program!
</p>


                                <a class="c-button  c-button--big    " href="#">
                                    <span class="c-button__text">We're going to mole!</span>
                                    <i class="c-button__icon">
                                        <svg width="7" height="10">
                                            <use href="img/icon-arrowRight.svg#arrowRight"></use>
                                        </svg>
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="o-availability__footer u-mb-neg-slant-height  u-bg-secondary--900">
                    <div class="o-availability__footer-content ">
                        <div id="component-item-1" data-type="textImage" class="u-mb-neg-slant-height
              ">
        <div class="o-component-area__component l-contain  l-contain--wide ">

        <div class="l-double  l-double--wide   u-spacing-pt6">
            <div class="l-double__left">
                                <img class="is-kal-end" loading="lazy" data-kal="slide-right" src="img/webimgs/Farm-staff.jpeg" alt="Fun farming uganda activities " style="border-radius:20px;">
                        </div>
            <div class="l-double__right s-text s-text--on-dark is-kal-end" data-kal="slide-up">

                <h2>Welcome to FunFarming</h2>
<h3>Perfect for team building, bachelor's day, events, and parties</h3>
<p>At FunFarming, our activities bring immense joy. We specialize in fun and entertainment, offering fantastic team building events, exciting bachelor's days, and amazing parties filled with enjoyable and challenging activities. Plus, enjoy the refreshing farm ambiance – it's on the house!</p>



            </div>
        </div>

        </div>
    </div>                            </div>

                </div>



                    <div class="o-component-area__component l-contain  l-contain--wide ">
                        <div class="o-vt__main  ">
                            <div class="o-vt__video">
                                <div class="c-video">

                                        <div>
                                        <img class="is-kal-end" loading="lazy" data-kal="slide-right" src="img/webimgs/Tractors-ploughing.jpeg" alt="Fun farming uganda farm team builders" style="border-radius:20px;" width="100%">
                                        </div>

                                </div>
                            </div>
                            <div class="o-vt__content s-text">
                                <h2>A farmtastic team building for a stronger herd feeling</h2>
                                <p>Cow-municating. Cow-nnecting. Cow-ning. Those are the three keywords at FarmFun. With the Farm Games and Farm Expert Games, herds of cow-lleagues or friends are served a fun mix of thinking and doing to strengthen team spirit. Whether a cow-mpetitive or calm in nature. A young foal or an old hand in the field. Each of our games is made with the idea that everyone will moo about this team event for a long time.</p>
                                <a class="c-button c-button--big" href="https://reserveren.farmfun.be/over-ons">
                                    <span class="c-button__text">More about us</span>
                                    <i class="c-button__icon">
                                        <svg width="7" height="10">
                                            <use href="img/icon-arrowRight.svg#arrowRight"></use>
                                        </svg>
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="component-item-5" data-type="textImage" class="u-mb-neg-slant-height

          u-slant-top

          ">
                    <div class="o-component-area__component l-contain  l-contain--wide ">
                        <div class="l-double  l-double--wide  l-double--reversed   u-spacing-pt6">
                            <div class="l-double__left">
                                <img
                                    class=""
                                    loading="lazy"
                                    width="50%"
                                    data-kal="slide-left"
                                    src="img/webimgs/david-holding-goat.jpg"
                                    alt="Farmer David holding a farm goat"

                                    style="border-radius: 20px;"
                                >
                            </div>
                            <div class="l-double__right s-text" data-kal="slide-up">
                                <h2>Moo towards us for customized advice</h2>
                                <p>Gathering the horns? Our cow-league David is ready to advise you so that you'll reap applause for this team-building.</p>
                                <p>
                                    <strong>Easily schedule a conversation</strong> and feel the Cowzy Farm Vibes roaring through your herd.
                                </p>
                                <a class="c-button c-button--big" href="https://www.calendly.com/farmfun/kennismakingsgesprek-teambuilding-farmfun?back=1&amp;month=2023-02">
                                    <span class="c-button__text">Schedule Conversation</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div id="component-item-6" data-type="testimonialLogos" class="u-mb-neg-slant-height

          u-slant-top

          ">
                    <div class="o-component-area__component l-contain ">
                        <div class="o-testimonial">
                            <div class="c-customer-logo-slider c-logos js-customer-logo-slider" data-has-swipe-events="true">
                                <div class="c-customer-logo-slider__container  js-customer-logo-slide-container">
                                    <div class="c-customer-logo-slider__item   c-customer-logo-slider__item--position-1   js-customer-logo-slide" data-slide-id="0" data-logo-id="1033">
                                        <div class="c-customer-logo-slider__logo" style="background-image: url('uploads/component-uploads/3-056978500-1695217432_small.png');"></div>
                                    </div>
                                    <div class="c-customer-logo-slider__item   c-customer-logo-slider__item--position-2   js-customer-logo-slide" data-slide-id="1" data-logo-id="1034">
                                        <div class="c-customer-logo-slider__logo" style="background-image: url('uploads/component-uploads/ontwerp-zonder-titel-4-021284300-1695217445_small.png');"></div>
                                    </div>
                                    <div class="c-customer-logo-slider__item   c-customer-logo-slider__item--position-3   js-customer-logo-slide" data-slide-id="2" data-logo-id="1035">
                                        <div class="c-customer-logo-slider__logo" style="background-image: url('uploads/component-uploads/4-052870100-1695217451_small.png');"></div>
                                    </div>
                                    <div class="c-customer-logo-slider__item   c-customer-logo-slider__item--position-4   js-customer-logo-slide" data-slide-id="3" data-logo-id="1036">
                                        <div class="c-customer-logo-slider__logo" style="background-image: url('uploads/component-uploads/5-098053900-1695217456_small.png');"></div>
                                    </div>
                                    <div class="c-customer-logo-slider__item   c-customer-logo-slider__item--position-5   js-customer-logo-slide" data-slide-id="4" data-logo-id="1037">
                                        <div class="c-customer-logo-slider__logo" style="background-image: url('uploads/component-uploads/6-024466700-1695217464_small.png');"></div>
                                    </div>
                                    <div class="c-customer-logo-slider__item   is-hidden   js-customer-logo-slide" data-slide-id="5" data-logo-id="1038">
                                        <div class="c-customer-logo-slider__logo" style="background-image: url('uploads/component-uploads/7-093321300-1695217472_small.png');"></div>
                                    </div>
                                    <div class="c-customer-logo-slider__item   is-hidden   js-customer-logo-slide" data-slide-id="6" data-logo-id="1039">
                                        <div class="c-customer-logo-slider__logo" style="background-image: url('uploads/component-uploads/8-067892500-1695217478_small.png');"></div>
                                    </div>
                                    <div class="c-customer-logo-slider__item   is-hidden   js-customer-logo-slide" data-slide-id="7" data-logo-id="1040">
                                        <div class="c-customer-logo-slider__logo" style="background-image: url('uploads/component-uploads/9-048441700-1695217485_small.png');"></div>
                                    </div>
                                    <div class="c-customer-logo-slider__item   is-hidden   js-customer-logo-slide" data-slide-id="8" data-logo-id="1041">
                                        <div class="c-customer-logo-slider__logo" style="background-image: url('uploads/component-uploads/10-080293000-1695217490_small.png');"></div>
                                    </div>
                                    <div class="c-customer-logo-slider__item   is-hidden   js-customer-logo-slide" data-slide-id="9" data-logo-id="1042">
                                        <div class="c-customer-logo-slider__logo" style="background-image: url('uploads/component-uploads/11-042299700-1695217500_small.png');"></div>
                                    </div>
                                    <div class="c-customer-logo-slider__item   is-hidden   js-customer-logo-slide" data-slide-id="10" data-logo-id="1043">
                                        <div class="c-customer-logo-slider__logo" style="background-image: url('uploads/component-uploads/12-017885200-1695217520_small.png');"></div>
                                    </div>
                                    <div class="c-customer-logo-slider__item   is-hidden   js-customer-logo-slide" data-slide-id="11" data-logo-id="1044">
                                        <div class="c-customer-logo-slider__logo" style="background-image: url('uploads/component-uploads/ontwerp-zonder-titel-2-048386700-1695217526_small.png');"></div>
                                    </div>
                                    <div class="c-customer-logo-slider__item   is-hidden   js-customer-logo-slide" data-slide-id="12" data-logo-id="1045">
                                        <div class="c-customer-logo-slider__logo" style="background-image: url('uploads/component-uploads/13-024877000-1695217537_small.png');"></div>
                                    </div>
                                    <div class="c-customer-logo-slider__item   is-hidden   js-customer-logo-slide" data-slide-id="13" data-logo-id="1046">
                                        <div class="c-customer-logo-slider__logo" style="background-image: url('uploads/component-uploads/611-6117740-p-g-logo-white-png-p-g-logo-049200700-1695217543_small.png');"></div>
                                    </div>
                                    <div class="c-customer-logo-slider__placeholder"></div>
                                </div>
                                <button class="c-customer-logo-slider__button  previous  js-slider-button" title="Previous">
                                    <svg width="7" height="10">
                                        <use href="img/icon-arrowLeft.svg#arrowLeft"></use>
                                    </svg>
                                </button>
                                <button class="c-customer-logo-slider__button  next  js-slider-button" title="Next">
                                    <svg width="7" height="10">
                                        <use href="img/icon-arrowRight.svg#arrowRight"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="component-item-7" data-type="topReviews" class="u-mb-neg-slant-height

          u-slant-top

          ">
                    <div class="o-component-area__component l-contain ">
                        <div class="o-review-slider js-review-slider">
                            <reviews-swiper :reviews="[{&quot;location&quot;:&quot;FarmFun Essen&quot;,&quot;rating&quot;:10,&quot;date&quot;:&quot;2023-10-28&quot;,&quot;authorName&quot;:&quot;Lieve&quot;,&quot;headline&quot;:&quot;Topteambuilding dankzij Gitte en Gert&quot;,&quot;text&quot;:&quot;Stromende plensregen. En daar wachtte de gezellige warme schuur met koffie en een warm onthaal. We waren heel blij dat er deels werd overgestapt naar een winterprogramma.\nHet sas echt een topdag, beetje concurrentie maar niet te veel. De sfeer was goed.  De spelen waren uitdagend maar niet TE. Iedereen kon meedoen.  De maaltijd was ook lekker en meer dan voldoende.&quot;},{&quot;location&quot;:&quot;FarmFun Poperinge&quot;,&quot;rating&quot;:10,&quot;date&quot;:&quot;2023-10-27&quot;,&quot;authorName&quot;:&quot;Bjorn&quot;,&quot;headline&quot;:&quot;Niettegenstaande het wisselvallige weer, absoluut een zonnige teambuilding ervaren.&quot;,&quot;text&quot;:&quot;Heerlijk ontbijt met liefde geserveerd (inclusief spek met eieren)\nOriginele opdrachten, enthousiast begeleid.\nLekkere lunch (bbq) en heel vlotte bediening, steeds met de smile.\nWie eens op zoek is naar iets anders in de Westhoek, m.a.w een originele teamactiviteit, the place to be!&quot;},{&quot;location&quot;:&quot;FarmFun Merchtem&quot;,&quot;rating&quot;:10,&quot;date&quot;:&quot;2023-10-25&quot;,&quot;authorName&quot;:&quot;Leila&quot;,&quot;headline&quot;:&quot;Feno-meuh-naal!&quot;,&quot;text&quot;:&quot;We kwamen naar FarmFun voor een mini-teambuilding met onze partners, en het was super! Alles werd met zorg en toewijding geregeld, en het was duidelijk dat alle medewerkers dit met hart en ziel doen.\n\nDe gezellige ruimte voor onthaal en lunch gaf de nodige rust tussen de actieve farm games door. Ook ontbijt en lunch waren dik in orde.\n\nIk kreeg van onze partners nadien h\u00e9\u00e9l enthousiaste feedback, dus... missie geslaagd!\n\nTrouwens, de woordspelingen doorheen de dag en in alle communicatie, die zijn voor mij de kers op de taart - love it :)&quot;},{&quot;location&quot;:&quot;FarmFun Essen&quot;,&quot;rating&quot;:10,&quot;date&quot;:&quot;2023-10-24&quot;,&quot;authorName&quot;:&quot;Romee&quot;,&quot;headline&quot;:&quot;Een personeelsdag om nooit meer te vergeten&quot;,&quot;text&quot;:&quot;We hebben een farmtastische personeelsdag gehad. De spellen zijn leuk en vari\u00ebren van puzzels maken tot je collega tot moes slaan met een zak hooi. Naast de spellen en de enthousiaste begeleiding bevindt FarmFun Essen zich ook op het mooie platteland en zijn er meer dan genoeg mogelijkheden om te pauzeren, een lekker drankje te drinken of te genieten van een van de lokale producten. Wij genieten nog even na :)\nEen absolute aanrader!\n\nP.S.: De dag werd nog n\u00e9t ietsje beter door de schattige kittens op de boerderij&quot;},{&quot;location&quot;:&quot;FarmFun Merchtem&quot;,&quot;rating&quot;:10,&quot;date&quot;:&quot;2023-10-24&quot;,&quot;authorName&quot;:&quot;Wendy&quot;,&quot;headline&quot;:&quot;Zeker bij de top van de teambuildings uit mijn carri\u00e8re!&quot;,&quot;text&quot;:&quot;De boerderij zelf: zeer verzorgd, mooie locatie met smaakvolle inrichting van de verzamelplek waar ook gelunched wordt, met een prachtig zicht op het \u201cgroen\u201d.\nHeel afwisselende opdrachten, soms denkwerk, soms meer fysieke inspanningen, waarvan een aantal in de stallen zelf naast de koeien of kalfjes zodat we toch nog steeds herinnerd werden aan de boerderij.\nHet geheel toch laagdrempelig gehouden zodat iedereen zich op zijn gemak kan voelen, teamspirit staat centraal.\nBegeleiding top! Past de teambuilding perfect aan, aan de groep (wij waren een heel klein groepje waardoor niet alle opdrachten aan bod konden komen en soms werden aangepast).\nLunch achteraf, zeer verzorgd en gevarieerd, top als afsluiter!.&quot;}]"/>
                        </div>
                    </div>
                </div>
                <div id="component-item-8" data-type="button" class="u-mb-neg-slant-height

          u-slant-top

          ">
          <div class="o-component-area__component l-contain">
            <div class="o-button-component o-button-component--align-center">
                <h2 class="u-spacing-mb2">Create your ideal team-building event</h2>
                <div class="u-spacing-mb2">
                    <p>Choose your ideal activity, add catering, check availability, instantly generate your quote, or book online. We'll get the exact number of participants later.</p>
                </div>
                <a class="c-button u-spacing-mb8" href="activiteiten.php">
                    <span class="c-button__text">Plan easily and quickly</span>
                </a>
            </div>
        </div>
                </div>
                <div id="component-item-9" data-type="locations" class="
          u-mb-neg-slant-height
          u-slant-top                             ">
                    <div class="o-component-area__component">
                        <div class="o-locations js-locations  o-locations--slant ">
                            <div class="o-locations__intro">
                                <div class="s-text u-spacing-pt8" data-kal="slide-up">
                                    <h2 class="">There's always a FarmFun near you</h2>
<p>
    Fun Farm is located in Uganda and deeply rooted in the Butalangu province, Nakaseke District, who rules the roost at each of the farms? Our dairy cows! While they watch the hilarious antics of you and your cow-leagues or friends, our Chief Executive Farmers and game leaders provide you with a farmtastic day.
</p>
<h3>our location</h3>
                                    <ul class="o-locations__list">
                                        <li class="o-locations__list-item">
                                            <button data-location-id="1" class="o-locations__list-item-button js-locations-list-item">
                                                FunFarm  Nakaseke                              (UG)
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="o-locations__map  u-spacing-mt8" data-kal="slide-up">
                                    <div class="c-map">
                                        <img
                                            class="c-map__background"
                                            loading="lazy"
                                            src="img/locations/Nakaseke_District_in_Uganda.svg.png"
                                            alt=""
                              >
                                    </div>
                                </div>
                            </div>
                            <div class="o-locations__cards js-locations-cards" data-kal="slide-up">
                                <div hidden class="o-locations__card hidden js-locations-card" data-location-id="1">
                                    <img
                                        class="o-locations__card-image u-clip-path"
                                        loading="lazy"
                                        data-id="clip-path-image-3"
                                        src="img/webimgs/fun-farm-image.jpg"
                                        alt=""
                                    >
                                    <div class="o-locations__card-content">
                                        <div class="o-locations__card-left">
                                            <h3 class="o-locations__card-title">Fun Farming Buffet</h3>
<p class="s-text s-text--on-dark">
    For fantastic team-building events, bachelor/bachelorette parties, and Ugandan hospitality, you're at the right place on the farm of Fun Farm Uganda
</p>
                                            <a class="c-button u-spacing-mt3" href="locaties/limburg/farmfun-bocholt.html">
                                                <span class="c-button__text">Discover this location</span>
                                            </a>
                                        </div>
                                        <div class="o-locations__card-right s-text s-text--on-dark">
                                            <strong class="">Activities offered:</strong>
                                            <ul>
                                                <li>Team Building</li>
                                                <li>Farm Activities</li>
                                                <li>Farm Visits</li>
                                                <li>Farm Kitchen</li>
                                                <li>Kids' Parties</li>
                                                <li>Farm Camps</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div hidden class="o-locations__card hidden js-locations-card" data-location-id="2">
                                    <img
                                        class="o-locations__card-image u-clip-path"
                                        loading="lazy"
                                        data-id="clip-path-image-3"
                                        src="uploads/locations/afbeelding-van-whatsapp-op-2023-04-19-om-2332155-007327900-1682575872_large.webp"
                                        alt=""
                                    >
                                    <div class="o-locations__card-content">
                                        <div class="o-locations__card-left">
                                            <h3 class="o-locations__card-title">Fun Farming Uganda</h3>
                                            <p class="s-text s-text--on-dark">
                                                <p>Let your adventurous team fun or farm-tastic bachelor's day continue at Fun Farming Uganda</p>
                                            </p>
                                            <a class="c-button u-spacing-mt3" href="locaties/antwerpen/farmfun-essen.html">
                                                <span class="c-button__text">Discover this location</span>
                                            </a>
                                        </div>
                                        <div class="o-locations__card-right s-text s-text--on-dark">
                                            <strong class="">Activities offered:</strong>
                                            <ul>
                                                <li>Farm Expert Games</li>
                                                <li>Farm Games</li>
                                                <li>Winterprogramma Wie is Koe-rupt</li>
                                                <li>Bumperball</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div hidden class="o-locations__card hidden js-locations-card" data-location-id="3">
                                    <img
                                        class="o-locations__card-image u-clip-path"
                                        loading="lazy"
                                        data-id="clip-path-image-3"
                                        src="uploads/locations/boerderij-farmfun-merchtem-043514100-1666544341_large.jpg"
                                        alt=""
                                    >
                                    <div class="o-locations__card-content">
                                        <div class="o-locations__card-left">
                                            <h3 class="o-locations__card-title">Fun Farming Uganda</h3>
                                            <p class="s-text s-text--on-dark">
                                                <p>Experience farmtastic activities a stone's throw from Brussels, on the farm of Chief Executive Farmers Bart and Marijke.</p>
                                            </p>
                                            <a class="c-button u-spacing-mt3" href="locaties/vlaams-brabant/farmfun-merchtem.html">
                                                <span class="c-button__text">Discover this location</span>
                                            </a>
                                        </div>
                                        <div class="o-locations__card-right s-text s-text--on-dark">
                                            <strong class="">Activities Offered: </strong>
                                            <ul>
                                                <li>Farm Expert Games</li>
                                                <li>Farm Games</li>
                                                <li>Bumperball</li>
                                                <li>Farm Camps</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div hidden class="o-locations__card hidden js-locations-card" data-location-id="4">
                                    <img
                                        class="o-locations__card-image u-clip-path"
                                        loading="lazy"
                                        data-id="clip-path-image-3"
                                        src="uploads/locations/bedrijvencompetitie-padel-031346600-1648473884_large.jpg"
                                        alt=""
                                    >
                                    <div class="o-locations__card-content">
                                        <div class="o-locations__card-left">
                                            <h3 class="o-locations__card-title">Fun Farming Uganda</h3>
                                            <p class="s-text s-text--on-dark">
                                                <p>The yard, the meadows and the stables of Geert and Sofie form the perfect setting for a farmable team building or bachelorette event in the Westhoek.</p>
                                            </p>
                                            <a class="c-button u-spacing-mt3" href="locaties/west-vlaanderen/farmfun-poperinge.html">
                                                <span class="c-button__text">Discover location</span>
                                            </a>
                                        </div>
                                        <div class="o-locations__card-right s-text s-text--on-dark">
                                            <strong class="">Aanbod activiteiten:</strong>
                                            <ul>
                                                <li>Farm Expert Games</li>
                                                <li>Farm Games</li>
                                                <li>Winterprogramma Wie is Koe-rupt</li>
                                                <li>Bumperball</li>
                                                <li>Kinderfeestjes</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div hidden class="o-locations__card hidden js-locations-card" data-location-id="5">
                                    <img
                                        class="o-locations__card-image u-clip-path"
                                        loading="lazy"
                                        data-id="clip-path-image-3"
                                        src="uploads/locations/gebouwen-092467700-1615417789_large.jpg"
                                        alt=""
                                    >
                                    <div class="o-locations__card-content">
                                        <div class="o-locations__card-left">
                                            <h3 class="o-locations__card-title">FarmFun Aalter</h3>
                                            <p class="s-text s-text--on-dark">
                                                <p>Farmtastische activiteiten op de gezonde boerenbuiten in het Meetjesland? Yves en Evelien staan klaar om van jouw teamevent een onvergetelijk moohment te maken.</p>
                                            </p>
                                            <a class="c-button u-spacing-mt3" href="locaties/oost-vlaanderen/farmfun-aalter.html">
                                                <span class="c-button__text">Ontdek deze locatie</span>
                                            </a>
                                        </div>
                                        <div class="o-locations__card-right s-text s-text--on-dark">
                                            <strong class="">Aanbod activiteiten:</strong>
                                            <ul>
                                                <li>Farm Expert Games</li>
                                                <li>Farm Games</li>
                                                <li>Winterprogramma Wie is Koe-rupt</li>
                                                <li>Bumperball</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div hidden class="o-locations__card hidden js-locations-card" data-location-id="6">
                                    <img
                                        class="o-locations__card-image u-clip-path"
                                        loading="lazy"
                                        data-id="clip-path-image-3"
                                        src="uploads/locations/geel-091970400-1648474364_large.jpg"
                                        alt=""
                                    >
                                    <div class="o-locations__card-content">
                                        <div class="o-locations__card-left">
                                            <h3 class="o-locations__card-title">FarmFun Geel</h3>
                                            <p class="s-text s-text--on-dark">
                                                <p>Farmtastische activiteiten op de gezonde boerenbuiten? Rob en Ingrid staan klaar om jouw teaammoohment tot in de ui(t)erste puntjes te regelen.</p>
                                            </p>
                                            <a class="c-button u-spacing-mt3" href="locaties/antwerpen/farmfun-geel.html">
                                                <span class="c-button__text">Ontdek deze locatie</span>
                                            </a>
                                        </div>
                                        <div class="o-locations__card-right s-text s-text--on-dark">
                                            <strong class="">Aanbod activiteiten:</strong>
                                            <ul>
                                                <li>Farm Expert Games</li>
                                                <li>Farm Games</li>
                                                <li>Winterprogramma Wie is Koe-rupt</li>
                                                <li>Bumperball</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div hidden class="o-locations__card hidden js-locations-card" data-location-id="7">
                                    <img
                                        class="o-locations__card-image u-clip-path"
                                        loading="lazy"
                                        data-id="clip-path-image-3"
                                        src="uploads/locations/braem-029298500-1645457653_large.jpg"
                                        alt=""
                                    >
                                    <div class="o-locations__card-content">
                                        <div class="o-locations__card-left">
                                            <h3 class="o-locations__card-title">FarmFun Beveren-Waas</h3>
                                            <p class="s-text s-text--on-dark">
                                                <p>Beleef farmidabele teambuildings en vrijgezellendagen in het Waasland. Mattias en Lieke staan klaar om jouw teammoohment tot in de ui(t)erste puntjes te regelen.</p>
                                            </p>
                                            <a class="c-button u-spacing-mt3" href="locaties/oost-vlaanderen/farmfun-beveren-waas.html">
                                                <span class="c-button__text">Ontdek deze locatie</span>
                                            </a>
                                        </div>
                                        <div class="o-locations__card-right s-text s-text--on-dark">
                                            <strong class="">Aanbod activiteiten:</strong>
                                            <ul>
                                                <li>Farm Expert Games</li>
                                                <li>Farm Games</li>
                                                <li>Winterprogramma Wie is Koe-rupt</li>
                                                <li>Bumperball</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div hidden class="o-locations__card hidden js-locations-card" data-location-id="8">
                                    <img
                                        class="o-locations__card-image u-clip-path"
                                        loading="lazy"
                                        data-id="clip-path-image-3"
                                        src="uploads/locations/fotos-van-thiel-melkvee-13-036881300-1693818823_large.webp"
                                        alt=""
                                    >
                                    <div class="o-locations__card-content">
                                        <div class="o-locations__card-left">
                                            <h3 class="o-locations__card-title">FarmFun Velp NB</h3>
                                            <p class="s-text s-text--on-dark">
                                                <p>Beleef farmtastische teambuilding activiteiten op de boerderij van Chief Executive Farmers Marijn &amp; Esther, Pascal &amp; Lieke in het Noord-Brabantse Velp.</p>
                                            </p>
                                            <a class="c-button u-spacing-mt3" href="locaties/noord-brabant/farmfun-velp-nb.html">
                                                <span class="c-button__text">Ontdek deze locatie</span>
                                            </a>
                                        </div>
                                        <div class="o-locations__card-right s-text s-text--on-dark">
                                            <strong class="">Aanbod activiteiten:</strong>
                                            <ul>
                                                <li>Farm Expert Games</li>
                                                <li>Farm Games</li>
                                                <li>Bumperball</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="component-item-10" data-type="button" class="u-mb-neg-slant-height

          u-slant-top

          ">
                    <div class="o-component-area__component l-contain ">
                        <div class="o-button-component o-button-component--align-center">
                            <h2 class="u-spacing-mb2">Take the bull by the horns!</h2>
                            <a class="c-button   u-spacing-mb8  " href="activiteiten.php">
                                <span class="c-button__text">To all activities</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="component-item-11" data-type="usps" class="u-mb-neg-slant-height

          u-slant-top
          u-bg-primary--500
          ">
                    <div class="o-component-area__component l-contain ">
                        <div class="o-usp-row " data-kal="slide-up">
                            <ul class="o-usp-row__list">
                                <li class="o-usp-row__item">
                                    <i class="o-usp-row__icon">
                                        <svg width="56" height="56">
                                            <use href="img/usp/marker.svg#marker"></use>
                                        </svg>
                                    </i>
                                    <p class="o-usp-row__label">
                                       Have Fun
                                        <br>
                                        <strong>always close by</strong>
                                    </p>
                                </li>
                                <li class="o-usp-row__item">
                                    <i class="o-usp-row__icon">
                                        <svg width="56" height="56">
                                            <use href="img/usp/calendar.svg#calendar"></use>
                                        </svg>
                                    </i>
                                    <p class="o-usp-row__label">
                                        Imagine Yourself
                                        <strong>
                                            ideal
                                            <br>
                                            event
                                        </strong>
                                       together
                                    </p>
                                </li>
                                <li class="o-usp-row__item">
                                    <i class="o-usp-row__icon">
                                        <svg width="56" height="56">
                                            <use href="img/usp/trees.svg#trees"></use>
                                        </svg>
                                    </i>
                                    <p class="o-usp-row__label">
                                        Minimum
                                        <br>
                                        <strong>mid</strong>
                                        impact
                                    </p>

                                </li>
                                <li class="o-usp-row__item">
                                    <i class="o-usp-row__icon">
                                        <svg width="56" height="56">
                                            <use href="img/usp/people.svg#people"></use>
                                        </svg>
                                    </i>
                                    <p class="o-usp-row__label">
                                        For thinkers and doers,
                                        <br>
                                        <strong>young and less young</strong>
                                    </p>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
