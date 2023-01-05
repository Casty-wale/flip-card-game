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
    <title>Flip Card Game</title>
</head>
<body>


    <section class="content" id="blurs">
        
        @foreach ($promo as $item)
            {{ $item->id }}
        @endforeach
            <div class="container" >
                {{-- <button type="button" id="closePopup">OK</button> --}}
                <div class="card">
                    <div class="front">
                        <button class="flip">1</button>
                    </div>
                    <div class="back">
                        <p>{{ $item->id }}</p>
                        <button class="theflip">Redeem</button>
                    </div>
                </div>

                <div class="card">
                    <div class="front">
                        <button class="flip">2</button>
                    </div>
                    <div class="back">
                        <p>{{ $item->id }}</p>
                        <button class="theflip">Redeem</button>
                    </div>
                </div>

                <div class="card">
                    <div class="front">
                        <button class="flip">3</button>
                    </div>
                    <div class="back">
                        <p>{{ $item->id }}</p>
                        <button class="theflip">Redeem</button>
                    </div>
                </div>
            </div>

            <div class="container" >
                <div class="card">
                    <div class="front">
                        <button class="flip">4</button>
                    </div>
                    <div class="back">
                        <p>{{ $item->id }}</p>
                        <button class="theflip">Redeem</button>
                    </div>
                </div>

                <div class="card">
                    <div class="front">
                        <button class="flip">5</button>
                    </div>
                    <div class="back">
                        <p>{{ $item->id }}</p>
                        <button class="theflip">Redeem</button>
                    </div>
                </div>

                <div class="card">
                    <div class="front">
                        <button class="flip">6</button>
                    </div>
                    <div class="back">
                        <p>{{ $item->id }}</p>
                        <button class="theflip">Redeem</button>
                    </div>
                </div>

            </div>

            <div class="container">
                <div class="card">
                    <div class="front">
                        <button class="flip">7</button>
                    </div>
                    <div class="back">
                        <p>{{ $item->id }}</p>
                        <button class="theflip">Redeem</button>
                    </div>
                </div>

                <div class="card">
                    <div class="front">
                        <button class="flip">8</button>
                    </div>
                    <div class="back">
                        <p>{{ $item->id }}</p>
                        <button class="theflip">Redeem</button>
                    </div>
                </div>

                <div class="card">
                    <div class="front">
                        <button class="flip">9</button>
                    </div>
                    <div class="back">
                        <p>{{ $item->id }}</p>
                        <button class="theflip">Back side</button>
                    </div>
                </div>
                <div class="count"></div>
            </div>

            {{-- {{!! $item->id !!}} --}}
        
        {{-- </div> --}}
        
    </section>

    <div class="center">
        <div class="popup" id="popup">
            {{-- <img src="img-removebg-preview.png" alt=""> --}}
            <img src="{{ URL('storage/img-removebg-preview.png') }}" alt="">
            <h2>Thank You</h2>
            <p id="para">You have Sucessfully finished your attempts</p>
            <button type="button" id="closePopup">OK</button>
            {{-- <button type="button" onclick="closePopup">OK</button> --}}
        </div>
    </div>
    {{-- @vite(['resources/js/flip.js']) --}}
    {{-- <script src="flip.js"></script> --}}
    {{-- <script src="flip.js"></script> --}}
</body>
</html>
