@extends('website.layout.app')

@section('title')
    <title>Manhattan</title>
@endsection

@section('header')
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                   start header                                   --}}
    {{-- * -------------------------------------------------------------------------------- --}}
    <section id="cta" class="section section_head ">

        <div class='video'>
            <video autoplay muted id="myVideo" onended="showImages()">
                <source class="" src="{{ asset('website/assets/video/rain5.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide img_container" data-ride="carousel" style="display:none;">
            <div class="carousel-inner">
                <div class="carousel-item carousel_height h-100  active img_about">
                    <img class="d-block h-100 w-100" src="{{ asset('website/assets/images/header/8.jpg') }}"
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
                                <a class="dropdown-item" href="#Manhattan,NewYorkCity">Manhattan,New York City</a>
                                <a class="dropdown-item" href="#Howmanyboroughs">How many boroughs</a>
                                <a class="dropdown-item" href="#HistoryofManhattan">History</a>
                                <a class="dropdown-item" href="#FamousManhattanbridges">Famous bridges</a>
                                <a class="dropdown-item" href="#Howtonavigate">How to navigate</a>
                                <a class="dropdown-item" href="#BikeandWalk">Manhattan Bike and walk</a>
                                <a class="dropdown-item" href="#NeighborhoodsinManhattan">Neighborhoods</a>
                                <a class="dropdown-item" href="#FamousbuildingsinManhattan">Famous buildin</a>
                                <a class="dropdown-item" href="#Famousparks">Famous parks/a>
                                <a class="dropdown-item" href="#newschannels">News channels</a>
                                <a class="dropdown-item" href="#Colleges">Colleges</a>
                                <a class="dropdown-item" href="#Questions">Questions</a>
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

            @include('website.layout.link')
            <div class="row">

                <div class="col-12 text-center p-4">

                    <h2 style="color: black">
                        Manhattan, New York city
                    </h2>
                </div>
                <div class="row d-flex justify-content-center ">
                    <div class="col-12 col-lg-8  wow bounce" data-wow-delay="0.01s">
                        <!-- Right third with an image -->
                        <img class="w-100 p-2" src="{{ asset('images/manhattan/manhattan.jpg') }}"
                            class="img-fluid" alt="Article Image">
                        <small class="text-center d-block"></small>
                    </div>
                </div>

                <div class="col-12">
                    <h5 class="text-center">

                        Most of the most famous tourist destinations in the world are located in Manhattan,
                        New York City such as the one World Trade Center, the Statue of Liberty, Broadway theaters,
                        the United Nations building, Times Square, the High Line, Rockefeller Center, the Empire State Building,
                        the Brooklyn Bridge, the South Street Seaport, Chinatown, Wall Street, the Opera Theatre, Little Italy, Roosevelt island,
                        and other well-known tourist destinations.
                    </h5>
                </div>
            </div>
        </div>
        <div class="container " id="container_contact">
            <div class="row">
                {{-- <div class="col-12 text-center p-4">
                    <div class="col-12 ">
                        <!-- Right third with an image -->
                        <img class=""
                             src="{{asset('images/manhattan/manhattan.jpg')}}" alt="Article Image">
                    </div>
                </div> --}}
            </div>
        </div>

        <div class="container-fluid">
            <div class="row my-5 py-5 " >
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8 ">
                            <!-- Left half of the article -->
                            <p class="wow wow bounce"  data-wow-delay="0.1s">Manhattan, New York city the bustling island in the middle of New York, captures the attention of millions of visitors.<br>
                               Because of its renowned skyline, various neighborhoods, and cultural attractions, Manhattan offers a singular, unparalleled experience.<br>
                               Let's examine the numerous reasons to visit Manhattan.<br>
                            </p>
                            <p class="wow wow bounce"  data-wow-delay="0.3s">Most people know Manhattan, New York City for its breathtaking architecture and recognizable skyline.<br>
                               The Empire State Building and One World Trade Center are just two of the city's magnificent structures.<br>
                               <br>
                               Visit rooftop bars or observation decks to see this amazing vantage point, where you may be astounded by the city's seemingly infinite expanse.
                            </p>
                            <p>Manhattan, New York City is much more than just lofty towers.
                                Its diverse neighborhoods are a fusion of many different racial and cultural groups.
                                Every neighborhood, from the trendy streets of SoHo to the old-world charm of Greenwich Village, has its own distinct personality and atmosphere.<br>
                                <br>
                                By visiting these areas, you may discover hidden gems around every corner, and learn about the city's interesting history.
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 wow fadeInLeft" data-wow-delay="0.2s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                                src="{{asset('images/manhattan/one_wrold_center1.jpg')}}"
                                class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Empire state building</small>
                        </div>
                    </div>
                </div>
            </div>


                {{--2--}}
                <div class="row tiko">
                    <!-- First Row -->
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12 col-lg-8 wow bounce"  data-wow-delay="0.1s">
                                <!-- Left half of the article -->
                                <br><br><br>
                                <p>No vacation would be complete without taking in the world-class museums and cultural attractions of Manhattan, New York City.<br>
                                    <br>
                                   A substantial collection of works of art from many ages and nations may be found in the Metropolitan Museum of Art, sometimes referred to as the MET.<br>
                                    <br>
                                    A fascinating journey through history and the natural world is provided by the American Museum of Natural History, while the Museum of Modern Art (MoMA) displays masterpieces of contemporary and modern art.<br>
                                    <br>
                                    These institutions, among many others, offer the assurance of an enriching experience that caters to all interests.
                                </p>
                            </div>
                            <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.2s">
                                <!-- Right third with an image -->
                                <img class="w-100 h-75 p-2"
                                    src="{{asset('images/manhattan/Empire state building.jpg')}}"
                                    class="img-fluid" alt="Article Image">
                                <small class="text-center d-block">One World Trade Center</small>
                            </div>
                        </div>
                    </div>
                </div>
                {{--2--}}
            <div class="row tiko">
                <!-- Second Row -->
                <div class="col-lg-12 my-5 wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <p>No vacation would be complete without taking in the world-class museums and cultural attractions of Manhattan, New York City.<br>
                        A substantial collection of works of art from many ages and nations may be found in the Metropolitan Museum of Art, sometimes referred to as the MET.<br>
                        A fascinating journey through history and the natural world is provided by the American Museum of Natural History, while the Museum of Modern Art (MoMA) displays masterpieces of contemporary and modern art.<br>
                        These institutions, among many others, offer the assurance of an enriching experience that caters to all interests.
                        </p>
                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                            <!-- Centered image with text -->
                            <img class="w-100 h-75 p-2"
                                src="{{asset('images/manhattan/Metropolitan museum.jpg')}}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Metropolitan museum</small>
                        </div>
                        <div class="col-12 col-lg-4 wow mx-autobounce"  data-wow-delay="0.1">
                            <!-- Centered image with text -->
                            <img class="w-100 h-75 p-2"
                                src="{{asset('images/manhattan/Whitney Museum of a Mercian Art.jpg')}}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Whitney Museum of a Mercian Art</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                            <!-- Centered image with text -->
                            <img class="w-100 h-75 p-2"
                                src="{{asset('images/manhattan/Metropolitan museum at Fifth Avenue between 82-86 Street.jpg')}}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center"> Metropolitan museum at Fifth Avenue between 82-86 Street</small>
                        </div>
                        <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.1s">
                            <!-- Centered image with text -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/manhattan/Opera Manhattan, New York City at 65 street & Broadway Avenue.jpg')}}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Lincoln Centet Broadway & 66 street</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="Manhattan,NewYorkCity">
                <div class="col-12 text-left p-4 wow bounce"  data-wow-delay="0.1s">
                    <h3>
                        Manhattan, New York City
                    </h3>
                </div>
                <!-- First Row -->
                <div class="col-lg-12 wow bounce"  data-wow-delay="0.2s">
                    <div class="row col-12">
                        <div class="col-12 col-lg-4 mx-auto text-left">
                            <!-- Centered image with text -->
                            <img class="w-100 h-75 p-2"
                                src="{{asset('images/manhattan/Broadway show in Manhattan.jpg')}}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Famous show phantom od the Opera</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <!-- Second Row -->
                <div class="col-lg-12 tiko wow bounce"  data-wow-delay="0.2s">
                    <!-- Rest of the article -->
                    <p>If you like the performing arts, you should be aware that Manhattan, New York City is home to Broadway, arguably the world's most well-known theater district.<br>
                       It is mandatory to attend a live musical or play while in the city.<br>
                       Exceptional performers, intricate sets, and eye-catching lighting come together to make for an unforgettable evening of entertainment.<br>
                       In addition to Broadway, Manhattan, New York City is home to a variety of music venues, comedy clubs, and dance performances that contribute to the city's vibrant cultural scene.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.5s">
                    <!-- Centered image with text -->
                    <img class="w-100 h-75 p-2"
                        src="{{asset('images/manhattan/Theater in 42 street between 7 & 8 Avenue.jpg')}}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">Theater in 42 street between 7 & 8 Avenue</small>
                </div>
                <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.2s">
                    <!-- Centered image with text -->
                    <img class="w-100 h-75 p-2"
                    src="{{asset('images/manhattan/Theater in 42 street between 7 & 8 Avenue_1.jpg')}}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">Theater in 42 street between 7 & 8 Avenue</small>
                </div>
            </div>
            <div class="row my-5 wow bounce"  data-wow-delay="0.1s">
                <!-- Second Row -->
                <div class="col-lg-12 tiko">
                    <!-- Rest of the article -->
                    <p>If you like the performing arts, you should be aware that Manhattan, New York City is home to Broadway, arguably the world's most well-known theater district.<br>
                       It is mandatory to attend a live musical or play while in the city.<br>
                       Exceptional performers, intricate sets, and eye-catching lighting come together to make for an unforgettable evening of entertainment.<br>
                       In addition to Broadway, Manhattan, New York City is home to a variety of music venues, comedy clubs, and dance performances that contribute to the city's vibrant cultural scene.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Left half of the article -->
                    <p class="wow bounce"  data-wow-delay="0.1s">Manhattan, New York City is a culinary lover's paradise because of its apparently endless number of eateries.<br>
                        It offers an exceptional dining experience, with everything from Michelin-starred establishments to street food vendors.<br>
                        You may savor authentic New York pizza and bagels, try food from all over the world, or go to trendy restaurants like Chelsea Market.<br>
                        Given that it meets all gourmet needs, Manhattan is a food lover's paradise.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.3s">Manhattan, New York City's parks provide a peaceful sanctuary away from the busy metropolis.<br>
                       Central Park is a huge oasis in the middle of the city that provides a peaceful haven where you may stroll along tree-lined walkways, rent a rowboat for the lake, or simply relax on its lush green meadows.<br>
                       The High Line is a fascinating elevated park built on an old railway track that not only provides stunning views of the city skyline throughout its length but also stands out as an elevated park in general.<br>
                       These natural places offer a much-needed break and an opportunity to unwind in the heart of a hectic city.
                    </p>
                </div>
                <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.2s">
                    <!-- Right third with an image -->
                    <img class="w-100 h-75 p-2"
                        src="{{asset('images/manhattan/Cart food vender in the street.jpg')}}"
                        class="img-fluid" alt="Article Image">
                    <small class="text-center d-block">Cart food vender in the street</small>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.1s">
                    <!-- Centered image with text -->
                    <img class="w-100 h-75 p-2"
                        src="{{asset('images/manhattan/Juniors Bakery restaurant in 45 Street between 7 & 8 Avenue.jpg')}}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">Juniors Bakery restaurant in 45 Street between 7 & 8 Avenue</small>
                </div>
                <div class="col-12 col-lg-4 mx-autowow bounce"  data-wow-delay="0.5s">
                    <!-- Centered image with text -->
                    <img class="w-100 h-75 p-2"
                    src="{{asset('images/manhattan/Some beautiful restaurants in Manhattan.jpg')}}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">Some beautiful restaurants in Manhattan</small>
                </div>
                <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.2s">
                    <!-- Centered image with text -->
                    <img class="w-100 h-75 p-2"
                    src="{{asset('images/manhattan/Horse Carriage Riding in Central Park, NYC.jpg')}}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">Horse Carriage Riding in Central Park, NYC</small>
                </div>
            </div>

            <div class="row my-5 wow bounce"  data-wow-delay="0.1s">
                <!-- Second Row -->
                <div class="col-lg-12 tiko">
                    <!-- Rest of the article -->
                    <p>
                        Finally, Manhattan, New York City is a shopping paradise.<br>
                        The streets of Fifth Avenue, Madison Avenue, and SoHo, three locations renowned for their top-notch shopping, are lined with upscale shops, the corporate headquarters of well-known corporations, and distinctive designer stores.<br>
                        From high-end apparel to vintage treasures, Manhattan offers a shopping experience that caters to all interests and price ranges.
                    </p>
                </div>
            </div>
            <div class="row">
