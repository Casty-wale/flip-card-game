<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="flip.css"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('') }}"> --}}
    @vite(['resources/css/flip.css', 'resources/js/flip.js'])
    {{-- @vite(['resources/css/flip.css']) --}}
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Lato&family=Montserrat:wght@600&family=Open+Sans:wght@300;600&family=Poppins:ital,wght@0,200;0,300;1,200&family=Roboto:wght@400;700&family=Send+Flowers&display=swap" rel="stylesheet">
    <title>GDC Promo Game</title>
</head>
<body>

    <section class="content" id="blurs">
            <div class="container" >
                <div class="card">
                    <div class="front">
                        <span class="flip">1</span>
                    </div>
                    <div class="back">
                        @if ( $promo['0']['promoDetails'] === "Sorry, Please Try Again" )
                            <p class="data">{{ $promo['0']->promoDetails }}</p>
                        @else
                            <p>{{ $promo['0']->promoDetails }}</p>
                            <button class="theflip" onclick="location.href='{{ url('user/place/'.$promo['0']->id.'') }}'">Redeem</button>
                        @endif
                    </div>
                </div>

                <div class="card">
                    <div class="front">
                        <span class="flip">2</span>
                    </div>
                    <div class="back">
                        @if ( $promo['1']['promoDetails'] === "Sorry, Please Try Again" )
                            <p class="data">{{ $promo['1']->promoDetails }}</p>
                        @else
                            <p>{{ $promo['1']->promoDetails }}</p>
                            <button class="theflip" onclick="location.href='{{ url('user/place/'.$promo['1']->id.'') }}'">Redeem</button>
                        @endif
                    </div>
                </div>

                <div class="card">
                    <div class="front">
                        <span class="flip">3</span>
                    </div>
                    <div class="back">
                        @if ( $promo['2']['promoDetails'] === "Sorry, Please Try Again" )
                            <p class="data">{{ $promo['2']->promoDetails }}</p>
                        @else
                            <p>{{ $promo['2']->promoDetails }}</p>
                            <button class="theflip" onclick="location.href='{{ url('user/place/'.$promo['2']->id.'') }}'">Redeem</button>
                        @endif
                    </div>
                </div>
            </div>
            <div class="container" >
                <div class="card">
                    <div class="front">
                        <span class="flip">4</span>
                    </div>
                    <div class="back">
                        @if ( $promo['3']['promoDetails'] === "Sorry, Please Try Again" )
                            <p class="data">{{ $promo['3']->promoDetails }}</p>
                        @else
                            <p>{{ $promo['3']->promoDetails }}</p>
                            <button class="theflip" onclick="location.href='{{ url('user/place/'.$promo['3']->id.'') }}'">Redeem</button>
                        @endif
                    </div>
                </div>

                <div class="card">
                    <div class="front">
                        <span class="flip">5</span>
                    </div>
                    <div class="back">
                        @if ( $promo['4']['promoDetails'] === "Sorry, Please Try Again" )
                            <p class="data">{{ $promo['4']->promoDetails }}</p>
                        @else
                            <p>{{ $promo['4']->promoDetails }}</p>
                            <button class="theflip" onclick="location.href='{{ url('user/place/'.$promo['4']->id.'') }}'">Redeem</button>
                        @endif
                    </div>
                </div>

                <div class="card">
                    <div class="front">
                        <span class="flip">6</span>
                    </div>
                    <div class="back">
                        @if ( $promo['5']['promoDetails'] === "Sorry, Please Try Again" )
                            <p class="data">{{ $promo['5']->promoDetails }}</p>
                        @else
                            <p>{{ $promo['5']->promoDetails }}</p>
                            <button class="theflip" onclick="location.href='{{ url('user/place/'.$promo['5']->id.'') }}'">Redeem</button>
                        @endif
                    </div>
                </div>

            </div>

            <div class="container">
                <div class="card">
                    <div class="front">
                        <span class="flip">7</span>
                    </div>
                    <div class="back">
                        @if ( $promo['6']['promoDetails'] === "Sorry, Please Try Again" )
                            <p class="data">{{ $promo['6']->promoDetails }}</p>
                        @else
                            <p>{{ $promo['6']->promoDetails }}</p>
                            <button class="theflip" onclick="location.href='{{ url('user/place/'.$promo['6']->id.'') }}'">Redeem</button>
                        @endif
                    </div>
                </div>

                <div class="card">
                    <div class="front">
                        <span class="flip">8</span>
                    </div>
                    <div class="back">
                        @if ( $promo['7']['promoDetails'] === "Sorry, Please Try Again" )
                            <p class="data">{{ $promo['7']->promoDetails }}</p>
                        @else
                            <p>{{ $promo['7']->promoDetails }}</p>
                            <button class="theflip" onclick="location.href='{{ url('user/place/'.$promo['7']->id.'') }}'">Redeem</button>
                        @endif
                    </div>
                </div>

                <div class="card">
                    <div class="front">
                        <span class="flip">9</span>
                    </div>
                    <div class="back">
                        @if ( $promo['8']['promoDetails'] === "Sorry, Please Try Again" )
                            <p class="data">{{ $promo['8']->promoDetails }}</p>
                        @else
                            <p>{{ $promo['8']->promoDetails }}</p>
                            <button class="theflip" onclick="location.href='{{ url('user/place/'.$promo['8']->id.'') }}'">Redeem</button>
                        @endif
                    </div>
                </div>
                {{-- <div class="count"></div> --}}
            </div>

            {{-- {{!! $item->id !!}} --}}
        
        </div>
        
    </section>

    <!-- first popup -->

    <div class="my-popup" id="my-popup">
        <img src="{{ URL('storage/images/comp/dot_com.png') }}" alt="ghana_dot_com_logo">
        {{-- <img src="ghana.png" alt=""> --}}
        <h2>Welcome!</h2>
        <p id="param">You have a chance to win a prize.</P> 
        <p id="param">You must select the correct box with your prize inside. </p>
        <p id="param">You have three(3) attempts. <br>GOOD LUCK!!! </p>
        <button type="button" class="butty">OK</button>
    </div>

    <!-- end first popup -->

    <!-- second popup for redeeming -->
    <div class="reddy" id="reddy">
        <img src="{{ URL('storage/images/comp/dot_com.png') }}" alt="ghana_dot_com_logo">
        {{-- <img src="ghana.png" alt=""> --}}
        <h2>Congratulation!</h2>
        <p id="param"><strong>You did it.</strong></P> 
        <p id="param">Thank you for been part of us.</p>
        <p id="param">Please redeem your Price</p>
        <button type="button" class="vent">OK</button>
    </div>

    <!-- end second popup for redeeming -->

    <!-- finished attemp popup -->
    <div class="center">
        <div class="popup" id="popup">
            {{-- <img src="img-removebg-preview.png" alt=""> --}}
            <img src="{{ URL('storage/images/img-removebg-preview.png') }}" alt="error_sign">
            <h2>Thank You</h2>
            <p id="para">You have Sucessfully finished your attempts</p>
            <button type="button" id="closePopup">OK</button>
            {{-- <button type="button" onclick="closePopup">OK</button> --}}
        </div>
    </div>

    <!-- end finished attemp popup -->


    {{-- @vite(['resources/js/flip.js']) --}}
    {{-- <script src="flip.js"></script> --}}
    {{-- <script src="flip.js"></script> --}}
</body>
</html>
