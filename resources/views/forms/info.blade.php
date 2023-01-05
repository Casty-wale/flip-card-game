<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap">
  <title>GDC Promo Game</title>
</head>
<body>

    <div class="bg-blue-100 flex items-center justify-center h-screen">
        <div class="container px-5 shadow-md bg-white lg:w-1/3 md:w-1/2 border border-gray-300 rounded-xl">
            
            {{-- <div class="w-full lg:w-1/2 order-1 lg:order-2"> --}}
            <div class="w-full order-1 items-center justify-center">
                    {{-- <div class="form-wrapper flex items-center justify-center relative z-2"> --}}
                        <div class="form-wrapper flex items-center justify-center z-2">
                            {{-- <div class="w-full space-y-5 bg-yellow-400"> --}}
                                
                                <div class="block w-8/12 items-center justify-center text-gray-700 text-center m-10">
                                    <span class="block text-2xl font-bold uppercase mb-3">
                                        Congratulation!! {{-- $va_data['fullName'] --}}
                                    </span>
                                    {{-- <span class="block text-2xl font-bold uppercase mb-3">Hurry!!</span> --}}
                                    <span class="block text-base font-semibold uppercase mb-3">Promo Code Sent</span>
                                    <span class="block text-justify font-normal mb-3">
                                        A unique code has been sent to you via the details provided.
                                    </span>
                                    <span class="block text-justify font-normal mb-3">
                                        Kindly send us an Email via support@ghana.com or call 0302521694 / 0549281817 with your promo code and prospective service.
                                    </span>
                                    <span class="block text-justify font-normal">
                                        Thank you.
                                    </span>
                                </div>
                            <img src="{{ URL('storage/images/chris/christmas-bell-png-30822.png') }}" alt="christmas" class="flex w-fit h-32 object-cover ml-52 mt-72 absolute">

                    {{-- </div> --}}
                </div>
            </div>

        </div>
    </div>

</body>
</html>







{{-- you won
<br>
<br>
<br>

@if ($va_data)
    It was found
@else
    Sorry, Please try again
@endif

<br>
<br>
<br>


@foreach ($va_data as $data)
    {{ $data }}
@endforeach --}}