|
                <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                    <!-- Centered image with text -->
                    <img class="w-100 h-75 p-2"
                    src="{{asset('images/manhattan/Ballet in soho in downtown Manhattan, Broadway Avenue.jpg')}}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">Ballet in soho in downtown Manhattan, Broadway Avenue</small>
                </div>
                <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.2s">
                    <!-- Centered image with text -->
                    <img class="w-100 h-75 p-2"
                    src="{{asset('images/manhattan/Manhattan, New York City.jpg')}}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">Manhattan, New York City</small>
                </div>
            </div>

            <div class="row" id="Howmanyboroughs">
                <div class="col-12 text-left p-4">
                    <h3 class="wow bounce"  data-wow-delay="0.1s">
                        How many boroughs are there in New York City?
                    </h3>
                </div>
                <div class="col-12 text-left p-4">
                    <h5 class="wow bounce"  data-wow-delay="0.2s">
                        There are five boroughs that make up New York City
                    </h5>
                    <li class="wow bounce"  data-wow-delay="0.3s">Manhattan borough</li>
                    <li class="wow bounce"  data-wow-delay="0.4s">Brooklyn borough</li>
                    <li class="wow bounce"  data-wow-delay="0.5s">Queens’s borough</li>
                    <li class="wow bounce"  data-wow-delay="0.6s">Bronx borough</li>
                    <li class="wow bounce"  data-wow-delay="0.7s">Staten Island borough</li>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Left half of the article -->
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        <b>New York City is made up of five boroughs:</b><br>
                        <br>
                        Queens, Brooklyn, the Bronx, Staten Island and Manhattan borough.<br>
                        Manhattan, New York City is the smallest in size and population.<br>
                        Most of Manhattan, New York City is located on Manhattan Island.<br>
                        The importance of Manhattan, New York city is due to the presence of the main headquarters of the United Nations and to being the city of culture and money.<br>
                        It has the most famous international media companies.<br>
                        Manhattan, New York City is the political and commercial center of New York society.

                    </p>
                </div>
                <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.3s">
                    <!-- Right third with an image -->
                    <img class="w-100 h-75 p-2"
                        src="{{asset('images/manhattan/United Nations Headquarters in east 42 street & 1 Avenue.jpg')}}"
                        class="img-fluid" alt="Article Image">
                    <small class="text-center d-block">United Nations Headquarters in east 42 street & 1 Avenue</small>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.1s">
                    <img class="w-100 h-75 p-2"
                    src="{{asset('images/manhattan/One World Trade Center in Downtown Manhattan, New York City.jpg')}}"
                    class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">One World Trade Center in Downtown Manhattan, New York City</small>
                </div>
                <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                    <!-- Centered image with text -->
                    <img class="w-100 h-75 p-2"
                    src="{{asset('images/manhattan/Wall street Stock in Downtown Manhattan Broadway Avenue.jpg')}}"
                    class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">Wall street Stock in Downtown Manhattan Broadway Avenue</small>
                </div>
                <!-- Centered image with text -->
                </div>

                <div class="row my-5">
                    <!-- Second Row -->
                    <div class="col-lg-12 tiko">
                        <!-- Rest of the article -->
                        <p class="wow bounce"  data-wow-delay="0.1s">Visit Manhattan, New York City if you want to experience a vibrant and interesting city.<br>
                            Everyone may find something to enjoy in this thriving city, which offers everything from the flashing lights of Times Square to the majestic buildings of the Financial District.<br>
                            Additionally, there are renowned museums, Michelin-starred eateries, fast food, and infinite In New York City, there is always something to do or a place to shop.
                        </p>
                        <p class="wow bounce"  data-wow-delay="0.3s">
                            New York County, one of the counties that helped form the state, borders the borough.<br>
                            Most of the borough is made up of Manhattan Island, which is bordered by the Hudson River in west and eastern Manhattan and Harlem rivers in north Manhattan, New York City as well as many other nearby islands, including Marble Hill, a small settlement that is currently located on the American.<br>
                            <br>
                            The Bronx is physically separated from the remainder of Manhattan to the north by the Harlem River, which also links the two.<br>
                             Lower, Midtown, Upper Manhattan, New York City are the three parts of Manhattan Island that are formally connected, and they are all parallel to the axis of the borough.<br>
                            <br>
                            Lower Manhattan, New York city from downtown to 14 street.<br>
                            Midtown Manhattan, New York City from 14 street to 59 street.<br>
                            Upper Manhattan from59 Street to Harlem River.<br>
                            <br>
                            West Manhattan, New York City Start from Fifth Avenue to Highway (12 Avenue)<br>
                            East Manhattan, New York City starts from Fifth Avenue to First Avenue.<br>
                            (it's almost from 14 street to 90 street).<br>
                        </p>
                    </div>
                </div>

                <div class="row" id="HistoryofManhattan">
                    <div class="col-12 text-left p-4">
                        <h3 class="wow bounce"  data-wow-delay="0.1s">
                            History of Manhattan, New York City
                        </h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-8">
                        <!-- Left half of the article -->
                        <p class="wow bounce"  data-wow-delay="0.2s">
                            Manhattan, New York City is one of the five boroughs that make up New York City.<br>
                            It has the biggest populace of any of the five boroughs, with a value of almost 1.6 million.<br>
                            The activity of the populace comes from ancient fishing tribes, counting the Lenape tribe. Europeans founded Manhattan in 1524.<br>
                            Within the year 1626, New Amsterdam was established, a little port within the south.
                        </p>
                        <p class="wow bounce"  data-wow-delay="0.3s">
                            The English changed the title of the port to New York after seizing it in 1664, in honor of the Duke of York.<br>
                            Manhattan, New York City has evolved from a small port for fish into a center for commerce and culture, and the Americans were able to recover New York in 1783 from the English after they had occupied it since 1664.</p>
                            York continued to be a financial and cultural hub during the nineteenth and early twentieth centuries.<br>
                            <br>
                            This happened before the Empire State and Statue of Liberty skyscrapers were built.<br>
                            The state of New York City declined in the mid-twentieth century due to the large influx of businesses and individuals from the suburbs.<br>
                            With the development of Time Square and Greenwich Village, this led to the city's revival again during the eighties and nineties.
                        </p>
                    </div>
                    <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.2s">
                        <!-- Right third with an image -->
                        <img class="w-100 h-75 p-2"
                            src="{{asset('images/manhattan/West Manhattan, New York City between 42 & 34 Street.jpg')}}"
                            class="img-fluid" alt="Article Image">
                        <small class="text-center d-block">West Manhattan, New York City between 42 & 34 Street</small>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.1s">
                        <!-- Centered image with text -->
                        <img class="w-100 h-75 p-2"
                            src="{{asset('images/manhattan/West downtown Manhattan, New York City.jpg')}}"
                            class="img-fluid" alt="Article Image">
                        <small class="d-block text-center">West downtown Manhattan, New York City  </small>
                    </div>
                </div>
                <div class="row my-5">
                    <!-- Second Row -->
                    <div class="col-lg-12 tiko">
                        <!-- Rest of the article -->
                        <P class="wow bounce"  data-wow-delay="0.1s">
                            Manhattan, New York City proceeds to be a critical global hub for media, commerce, and culture nowadays.<br>
                            <b>Two of the foremost significant cultural institutions within the world are situated on the island:</b><br>

                                <li class="wow bounce"  data-wow-delay="0.2s">the Metropolitan Museum of Art and the Lincoln Center for the Performing Arts.</li>
                                <li class="wow bounce"  data-wow-delay="0.3s">Many of the greatest companies and money related institutions within the world have their headquarters there.</li>
                        </P>
                        <p class="wow bounce"  data-wow-delay="0.2s">Over the course of its history, waves of immigration have changed Manhattan, making it one of the most diverse cities within the modern world.<br>
                           The borough is home to immigrant communities from all over the world, which has had a critical effect on the culture and economy of the city.<br>
                           Manhattan features a lengthy and intricate history.<br>
                           Its transformation from a modest trading post to a critical economic and cultural center appears to be the tenacity and inventiveness of those who call it home.<br>
                           Since its establishment, it has served as a noteworthy center for trade and finance. Lower Manhattan is home to the city's financial zone, which is centered on Wall Street.
                        </p>
                        <p class="wow bounce"  data-wow-delay="0.3s">
                            Manhattan, New York City Stock Trade, which is the biggest stock trade within the world, is found on Wall Street in southern Manhattan.<br>
                            It alludes to the power and capitalism of the United States.<br>
                            It is visited yearly by around 50 million guests.<br>
                            Guests know numerous energizing landmarks and neighborhoods and move between them by means of the subway system, which is one of the infrastructures of Manhattan.
                        </p>
                        <p class="wow bounce"  data-wow-delay="0.4s">
                            The subway comprises of 27 lines and 472 stops, and it works 24 hours a day and 7 days a week. The subway system is claimed by a transportation department called MBA.<br>
                            In 2017, the deal cost of a residential property within the Upper East Side neighborhood was estimated at $1,100,000. This cost is the most elevated within the world.<br>
                            The price of Manhattan is 4 trillion US dollars.<br>
                            There are numerous of the foremost popular buildings, such as the Rockefeller Center and the United Nations building.
                        </p>
                        <p class="wow bounce"  data-wow-delay="0.5s">
                            Chinatown in midtown Manhattan is home to the biggest Chinese population in the Western Hemisphere, and new Chinatowns are sprouting up all around the city.<br>
                            In New York City, there are more than 120 colleges and universities, including esteemed institutions like Columbia University and New York University.<br>
                            One of the American cities with the highest density of people is Manhattan.<br>
                            As of July 1, 2016, according to the U.S. Census Bureau, 1,664,727 people lived in it (which will be 11,313 km2 in 2022).
                        </p>
                        <p class="wow bounce"  data-wow-delay="0.5s">
                            Although definitions might change depending on the context, uptown refers to anything above 60th Street, downtown to everything below 14th Street, and Midtown to everything in between (from 14th Street to 60th Street).<br>
                            The informal division of the island into Lower, Midtown, and Uptown looks like this.
                        </p>
                        Manhattan's Upper East Side and Upper West Side are separated by Central Park, which is located above Harlem.<br>
                        1,585,873 people are expected to live in it by 2021. However, depending on the season and the number of visitors, the borough's population may vary significantly.<br>
                        Millions of visitors from all over the world visit Manhattan each year to take in its numerous sites and attractions.<br>
                        The city had a record-breaking 66.6 million visitors in 2019.
                        <p class="wow bounce"  data-wow-delay="0.5s">
                            Overall, Manhattan is an important and vibrant borough in New York City, home to many attractions and fascinating pasts.<br>
                             It is home to perhaps some of the most important places on the entire planet.<br>
                             Popular vacation destination for tourists from all over the world.
                        </p>
                    </div>
                </div>
                {{--tital--}}
                <div class="row" id="FamousManhattanbridges">
                    <div class="col-12 text-left p-4">
                        <h3 class="wow bounce"  data-wow-delay="0.1s">
                            Famous Manhattan bridges and tunnels
                        </h3>
                    </div>
                </div>
                    <!-- First Row -->

                    <div class="row wow bounce"  data-wow-delay="0.1s">
                        <!-- Second Row -->
                        <div class="col-12 col-lg-8">          <!-- Rest of the article -->
                            <p>Manhattan's well-known bridges connect surrounding communities, including Manhattan Island, to the mainland.</p>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.1s">
                            <!-- Centered image with text -->
                            <img class="w-100 h-50 p-2"
                            src="{{asset('images/manhattan/IMG_20230210_144103.jpg')}}"
                            class="img-fluid" alt="Article Image">
                            <h5 class="d-block text-center">Brooklyn Bridge</h5>
                            <p class="d-block text-center">It connects Manhattan to Brooklyn and is certainly the best known of them all. Cross the East River to the West (downtown Manhattan).</p>
                            <small class="d-block text-center">Brooklyn Bridge connect between West downtown Manhattan and Brooklyn</small>
                        </div>


                        <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.1s">
                            <!-- Centered image with text -->
                            <img class="w-100 h-50 p-2"
                            src="{{asset('images/manhattan/Manhattan bridge connect between Brooklyn.jpg')}}"
                            class="img-fluid" alt="Article Image">
                            <h5 class="wow bounce d-block text-center"  data-wow-delay="0.1s">Manhattan Bridge</h5>
                            <p class="wow bounce d-block text-center"  data-wow-delay="0.3s">Another well-known bridge that crosses the East River to connect Brooklyn and the Lower East side of Manhattan is the Manhattan Bridge.</p>
                            <small class="d-block text-center">Manhattan bridge connect between Brooklyn and lower east side of Manhattan, NYC</small>
                        </div>


                        <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.1s">
                            <!-- Centered image with text -->
                            <img class="w-100 h-50 p-2"
                            src="{{asset('images/manhattan/Ed Koch Queensboro Bridg.jpg')}}"
                            class="img-fluid" alt="Article Image">
                            <h5 class="wow bounce"  data-wow-delay="0.1s">Ed Koch Queensboro Bridge</h5>
                            <p class="wow bounce"  data-wow-delay="0.1s">Another well-known bridge that crosses the East River to connect Brooklyn and the Lower East Side is the Manhattan Bridge. (Downtown Manhattan)</p>
                            <small class="d-block text-center">Connect between Queens and 59 Street Manhattan, first Avenue</small>


                        </div>

                    </div>




                    <div class="row wow bounce tiko"  data-wow-delay="0.1s">
                        <!-- Second Row -->
                        <div class="col-12 col-lg-8">          <!-- Rest of the article -->
                            <h5>Williamsburg Bridge</h5>
                        </div>
                    </div>
                    <div class="row wow bounce"  data-wow-delay="0.1s">
                        <!-- Second Row -->
                        <div class="col-12 col-lg-8">          <!-- Rest of the article -->
                            <p>Another well-known bridge that crosses the East River to connect Brooklyn and the Lower East Side is the Manhattan Bridge. (Downtown Manhattan)</p>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Second Row -->
                        <div class="col-12 col-lg-8">          <!-- Rest of the article -->
                            <h5 class="wow bounce"  data-wow-delay="0.1s">George Washington bridge</h5>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Second Row -->
                        <div class="col-12 col-lg-8">          <!-- Rest of the article -->
                            <p class="wow bounce"  data-wow-delay="0.2s">Fort Lee, New Jersey and Washington Heights, Manhattan, connected by the George Washington Bridge. (179 Street and Highway West, Manhattan).</p>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <!-- Second Row -->
                        <div class="col-12 col-lg-8">          <!-- Rest of the article -->
                            <h5 class="wow bounce"  data-wow-delay="0.1s">Queens-Midtown Tunnel</h5>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Second Row -->
                        <div class="col-12 col-lg-8">          <!-- Rest of the article -->
                            <p class="wow bounce"  data-wow-delay="0.2s">The Queens-Midtown Tunnel connects eastern Manhattan with Queens (Long Island City). (37th Street and 1st Avenue, Manhattan)</p>
                            <P class="wow bounce"  data-wow-delay="0.3s">While the Ed Koch Queensboro Bridge spans the East River, separating Manhattan from Long Island City (59th Street, 1st Avenue, Manhattan)</P>
                        </div>
                    </div>


                    <div class="row">
                        <!-- Second Row -->
                        <div class="col-12 col-lg-8">          <!-- Rest of the article -->
                            <h5 class="wow bounce"  data-wow-delay="0.1s">Manhattan Holland and Lincoln Tunnel</h5>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Second Row -->
                        <div class="col-12 col-lg-8">          <!-- Rest of the article -->
                            <p class="wow bounce"  data-wow-delay="0.2s">Beneath the Hudson River are the Lincoln and Holland Tunnels, which connect Manhattan to New Jersey.</p>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Second Row -->
                        <div class="col-12 col-lg-8">          <!-- Rest of the article -->
                            <h5 class="wow bounce"  data-wow-delay="0.1s">Lincoln Tunnel, multiple entrances</h5>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Second Row -->
                        <div class="col-12 col-lg-8">          <!-- Rest of the article -->
                            <p class="wow bounce"  data-wow-delay="0.2s">37th Street and 9th Avenue, 30th Street and 10th Avenue, 40th Street and 11th Avenue.</p>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Second Row -->
                        <div class="col-12 col-lg-8">          <!-- Rest of the article -->
                            <h5 class="wow bounce"  data-wow-delay="0.1s">Holland Tunnel</h5>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Second Row -->
                        <div class="col-12 col-lg-8">          <!-- Rest of the article -->
                            <p class="wow bounce"  data-wow-delay="0.2s">Canal Street and Varick Street, Laight Street and Varick Street.</p>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Second Row -->
                        <div class="col-12 col-lg-8">          <!-- Rest of the article -->
                            <h5 class="wow bounce"  data-wow-delay="0.1s">The free Staten Island Ferry</h5>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Second Row -->
                        <div class="col-12 col-lg-8">          <!-- Rest of the article -->
                            <p class="wow bounce"  data-wow-delay="0.2s">It is used by approximately 22 million passengers each year to travel from the southern tip of Manhattan to Staten Island.</p>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Second Row -->
                        <div class="col-12 col-lg-8">          <!-- Rest of the article -->
                            <h5 class="wow bounce"  data-wow-delay="0.3s">The free Staten Island Ferry</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <!-- Left half of the article -->
                            <P class="wow bounce"  data-wow-delay="0.1s">
                                There is only one route from Battery Park in the center of Manhattan to the Statue of Liberty.<br>
                                Take the R or 1 subway to Whitehall Station in downtown Manhattan.<br>
                                A location at West 42nd Street and West Highway in mid-Manhattan was selected to serve Uptown and Downtown Manhattan.
                            </P>
                            <p class="wow bounce"  data-wow-delay="0.2s">
                                There is only one route from Battery Park in the center of Manhattan to the Statue of Liberty.<br>
                                Take the R or 1 subway to Whitehall Station in downtown Manhattan.<br>
                                A location at West 42nd Street and West Highway in mid-Manhattan was selected to serve Uptown and Downtown Manhattan.
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 tiko">
                            <!-- Right third with an image -->


                            <div class='video_1 tiko'>
                            <video autoplay muted id="myVideo_1" loop >
                                <source class="tiko" src="{{ asset('images/manhattan/20210724_193618.mp4') }}" type="video/mp4">
                            </video>
                            <small class="d-block text-center">Circle ships in west 42 Street & Highway</small>
                            </div>
                        </div>
                    </div>

                    <div class="row" id="Howtonavigate">
                        <div class="col-12 text-left p-4">
                            <h3 class="wow bounce tiko"  data-wow-delay="0.1s">
                                How to navigate Manhattan, New York
                            </h3>
                        </div>
                    </div>
                        <!-- First Row -->
                        <div class="row my-3">
                            <div class="col-12 col-lg-8 wow bounce tiko"  data-wow-delay="0.1s">
                                    <!-- Centered image with text -->
                                    Manhattan, which is in the heart of New York City, offers a wide range of public transit options for getting around this large metropolitan area.<br>
                                    Using public transit is an easy and sensible way to get around, whether you live in it or are simply visiting.<br>
                                    Here is a comprehensive list of Manhattan's public transportation choices.

                            </div>
                        </div>
                        <div class="row my-3">
                            <!-- Second Row -->
                            <div class="col-12 col-lg-8">          <!-- Rest of the article -->
                                <h5 class="wow bounce"  data-wow-delay="0.1s">Subway</h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <p class="wow bounce"  data-wow-delay="0.2s">
                                The New York City subway is Manhattan's most well-known and complete public transportation system.<br>
                                It services the entire borough and has several stations and lines.<br>
                                The tube runs continually, so you can go whenever you want. <br>
                                It's important to keep in mind that some lines may have service changes or delays, so it's a good idea to check for updates before departing on your trip.
                                </p>
                            </div>
                            <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                                <!-- Right third with an image -->
                                <img class="w-100 h-75 p-2"
                                    src="{{asset('images/manhattan/subway.jpg')}}"
                                    class="img-fluid" alt="Article Image">
                                <small class="text-center d-block"></small>
                            </div>
                        </div>
                        <div class="row tiko">
                            <div class="col-12 text-left p-4">
                                <h5 class="wow bounce"  data-wow-delay="0.1s">
                                    Buses
                                </h5>
                            </div>
                        </div>
                            <!-- First Row -->
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                <p class="wow bounce"  data-wow-delay="0.2s">
                                    Manhattan has a sizable bus network in addition to the subway, providing extra transportation options. <br>
                                    The bus system makes it simple to get to areas that are not served by the tube. Several roads connect significant locations, sites, and transit hubs. <br>
                                    Keep in mind that, depending on the time of day, bus schedules and routes may change.
                                </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-left p-4">
                                    <h5 class="wow bounce"  data-wow-delay="0.2s">
                                        Ferries
                                    </h5>
                                </div>
                            </div>
                                <!-- First Row -->
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                <p class="wow bounce"  data-wow-delay="0.2s">
                                    Given that Manhattan is surrounded by water, taking a ferry to or from the borough is a picturesque experience.<br>
                                    Since it goes between Staten Island and Manhattan and offers breathtaking views of the Statue of Liberty, the Staten Island Ferry is a popular choice.<br>
                                    There are several ferry services along the Hudson River that connect to nearby cities, including New Jersey and Brooklyn.
                                </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 text-left p-4">
                                    <h5 class="wow bounce"  data-wow-delay="0.3s">
                                        Taxis and ride-sharing services
                                    </h5>
                                </div>
                            </div>
                                <!-- First Row -->
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                <p class="wow bounce"  data-wow-delay="0.1s">
                                    Taxis and ride-sharing services are crucial elements of Manhattan, New York,'s transport system, satisfying the needs of both residents and visitors.<br>
                                    Modern ride-sharing services and the recognizable yellow taxis have opened a wide range of transportation options in Manhattan.
                                </p>
                                </div>
                            </div>


                                <!-- First Row -->
                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                        <!-- Left half of the article -->
                                        <p class="wow bounce"  data-wow-delay="0.2s">
                                            <h5 class="wow bounce"  data-wow-delay="0.1s">
                                                Yellow Taxis
                                            </h5>
                                            <br>
                                            Yellow taxis have been Manhattan's distinctive symbol for many years.<br>
                                            <br>
                                            These taxis are easily recognized by their vibrant yellow color and can be seen cruising the busy city streets, especially in well-knownareas like Times Square and Central Park.
                                        </p>
                                    </div>
                                    <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                                        <!-- Right third with an image -->
                                        <img class="w-100 h-50 p-2"
                                            src="{{asset('images/manhattan/taxi.jpg')}}"
                                            class="img-fluid" alt="Article Image">
                                        <small class="text-center d-block"></small>
                                    </div>
                                </div>
                                <div class="row tiko">
                                    <div class="col-12 text-left tiko p-4">
                                        <h5 class="wow bounce"  data-wow-delay="0.1s">
                                            Customers
                                        </h5>
                                        <p class="wow bounce"  data-wow-delay="0.1s">
                                            may call for them on the street or hail them at authorized taxi stands, and they provide a dependable and convenient mode of transportation that is constantly on call.<br>
                                            Licensed taxi drivers in Manhattan are required to successfully complete rigorous training and testing to guarantee the security and enjoyment of their customers.
                                        </p>
                                    </div>
                                </div>
                                    <!-- First Row -->




                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <h5 class="wow bounce"  data-wow-delay="0.1s">
                                            Uber and Lyft
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                        <p class="wow bounce"  data-wow-delay="0.2s">
                                            Uber and Lyft are two of the foremost broadly used ride-sharing services in Manhattan nowadays.<br>
                                            These services, which can be accessed via mobile applications, have changed how city dwellers use transit.<br>
                                            With only a few clicks on their phones, users may request a journey, and a car will be there in no time.<br>
                                            Because of their level of comfort, accessibility, and adaptability, ride-sharing services are popular among locals and guests in Manhattan.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                        <p class="wow bounce"  data-wow-delay="0.3s">
                                            One of the key advantages of ride-sharing services is the ability to monitor the vehicle's real-time location, estimated arrival time, and fare computations through the app.<br>
                                            Passengers feel more secure and at ease when traveling because of this openness.<br>
                                            Furthermore, ride-sharing services usually give a variety of car alternatives to satisfy a range of needs, counting standard sedans, high-end vehicles, and bigger vehicles for families or groups.
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                        <p class="wow bounce"  data-wow-delay="0.4s">
                                            The rivalry between traditional taxis and ride-sharing platforms has profited both businesses.<br>
                                            The introduction of smartphone applications by taxi companies has made it less complex for clients to book and pay for trips.<br>
                                            Several taxi firms provide cutting-edge amenities like Wi-Fi and charging connections to improve the client experience.<br>
                                            On the other hand, the availability of carpooling options by ride-sharing companies promotes cost-sharing and reduces traffic in Manhattan.
                                        </p>
                                    </div>
                                </div>

                                <div class="row" id="BikeandWalk">
                                    <div class="col-12 text-left p-4">
                                        <h3 class="wow bounce"  data-wow-delay="0.1s">
                                            Manhattan, New York, Bike and Walk
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                        <p class="wow bounce"  data-wow-delay="0.2s">
                                            Manhattan, one of New York City's five boroughs, is well known for its bustling streets, recognizable structures, and energetic atmosphere.<br>
                                            It is usually referred to as the "heart" of the Big Apple, for good reason.<br>
                                            Given its compact size and wealth of attractions, exploring Manhattan on foot or by bike is a great way to experience the city's energy and charm.
                                        </p>
                                        <p class="wow bounce"  data-wow-delay="0.2s">
                                            Walking is a particularly popular mode of transportation in Manhattan because of how pedestrian-friendly the city is.
                                        </p>
                                        <p class="wow bounce"  data-wow-delay="0.3s">
                                            Roadways are bordered with active sidewalks, crosswalks, and enough signage to make it easy and safe for pedestrians to navigate them.<br>
                                            Walking gives you the chance to fully immerse yourself in the vibrant atmosphere and distinctive culture of the city, whether you're exploring the charming neighborhoods of Greenwich Village or the Lower Eastern Side, strolling through Central Park, or browsing the shops on Fifth Avenue.
                                        </p>
                                        <p class="wow bounce"  data-wow-delay="0.4s">
                                            Roadways are bordered with active sidewalks, crosswalks, and enough signage to make it easy and safe for pedestrians to navigate them.<br>
                                            Walking gives you the chance to fully immerse yourself in the vibrant atmosphere and distinctive culture of the city, whether you're exploring the charming neighborhoods of Greenwich Village or the Lower Eastern Side, strolling through Central Park, or browsing the shops on Fifth Avenue.
                                        </p>
                                    </div>
                                    <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                                        <!-- Right third with an image -->
                                        <img class="w-100 h-75 p-2"
                                            src="{{asset('images/manhattan/Walk with friends healthy way.jpg')}}"
                                            class="img-fluid" alt="Article Image">
                                        <small class="text-center d-block">Walk with friends healthy way</small>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                        <p class="wow bounce"  data-wow-delay="0.1s">
                                            One of the most well-known places for pedestrians to go in Manhattan is Times Square.<br>
                                            This crowded area is a prime example of the city's vibrant energy thanks to its vivid billboards, bustling throng, and street performers.<br>
                                            Times Square offers a distinctive experience since, as you go through it, theaters, restaurants, and shops surround it.
                                        </p>
                                        <p class="wow bounce"  data-wow-delay="0.2s">
                                            Cycling is one of the foremost dynamics, healthy and most critical means of transportation. Cycling is one of the foremost well-known choices in Manhattan.<br>
                                            City authorities have made an incredible bargain of effort to modernize and improve the bike foundation.<br>
                                            A bike path has been introduced and the city bike program has been completed. While cycling, you'll enjoy the charming and beautiful view of the city over time.
                                        </p>
                                    </div>
                                    <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                                        <!-- Right third with an image -->
                                        <img class="w-100 h-75 p-2"
                                            src="{{asset('images/manhattan/Training Bike in Center Park, NYC.jpg')}}"
                                            class="img-fluid" alt="Article Image">
                                        <small class="text-center d-block">Training Bike in Center Park, NYC</small>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                        <p class="wow bounce"  data-wow-delay="0.2s">
                                            <br>
                                            <br>
                                            Hudson River Green Way is the foremost prevalent and one of the most secure courses for cycling in Manhattan.<br>
                                            <br>
                                            This beautiful path is found on the west side of Manhattan, where you'll not only see breathtaking views, but too a set of the views of New Jersey at night.<br>
                                            <br>
                                            Once you are on a bike, you'll be able to see different sorts of boats cruising through the waterway before you.
                                        </p>
                                    </div>
                                    <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                                        <!-- Right third with an image -->
                                        <img class="w-100 h-75 p-2"
                                            src="{{asset('images/manhattan/West Hudson River side.jpg')}}"
                                            class="img-fluid" alt="Article Image">
                                        <small class="text-center d-block">West Hudson River side</small>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                        <p class="wow bounce"  data-wow-delay="0.1s">
                                            This road is distant from the noise of the city and is well maintained.<br>
                                            <br>
                                            The length of the waterfront greenway encompassing the whole island is 32 miles.<br>
                                            <br>
                                            The street passes through neighborhoods, parks, and shorelines, and is characterized by its charming views.<br>
                                            <br>
                                            Safety must come first, always driving in bike lanes.<br>
                                            <br>
                                            You must comply with traffic rules and protect your bike when parked to secure it from theft.
                                        </p>
                                    </div>
                                    <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                                        <!-- Right third with an image -->
                                        <img class="w-100 h-75 p-2"
                                            src="{{asset('images/manhattan/Marathon happened  every Years in Manhattan.jpg')}}"
                                            class="img-fluid" alt="Article Image">
                                        <small class="text-center d-block">Marathon happened  every Years in Manhattan</small>
                                    </div>
                                </div>

                                <div class="row" id="NeighborhoodsinManhattan">
                                    <div class="col-12 text-left p-4">
                                        <h3 class="wow bounce"  data-wow-delay="0.1s">
                                            Neighborhoods in Manhattan
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                        <li class="wow bounce"  data-wow-delay="0.2s">
                                            Harlem
                                        </li>
                                        <li class="wow bounce"  data-wow-delay="0.3s">
                                            North Manhattan
                                        </li>
                                        <li class="wow bounce"  data-wow-delay="0.4s">
                                            Upper Eastern Side
                                        </li>
                                        <li class="wow bounce"  data-wow-delay="0.5s">
                                            Upper West Side
                                        </li>
                                        <li class="wow bounce"  data-wow-delay="0.6s">
                                            Midtown
                                        </li>
                                        <li class="wow bounce"  data-wow-delay="0.7s">
                                            Greenwich Village
                                        </li>
                                        <li class="wow bounce"  data-wow-delay="0.8s">
                                            Chelsea
                                        </li>
                                        <li class="wow bounce"  data-wow-delay="0.9s">
                                            SoHo
                                        </li>
                                        <li class="wow bounce"  data-wow-delay="1s">
                                            Lower Eastern Side
                                        </li>
                                        <li class="wow bounce"  data-wow-delay="1.1s">
                                            Lower west Side
                                        </li>
                                        <li>
                                            Battery Park City
                                        </li>
                                        <li class="wow bounce"  data-wow-delay="1.2s">
                                            Attractions in the city of Manhattan
                                        </li>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <h5 class="wow bounce"  data-wow-delay="0.1s">
                                            Tourists can explore Manhattan in google to find the best attractions located there, and here are some of them:
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                    <p class="wow bounce"  data-wow-delay="0.2s">Statue of Liberty, Central Park, Empire State Building, Times Square, Museums, Broadway show, One World Trade Center, Rockefeller Center, High Line, Vessel, Chinatown, Wall Street, United Nations, Little Italy, Fifth Avenues, Little Island, Brooklyn Bridge, Theaters, South Street Seaport, Cow Charging Bull, Edge, Roosevelt Island,</p>
                                    </div>
                                </div>
                                <div class="row" id="FamousbuildingsinManhattan">
                                    <div class="col-12 text-left p-4">
                                        <h3 class="wow bounce"  data-wow-delay="0.3s">
                                            Famous buildings in Manhattan, New York City
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                    <p class="wow bounce"  data-wow-delay="0.3s">Manhattan is home to some of the most iconic and recognizable buildings in the world.<br>
                                        These landmarks span a variety of architectural styles and eras, reflecting the city's rich history and diverse culture. <br>
                                    </div>
                                </div>

                            <div class="row">
                                <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.1s">
                                    <img class="w-100 h-75 p-2"
                                        src="{{asset('images/manhattan/Empire State building in 34 Street, 5 Avenue Manhattan, New York City.jpg')}}"
                                        class="img-fluid" alt="Article Image">
                                    <small class="text-center d-block">Empire State building in 34 Street, 5 Avenue Manhattan, New York City</small>
                                </div>
                                <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                                    <!-- Centered image with text -->
                                    <img class="w-100 h-75 p-2"
                                        src="{{asset('images/manhattan/One World Trade Center in downtown Manhattan, New York City_11.jpg')}}"
                                        class="img-fluid" alt="Article Image">
                                    <small class="text-center d-block">One World Trade Center in downtown Manhattan, New York City</small>
                                </div>
                                <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                                    <!-- Centered image with text -->
                                    <img class="w-100 h-75 p-2"
                                        src="{{asset('images/manhattan/Chrysler Building in 42 Street, Lexington Avenue Manhattan, New York City.jpg')}}"
                                        class="img-fluid" alt="Article Image">
                                    <small class="text-center d-block">Chrysler Building in 42 Street, Lexington Avenue Manhattan, New York City</small>
                                </div>
                                <!-- Centered image with text -->
                            </div>

                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                        <b>Here are some of the most famous buildings in Manhattan, New York:</b></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <h5 class="wow bounce"  data-wow-delay="0.2s">
                                            Empire State Building
                                        </h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <p class="wow bounce"  data-wow-delay="0.3s">
                                            This Art Deco skyscraper was once the tallest building in the world and remains one of the most beloved landmarks in New York City.<br>
                                            Its observation decks offer stunning panoramic views of the city, and its interior is adorned with Art Deco murals and details.
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <h5 class="wow bounce"  data-wow-delay="0.1s">
                                            One World Trade Center
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <p class="wow bounce"  data-wow-delay="0.2s">
                                            This 1,776-foot-tall skyscraper is the tallest building in the United States and a symbol of resilience in the aftermath of the 9/11 attacks.<br>
                                            Its observation deck, One World Observatory, offers breathtaking views of the city and beyond.
                                        </p>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <h5 class="wow bounce"  data-wow-delay="0.2s">
                                            Chrysler Building
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <p class="wow bounce"  data-wow-delay="0.3s">
                                            This Art Deco masterpiece is known for its distinctive spire and gleaming stainless-steel façade.<br>
                                            It is a New York City landmark and a popular tourist destination.
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <h5 class="wow bounce"  data-wow-delay="0.1s">
                                            Grand Central Terminal
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <p class="wow bounce"  data-wow-delay="0.2s">
                                            This Beaux-Arts masterpiece is one of the busiest train stations in the world and a major transportation hub for New York City.<br>
                                            Its main concourse is renowned for its celestial ceiling mural, and its iconic clock is a popular meeting spot.
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <h5 class="wow bounce"  data-wow-delay="0.1s">
                                            Flatiron Building
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <p class="wow bounce"  data-wow-delay="0.1s">
                                            This triangular-shaped building is a beloved landmark of the Flatiron District.<br>
                                            Its unique shape and Beaux-Arts architecture have made it an icon of New York City.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <h5 class="wow bounce"  data-wow-delay="0.1s">
                                            Rockefeller Center
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <p class="wow bounce"  data-wow-delay="0.2s">
                                            This Art Deco complex is home to several iconic landmarks, including Radio City Music Hall, the Top of the Rock observation deck, and the rink at Rockefeller Plaza.<br>
                                            It is a popular tourist destination and a major center for business and entertainment.
                                        </p>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.1s">
                                        <img class="w-100 h-75 p-2"
                                        src="{{asset('images/manhattan/Rockefeller center in 5 avenue & 50 street Manhattan.jpg')}}"
                                        class="img-fluid" alt="Article Image">
                                    <small class="text-center d-block">Rockefeller center in 5 avenue between 49 & 50 Street Manhattan</small>
                                    </div>
                                    <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                                        <!-- Centered image with text -->
                                        <img class="w-100 h-75 p-2"
                                        src="{{asset('images/manhattan/Flatiron building in 23 Street & Broadway Avenue.jpg')}}"
                                        class="img-fluid" alt="Article Image">
                                    <small class="text-center d-block">Flatiron building in 23 Street & Broadway Avenue</small>
                                    </div>
                                    <!-- Centered image with text -->
                                    </div>




                                <div class="row" id="Famousparks">
                                    <div class="col-12 text-left p-4">
                                        <h3 class="wow bounce"  data-wow-delay="0.1s">
                                            Famous parks in Manhattan, New York
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                    <p class="wow bounce"  data-wow-delay="0.1s">
                                        Manhattan is home to many beautiful and famous parks, each with its own unique character and charm.
                                    </p>
                                        <b> Here are a few of the most popular and well-known parks in Manhattan:</b>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.1s">
                                        <img class="w-100 h-75 p-2"
                                        src="{{asset('images/manhattan/Central Park 59 Street & 8 Avenue.jpg')}}"
                                        class="img-fluid" alt="Article Image">
                                    <small class="text-center d-block">Central Park 59 Street & 8 Avenue</small>
                                    </div>
                                    <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                                        <!-- Centered image with text -->
                                        <img class="w-100 h-75 p-2"
                                        src="{{asset('images/manhattan/Bryant Park.jpg')}}"
                                        class="img-fluid" alt="Article Image">
                                    <small class="text-center d-block"> Bryant Park in 42 Street between 5 Avenue & 6 Avenue of America</small>
                                    </div>
                                    <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                                        <!-- Centered image with text -->
                                        <img class="w-100 h-75 p-2"
                                        src="{{asset('images/manhattan/Washington Square Park in West 4 & 5 Avenue, Manhattan, New York City.jpg')}}"
                                        class="img-fluid" alt="Article Image">
                                    <small class="text-center d-block">Washington Square Park in West 4 & 5 Avenue, Manhattan, New York City</small>
                                    </div>
                                    <!-- Centered image with text -->
                                </div>

                                <div class="row">
                                    <div class="col-12 text-left p-4 tiko">
                                        <h5 class="wow bounce"  data-wow-delay="0.1s">
                                            Central Park
                                        </h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 text-left p-4 tiko">
                                        <p class="wow bounce my-5"  data-wow-delay="0.2s">
                                            This sprawling 843-acre park is the most famous park in Manhattan, and for good reason.<br>
                                            It is a beloved oasis of green space in the middle of the city, and its diverse landscape offers something for everyone, from its serene lakes and quiet wooded areas to its bustling playgrounds and lively entertainment venues.
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <h5 class="wow bounce"  data-wow-delay="0.3s">
                                            Bryant Park
                                        </h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <p class="wow bounce"  data-wow-delay="0.2s">
                                            This 4-acre park is located behind the New York Public Library's main branch.<br>
                                            It is a popular spot for lunch, relaxation, and people-watching.(Downtown Manhatten)<br>
                                            The park hosts a variety of events throughout the year, including free movies in the summer and an ice-skating rink in the winter.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <h5 class="wow bounce"  data-wow-delay="0.1s">
                                            Washington Square Park
                                        </h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <p class="wow bounce"  data-wow-delay="0.2s">
                                            This 10-acre park is in Greenwich Village.<br>
                                            It is a popular gathering spot for students, artists, and activists.<br>
                                            The park is home to several landmarks, including the Washington Square Arch and the Judson Memorial Church.
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.1s">
                                        <img class="w-100 h-75 p-2"
                                        src="{{asset('images/manhattan/Riverside Park in Manhattan, New York City.jpg')}}"
                                        class="img-fluid" alt="Article Image">
                                    <small class="text-center d-block">Riverside Park in Manhattan, New York City</small>
                                    <small class="text-center d-block">in the West of Manhaten </small>
                                    </div>
                                    <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                                        <!-- Centered image with text -->
                                        <img class="w-100 h-75 p-2"
                                        src="{{asset('images/manhattan/High Line Manhattan, New York City.jpg')}}"
                                        class="img-fluid" alt="Article Image">
                                    <small class="text-center d-block">High Line Manhattan, New York City</small>
                                    <small class="text-center d-block">(Strat from 34 Street & 11, 12 Avenue) 2 end in Downtown</small>
                                    </div>
                                    <!-- Centered image with text -->
                                </div>
                                <div class="row">
                                    <div class="col-12 text-left p-4 tiko">
                                        <h5 class="wow bounce"  data-wow-delay="0.1s">
                                            High Line
                                        </h5>
                                    </div>
                                </div>

                                <div class="row my-5">
                                    <div class="col-12 text-left p-4 tiko">
                                        <p class="wow bounce"  data-wow-delay="0.2s">
                                            This 1.45-mile-long public park is built on a historic freight rail line elevated above the streets on Manhattan, New York City West Side.<br>
                                            It is a popular spot for walking, jogging, and biking.<br>
                                            The park offers stunning views of the Hudson River and the surrounding cityscape.
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <h5 class="wow bounce"  data-wow-delay="0.1s">
                                            Riverside Park
                                        </h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <p class="wow bounce"  data-wow-delay="0.3s">
                                            This 4-mile-long park stretches along the Hudson.<br>
                                            It is a popular spot for running, biking, and fishing.<br>
                                            The park is also home to several playgrounds, dog runs, and sports fields.
                                        </p>
                                    </div>
                                </div>



                                <div class="row" id="newschannels">
                                    <div class="col-12 text-left p-4">
                                        <h3 class="wow bounce"  data-wow-delay="0.3s">
                                            Manhattan, New York City news channels
                                        </h3>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.1s">
                                        <!-- Centered image with text -->
                                        <img class="w-100 h-75 p-2"
                                            src="{{asset('images/manhattan/NBC Studios 50 street between 5 & 6 Avenue.jpg')}}"
                                            class="img-fluid" alt="Article Image">
                                        <small class="d-block text-center">NBC Studios 50 street between 5 & 6 Avenue</small>
                                    </div>
                                    <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                                        <!-- Centered image with text -->
                                        <img class="w-100 h-75 p-2"
                                        src="{{asset('images/manhattan/News ABC in time square.jpg')}}"
                                            class="img-fluid" alt="Article Image">

                                        <small class="text-center d-block">News ABC in time square</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <li class="wow bounce"  data-wow-delay="0.1s">
                                            ABC 7: WABC-TV (7) - News, weather, traffic, and sports.
                                        </li>
                                        <li class="wow bounce"  data-wow-delay="0.2s">
                                            CBS 2: WCBS-TV (2) - News, weather, traffic, and sports.
                                        </li>
                                        <li class="wow bounce"  data-wow-delay="0.3s">
                                            NBC 4: WNBC-TV (4) - News, weather, traffic, and sports.
                                        </li>
                                        <li class="wow bounce"  data-wow-delay="0.4s">
                                            FOX 5: WNYW-TV (5) - News, weather, traffic, and sports.
                                        </li>
                                        <li class="wow bounce"  data-wow-delay="0.5s">
                                            PBS: WNET (13)-news, documentaries, and educational programing
                                        </li>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <h3 class="wow bounce"  data-wow-delay="0.1s">Colleges in Manhattan New York City for students</h3>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <h5>Students can find several colleges in Manhattan New York City including:</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <b class="wow bounce"  data-wow-delay="0.1s">Hunter College</b>
                                        <p class="wow bounce"  data-wow-delay="0.2s">695 Park Ave New York, NY 10065</p>
                                        <b class="wow bounce"  data-wow-delay="0.3s">Baruch College</b>
                                        <p class="wow bounce"  data-wow-delay="0.4s">55 Lexington Ave New York, NY 10010</p>
                                        <b class="wow bounce"  data-wow-delay="0.5s">John Jay College of Criminal Justice</b>
                                        <p class="wow bounce"  data-wow-delay="0.6s">524 W 59th St New York, NY 10019</p>
                                        <b class="wow bounce"  data-wow-delay="0.7s">LIM College</b>
                                        <p class="wow bounce"  data-wow-delay="0.8s">12 E 53rd St New York, NYC 10022</p>
                                        <b class="wow bounce"  data-wow-delay="0.9s">Manhattan, New York City College</b>
                                        <p class="wow bounce"  data-wow-delay="1s">4513 Manhattan College Pkwy Bronx, NYC 10471</p>
                                        <b class="wow bounce"  data-wow-delay="1.1s">Marymount Manhattan College</b>
                                        <p class="wow bounce"  data-wow-delay="1.2s">Address: 221 E 71st St, New York, NYC 10021</p>
                                    </div>
                                </div>

                                <div class="row" id="Questions">
                                    <div class="col-12 text-left p-4">
                                        <h3 class="wow bounce"  data-wow-delay="0.1s">Questions people ask about Manhattan, New York City</h3>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <h4 class="wow bounce"  data-wow-delay="0.2s">FAQ</h4>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 text-left p-4">
                                        <b class="wow bounce"  data-wow-delay="0.2s">
                                            How do I get from the airport to Manhattan, New York City?
                                        </b>
                                        <p class="wow bounce"  data-wow-delay="0.3s">
                                            Manhattan is easily accessible from major airports such as John F. Kennedy (JFK) and LaGuardia (LGA) by taxi, rideshare, airport shuttles, or public transportation such as trains and buses.
                                        </p>
                                        <b class="wow bounce"  data-wow-delay="0.4s">
                                            What is the best time to travel to Manhattan, New York City?
                                        </b>
                                        <p class="wow bounce"  data-wow-delay="0.5s">
                                            Manhattan is a tourist destination that can be visited year-round, but the spring and fall seasons offer nicer weather and less crowds. December holidays are also popular for their festive atmosphere.
                                        </p>
                                        <b class="wow bounce"  data-wow-delay="0.6s">
                                            What are the must-see attractions in Manhattan, New York City?
                                        </b>
                                        <p class="wow bounce"  data-wow-delay="0.7s">
                                            Must-see attractions in Manhattan include Times Square, Central Park, the Statue of Liberty, the Empire State Building, and the Metropolitan Museum of Art.
                                        </p>
                                        <b class="wow bounce"  data-wow-delay="0.8s">
                                            How do I navigate the Manhattan, New York City subway?
                                        </b>
                                            Manhattan's subway system is extensive and efficient. Purchasing a MetroCard gives you access to subway stations. Maps and signs will help you navigate. (work 24 hours)
                                        <p class="wow bounce"  data-wow-delay="0.9s">
                                            Are there any free attractions in Manhattan, New York City?
                                        </p>
                                        <b class="wow bounce"  data-wow-delay="1s">
                                            Yes, there are some free attractions in Manhattan. Examples include strolling through Central Park, visiting the High Line, walking the Brooklyn Bridge, and visiting museums on free admission days.
                                        </b>
                                        <p class="wow bounce"  data-wow-delay="1.1s">
                                            Where is Manhattan, New York City famous shopping district?
                                        </p>
                                        <b class="wow bounce"  data-wow-delay="1.2s">
                                            Fifth Avenue is known for its high-end boutiques and flagship stores. Soho is home to trendy fashion and independent boutiques, while Chinatown is home to vibrant markets that offer a unique shopping experience.
                                        </b>
                                        <p class="wow bounce"  data-wow-delay="1.3s">
                                            Where is the best place to stay in Manhattan?
                                        </p>
                                        <b class="wow bounce"  data-wow-delay="1.4s">
                                            Popular Manhattan destinations include Midtown, Chelsea, Greenwich Village, and the Upper West Side. The choice depends on your taste and budget.
                                        </b>
                                        <b class="wow bounce"  data-wow-delay="1.5s">
                                            How do I buy tickets to a Broadway show?
                                        </b>
                                        <p class="wow bounce"  data-wow-delay="1.6s">
                                            Tickets for Broadway shows can be purchased online through the official Tickets website, box office, or authorized ticket reseller.
                                        </p>
                                        <b class="wow bounce"  data-wow-delay="1.7s">
                                            Can I visit the Statue of Liberty in Manhattan?
                                        </b>
                                        <p class="wow bounce"  data-wow-delay="1.8s">
                                            The Statue of Liberty is in New York Harbor but can be accessed from Manhattan by ferry departing from Battery Park.
                                        </p>
                                        <b class="wow bounce"  data-wow-delay="1.9s">
                                            What are some of Manhattan's most popular signature dishes?
                                        </b>
                                        <p class="wow bounce"  data-wow-delay="1s">
                                            Popular Manhattan specialties include New York-style pizza, bagels, hot dogs, pastrami sandwiches, and international cuisine from various cultural districts.
                                        </p>
                                        <b class="wow bounce"  data-wow-delay="1.1s">
                                            Are there any kid-friendly attractions in Manhattan?
                                        </b>
                                        <p>
                                Yes, Manhattan has several kid-friendly attractions, like the American Museum of Natural History, the Central Park Zoo, the Children's Museum of Manhattan, and the Intrepid Sea, Air & Space Museum.
                                        </p>
                                        <b class="wow bounce"  data-wow-delay="1.2s">
                                            How can I enjoy Manhattan nightlife?
                                        </b>
                                        <p class="wow bounce"  data-wow-delay="1.3s">
                                Manhattan has a vibrant nightlife with many bars, nightclubs, concert halls, and rooftop bars. Exploring neighborhoods like the Meatpacking District and the Lower Eastern Side can offer a variety of options.
                                        </p>
                                        <b class="wow bounce"  data-wow-delay="1.4s">
                                            Can I rent a bike in Manhattan, New York City?
                                        </b>
                                        <p class="wow bounce"  data-wow-delay="1.2s">
                                            Yes, bike rentals are available in Manhattan, New York City allowing you to explore Manhattan's streets and parks.<br>
                                            {{-- Central Park (59 Street & 8 Avenue).<br>
                                            Highline Park (start from 34 street & “11 &12 Avenue) to end in downtown.<br>
                                            Bryant Park (42 Street & 6 Avenue).<br>
                                            Battery Park (Downtown near Statue of liberty).<br>
                                            Riverside Park. (in the west of Manhattan, New York City)<br> --}}
                                            where you can relax, picnic, or enjoy outdoor activities.<br>
                                        </p>
                                        <b class="wow bounce"  data-wow-delay="1.6s">
                                            How do I get tickets to TV show tapings in Manhattan, New York city?
                                        </b>
                                        <p class="wow bounce"  data-wow-delay="1.7s">
                                            You can usually request tickets to tapings of the television show Manhattan by visiting the show's official website or contacting the production company. Some shows also offer hold tickets.
                                        </p>
                                        <b class="wow bounce"  data-wow-delay="1.8s">
                                            What are the popular art museums in Manhattan, New York City?
                                        </b>
                                        <p class="wow bounce"  data-wow-delay="1.9s">
                                            A. Popular museums in Manhattan include the Metropolitan Museum of Art, Museum of Modern Art (MoMA), Guggenheim Museum, and Museum of the City of New York.
                                        </p>
                                        <b class="wow bounce"  data-wow-delay="1s">
                                             Can you walk from Manhattan to Brooklyn?
                                        </b>
                                        <p class="wow bounce"  data-wow-delay="1.2s">
                                            Yes, you can walk from Manhattan to Brooklyn and cross the Brooklyn Bridge. It offers great views of the Manhattan skyline and is a popular activity for tourists.
                                        </p>
                                        <b class="wow bounce"  data-wow-delay="1.2s">
                                            Are there guided tours in Manhattan, New York City?
                                        </b>
                                        <p  class="wow bounce"  data-wow-delay="1.4s">
                                            Yes, there are many guided tours in Manhattan, including walking tours, bus tours, gourmet tours, and specialty tours based on interests such as art, history, and architecture.
                                        </p>
                                        <b  class="wow bounce"  data-wow-delay="1.5s">
                                            How do I get tickets to a sports game in Manhattan, New York City?
                                        </b>
                                        <p  class="wow bounce"  data-wow-delay="1.6s">
                                            Tickets for Manhattan sports games, such as basketball games at Madison Square Garden and baseball games at Yankee Stadium, can be purchased online at the official Tickets website or at the venue.
                                        </p>
                                    </div>
                                </div>
            @include('website.layout.link')
        {{-- * -------------------------------------------------------------------------------- --}}
        {{-- *                                    end content                                   --}}
        {{-- * -------------------------------------------------------------------------------- --}}
    </div>
    </section>
    @endsection

