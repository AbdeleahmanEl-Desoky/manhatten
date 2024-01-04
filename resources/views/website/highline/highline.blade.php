@extends('website.layout.app')

@section('title')
    <title>Highline</title>
@endsection

@section('header')
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                   start header                                   --}}
    {{-- * -------------------------------------------------------------------------------- --}}

    <section id="cta" class="section section_head ">

        <div id="carouselExampleIndicators" class="carousel slide img_container">
            <div class="carousel-inner">
                <div class="carousel-item carousel_height h-100  active img_about">
                    <img class="d-block h-100 w-100" src="{{ asset('images/times-square/Times-Square.jpg') }}"
                        alt="First slide">
                </div>
            </div>
        </div>
    </section>



    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                    end header                                    --}}
    {{-- * -------------------------------------------------------------------------------- --}}
@endsection

@section('content')
    <section id="cta" class="section">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 layerIndex d-lg-block">
            <div class="sidebar">

                <div class="widget">
                    <div class="link-widget text-dark">
                        <div class="dropdown">
                            <button class="btn btn-lg index dropdown-toggle " type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                index
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
        {{-- * -------------------------------------------------------------------------------- --}}
        {{-- *                                   start content                                  --}}
        {{-- * -------------------------------------------------------------------------------- --}}

        <div class="container " id="container_contact">

            <div class="row">
                <div class="col-12 col-lg-4 p-2 m-auto text-center bg-light one_title">
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/7.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/6.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/5.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/4.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/3.jpg') }}" alt=""></a>
                </div>
                <div class="col-12 col-lg-4 p-2 m-auto text-center">
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/2.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/1.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/15.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/14.jpg') }}" alt=""></a>
                </div>
                <div class="col-12 col-lg-4 p-2 m-auto text-center">
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/12.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/16.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/11.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/10.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/9.jpg') }}" alt=""></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center p-4">

                    <h2 style="color: black">
                        Highline New York City
                    </h2>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row" >
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <!-- Left half of the article -->
                            <p>
                                Times Square, NYC at night city's most well-known locations, it has a long history going back more than a century.<br>
                                The region, previously known as Longacre Square, operated as a horse and carriages selling center in the late 19th century.<br>
                                The area's name was change to Times Square in 1904 when the New York Times moved its operations there.
                            </p>
                        </div>
                        <div class="col-12 col-lg-4">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                                src="{{asset('images/times-square/Times Square, NYC at night.jpg')}}"
                                class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Times Square, NYC at night</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <!-- Second Row -->
                <div class="col-lg-12  tiko">
                    <!-- Rest of the article -->
                    <h3>
                        Time Square, NYC is an important place in midtown Manhattan, NYC
                    </h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 tiko">
                    <p>
                        Over the years, Times Square, NYC has seen several modifications<.br>
                        <br>
                        In the 1920s, it became the center of the city's entertainment scenes with neon signs and billboards advertising the newest Broadway productions.<br>
                        This is also the time when the well-known New Year's Eve ball drop, which first took place in 1907, developed.<br>
                        <br>
                        Due to the growth of several nightclubs, theatres, and restaurants in Times Square, NYC in the late 1930s and early 1940s, the area became a center for the entertainment industry.
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-4 mx-auto">
                            <!-- Centered image with text -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/times-square/Man statue of Liberty.jpg')}}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Man statue of Liberty</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-12 tiko">
                    <p>
                        But in the 1950s, as movie going declined and televisions became more popular, the neighborhood began to suffer.<br>
                        The region developed a reputation for being seedy and added to the bad image of New York City because of the high concentration of adult theatres, drug dealers, and other illicit activity.<br>
                        <br>
                        In the 1980s, a significant restoration project was started to clean up the area and make it more hospitable for tourists.<br>
                        As a result, Times Square, NYC midtown Manhattan, NYC underwent redevelopment and gained additional theatres, restaurants, shops and hotels.<br>
                        It is currently a well-known traveler objective and important to the image of the city.<br>
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <!-- Left half of the article -->
                            <p>
                                Even with all the modifications, Times Square, NYC still has a few recognizable landmarks. A well-liked meeting spot is the square's northernmost set of red steps, which were constructed in 2008.<br>
                                The infamous neon announcements and messages are still shown on the skyscrapers, and the ball drop on New Year's Eve remained a beloved custom as before.<br>
                                <br>
                                Times Square , NYC has made a significant contribution to American culture by showing up in numerous films, television shows, and photographs.<br>
                                There are now several important events hosted there, including the TCS Manhattan NYC Marathon and the annual New Year's Eve celebration.<br>
                                <br>
                                Times Square, NYC has a rich history that demonstrates how New York City and all of America have evolved throughout the years.<br>
                                Times Square Manhattan, NYC has long been a symbol of the energy and vitality of the city, from its earliest days as a horse trading area to its contemporary role as a top tourists' destination.<br>
                            </p>
                        </div>
                        <div class="col-12 col-lg-4">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                                src="{{asset('images/times-square/Times Square, NYC.jpg')}}"
                                class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Times Square, NYC</small>
                        </div>
                    </div>
                </div>
            </div>
                {{--2--}}
            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h3>The best time to visit Times Square, NYC</h3>
                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-4 mx-auto">
                            <!-- Centered image with text -->
                            <img class="w-100 h-75 p-2"
                                src="{{asset('images/times-square/Time Square, NYC New Year’s Eve Ball.jpg')}}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center"></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h5>Time Square, NYC New Year’s Eve Ball</h5>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12 my-3">
                    <!-- Rest of the article -->
                    <p>
                        Each year, millions of visitors go to Times Square, NYC in midtown Manhattan, nyc.<br>
                        The perfect time to visit Times Square, though, will depend on your inclinations and what you want to get out of the trip.<br>
                        The busiest travel period, which runs from May to September, may be the finest time to visit Times Square if you want to fully immerse yourself within the commotion of New York City.<br>
                        <br>
                        You'll expect a charming climate, open air exercises, and an assortment of fun things to do during this time. But be prepared to bargain with enormous crowds and drawn-out lines.<br>
                        The winter months from November to February can be perfect for you if you want to avoid the crowds and encounter a more peaceful Times Square.<br>
                        Although it might get cold during this time of year, there can be something fabulous about the holiday displays and celebrations.<br>
                        <br>
                        Another fantastic time to be there is the annual New Year's Eve celebration.<br>
                        You must not pass up the once-in-a-lifetime opportunity of watching the ball drop! But make sure to arrive early and prepare for a large crowd.<br>
                        The ideal time to go to Times Square, NYC will ultimately depend on your own interests.<br>
                        you decide to visit, make sure to experience the sights and sounds of this well-known New York City neighborhood.
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-4 mx-auto">
                            <!-- Centered image with text -->
                            <img class="w-100 h-75 p-2"
                                src="{{asset('images/times-square/Santa Christmas in Time Square, NYC.jpg')}}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Santa Christmas in Time Square, NYC</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 my-3">
                    <h5>Things to do in Times Square, nyc</h5>
                </div>
            </div>

            <div class="row my-3">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <p>
                        Times Square, nyc commonly alluded to as "The Junction of the World," is without a doubt one of the most famous and energetic traveler areas within the whole globe.<br>
                        <br>
                        Times Square, which is in the center of midtown Manhattan, gives a particular and exciting experience that everyone may enjoy.<br>
                    </p>
                    <h5>
                        A few of the best activities at Times Square include the following:
                    </h5>
                </div>
            </div>


            <div class="row my-3">
                <div class="col-lg-12">
                    <b>Experience the Lively Atmosphere:</b>
                    <p class="my-3">
                        Meander the streets of Times Square, NYC and take in the renowned buildings, neon signs, and multicultural populace.<br>
                        The area is particularly mesmerizing at night because of the astonishing screens and lights that light it up.
                    </p>
                </div>
            </div>


            <div class="row my-3">
                <div class="col-lg-12">
                    <b>Attend a performance or musical:</b>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4 mx-auto">
                    <!-- Centered image with text -->
                    <img class="w-100 h-75 p-2"
                        src="{{asset('images/times-square/People enjoy at Time Square.jpg')}}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">People enjoy at Time Square</small>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-12 tiko">
                    <p class="my-5">
                        The Broadway Theater, a theater that is one of Times Square's well-known, could be an awesome place to see a performance or a musical.<br>
                        To secure the finest seats, make sure you buy your tickets early.
                    </p>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-lg-12">
                    <b>Eat at Local Eateries:</b>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4 mx-auto">
                    <!-- Centered image with text -->
                    <img class="w-100 h-75 p-2"
                        src="{{asset('images/times-square/Between 7 Avenue bewteen  45, 46 Street_1.jpg')}}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">Between 7 Avenue bewteen  45, 46 Street</small>
                </div>
                <div class="col-12 col-lg-4 mx-auto">
                    <!-- Centered image with text -->
                    <img class="w-100 h-75 p-2"
                    src="{{asset('images/times-square/Between 7 Avenue bewteen  45, 46 Street_2.jpg')}}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">Between 7 Avenue bewteen  45, 46 Street</small>
                </div>
            </div>

            <div class="row my-5">
                <!-- Second Row -->
                <div class="col-lg-12 tiko">
                    <!-- Rest of the article -->
                    <p>
                        Times Square, NYC features a wide variety of eating choices, from quick food joints to fine dining establishments.<br>
                        The most excellent universal cuisine is accessible to diners, including true American food, Italian, Chinese, and more.
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <b>
                        Shopping:
                    </b>
                    <p>
                        Times Square, NYC shopping may be a fun experience and a well-liked visitor destination.<br>
                        Visitors can purchase anything from the most current fashion accessories to souvenirs in the area's numerous shops, marketplaces, and boutiques.
                    </p>
                </div>
            </div>

            <div class="row my-5">
                    <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <b>
                        Museums:
                    </b>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4 mx-auto">
                    <!-- Centered image with text -->
                    <img class="w-100 h-75 p-2"
                        src="{{asset('images/times-square/Madame Tussauds in 42 Street between 7 & 8 Avenue.jpg')}}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">Madame Tussauds in 42 Street between 7 & 8 Avenue</small>
                </div>
                <div class="col-12 col-lg-4 mx-auto">
                    <!-- Centered image with text -->
                    <img class="w-100 h-75 p-2"
                    src="{{asset('images/times-square/Madame Tussauds in 42 Street between 7 & 8 Avenue_1.jpg')}}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">Madame Tussauds in 42 Street between 7 & 8 Avenue</small>
                </div>
                <div class="col-12 col-lg-4 mx-auto">
                    <!-- Centered image with text -->
                    <img class="w-100 h-75 p-2"
                    src="{{asset('images/times-square/Madame Tussauds in 42 Street between 7 & 8 Avenue_2.jpg')}}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">Madame Tussauds in 42 Street between 7 & 8 Avenue</small>
                </div>
            </div>

        <div class="row my-5">
            <div class="col-lg-12 tiko">
                <p>
                    Times Square, NYC is additionally home to several museums that give an interesting glimpse into the past and culture of New York City.<br>
                    These include the Museum of Modern Art, the Ripley's Believe It or Not Museum, and Madame Tussauds Wax Museum.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <b>Take Advantage of the Nightlife:</b>
                <br>
                <p>Times Square, NYC is renowned for its exciting nightlife.<br>
                    Here, you will go out with friends and have a great time at the most well-liked bars and clubs within the city.<br>
                    Times Square , NYC, Manhattan,  features a wide variety of choices for dining, shopping, entertainment, and nightlife.<br>
                    It's the ideal location to take in the energy and vitality of New York City.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h3>Best Shop</h3>
                <br>
                <p>
                    One of the most popular tourist locations in New York City is Times Square, NYC, which provides a diverse range of food, entertainment, and shopping options.
                </p>
                <h5>Some of the top stores to check out while at Times Square are listed below:</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 my-5">
                <b>Forever 21</b>
                <br>
                <p>
                    This ship clothing retailer has both affordable and stylish clothing for men and women.<br>
                    You can undoubtedly discover something that fits your style among the several levels of apparel selection between 45 and 46th St.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-4 mx-auto">
                <!-- Centered image with text -->
                <img class="w-100 h-75 p-2"
                    src="{{asset('images/times-square/Forever 21.jpg')}}"
                    class="img-fluid" alt="Article Image">
                <small class="d-block text-center"></small>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <b>(H&M)</b>
                <br>
                <p>
                    Another well-known retailer of clothes, (H & M) provides reasonably priced, stylish clothing for kids, ladies, and adults. (Broadway Ave. and 42nd St.).
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <b>Sephora</b>
                <br>
                <p>
                    Shoppers interested in beauty will enjoy a trip to Sephora, which offers a variety of skincare, fragrance, and makeup options from well-known brands. Between (45 and 46th St).
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <p><b>Disney Store for Toys</b> between 45 and 46 St.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <b>(M&M) World New York</b>
                <br>
                <p>
                    a vibrant candy, gift, and clothing store (48th St and 7th Avenue or Broadway Avenue).
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-4 mx-auto">
                <!-- Centered image with text -->
                <img class="w-100 h-75 p-2"
                    src="{{asset('images/times-square/m&m.jpg')}}"
                    class="img-fluid" alt="Article Image">
                <small class="d-block text-center"></small>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <p><b>Hershey Chocolate World Time</b>(47th St and 7 Avenue)</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4 mx-auto">
                <!-- Centered image with text -->
                <img class="w-100 h-75 p-2"
                    src="{{asset('images/times-square/Hershey Chocolate World Time (47th St and 7 Avenue).jpg')}}"
                    class="img-fluid" alt="Article Image">
                <small class="d-block text-center"></small>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <p><b>Hard Rock Cafe</b>(43th St and 7 Avenue)</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4 mx-auto">
                <!-- Centered image with text -->
                <img class="w-100 h-75 p-2"
                    src="{{asset('images/times-square/Hard Rock Cafe (43rd St and 7 Avenues).jpg')}}"
                    class="img-fluid" alt="Article Image">
                <small class="d-block text-center"></small>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <p><b>Eagle Store</b>(46th St and 7 Avenue)</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <p><b>Express Store</b>(46th St and Broadway Avenue).</p>
                <br>
                <p>In general, Times Square, NYC,  Manhattan is a shopper's haven, offering a vast variety of shops and shopping experiences to fit every preference and price range.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h3>Best restaurants, fast food and fast-food sellers</h3>
                <br>
                <h5>A few of the best eateries in Times Square, NYC include:</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 my-5">
                <b>Carmine's Italian Restaurant:</b>
                <br>
                <p>A family-style establishment that offers substantial portions of traditional Italian food as chicken parmesan and lasagna. (44thtbetween 7 and 8 Avenue).</p>
            </div>
        </div>



        {{-- * -------------------------------------------------------------------------------- --}}
        {{-- *                                    end content                                   --}}
        {{-- * -------------------------------------------------------------------------------- --}}
    </div>
    </section>
    @endsection

