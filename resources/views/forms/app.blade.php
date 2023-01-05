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
  <form action="/user" method="post"> 
    @csrf
    <div class="bg-blue-50 flex items-center justify-center h-screen">
      {{-- <div class="container px-5 lg:px-0 h-screen lg:h-screen-75 lg:bg-white w-full lg:w-4/5 lg:border border-gray-300 rounded-3xl flex flex-wrap lg:flex-nowrap group"> --}}
      {{-- <div class="container px-5 lg:px-0 h-screen lg:h-2/3 lg:bg-white w-full lg:w-2/3 lg:border border-gray-300 rounded-3xl flex flex-wrap lg:flex-nowrap group"> --}}
      {{-- <div class="container px-5 lg:px-0 h-screen lg:h-2/3 lg:bg-white w-full lg:w-3/5 lg:border border-gray-300 rounded-3xl flex flex-wrap lg:flex-nowrap group"> --}}
      <div class="container px-5 lg:px-0 h-screen lg:h-2/3 lg:bg-white w-full lg:w-6/12 lg:border border-gray-300 rounded-3xl flex flex-wrap lg:flex-nowrap group">
        
        {{-- product side --}}
        {{-- <div class="w-full lg:w-9/12 bg-transparent rounded-3xl lg:bg-theme-yellow-dark flex order-2 lg:order-1"> --}}
        {{-- <div class="w-full lg:w-7/12 bg-transparent rounded-3xl lg:bg-theme-blue-dark flex order-2 lg:order-1"> --}}
        <div class="w-full lg:w-6/12 lg:mr-8 bg-transparent rounded-3xl lg:bg-theme-blue-dark flex order-2 lg:order-1">

          <div class="product flex items-end justify-center w-full lg:h-full absolute left-0 bottom-0 lg:relative">

            <div class="uppercase font-black text-7xl lg:flex items-center justify-center w-full h-full absolute left-0 top-0 hidden">
              <span class="transform -rotate-90 whitespace-nowrap w-full h-full flex items-start justify-center text-yellow-300 tranform transition-all duration-500 ease-in-out translate-x-20 opacity-0 group-hover:opacity-100 group-hover:translate-x-32">
                GDC dec PROMO
              </span>
            </div>

            {{-- <img src="{{ URL('storage/images/chris/1.png') }}" alt="disc_promo" class="h-[500px] 2xl:h-[800px] object-cover transform group-hover:translate-x-20 lg:group-hover:translate-x-32 transition-all duration-500 ease-in-out opacity-50 lg:opacity-100 -ml-20 lg:ml-0"> --}}
            {{-- <img src="{{ URL('storage/images/chris/santa-claus-mrs-claus.png') }}" alt="discount_promo" class="h-[500px] 2xl:h-[600px] object-cover transform group-hover:translate-x-20 lg:group-hover:translate-x-32 transition-all duration-500 ease-in-out opacity-50 lg:opacity-100 -ml-20 lg:ml-0"> --}}
            <img src="{{ URL('storage/images/chris/santa-claus-mrs-claus.png') }}" alt="discount_promo" class="hidden lg:flex h-[500px] 2xl:h-[500px] object-cover opacity-50 lg:opacity-100 -ml-20 lg:ml-64 lg:max-w-none">
            <img src="{{ URL('storage/images/chris/png-transparent-santa-claus-christmas.png') }}" alt="discount_promo" class="lg:hidden w-full object-cover opacity-50">
            <div class="w-full h-6 bg-black absolute lg:bottom-10 lg:left-14 bg-opacity-25 filter blur"></div>
          
          </div>
          {{-- product itself --}}


          {{-- <div class="w-32 bg-red-500 h-full ml-auto hidden lg:block"> --}}
          {{-- <div class="w-20 bg-white h-full ml-auto hidden lg:block"> --}}
          <div class="w-32 bg-white -ml-[90px] h-full hidden lg:block">
          </div>
        </div>
        {{-- end product side --}}

        {{-- form side --}}
        
          <div class="w-full lg:w-1/2 -mr-10 lg:-mt-14 order-1 lg:order-2">
            <div class="form-wrapper flex items-center justify-center relative z-2">
              <div class="w-full space-y-5">

                <img src="{{ URL('storage/images/comp/dot_com.png') }}" alt="gdc_logo" class="block w-1/2 ml-20 mt-16 mb-10 h-[160px] lg:h-[200px] object-cover rounded-full lg:bg-slate-100 shadow-md lg:w-1/2 lg:mb-7 lg:-mt-10 lg:ml-10">
              
              {{-- <div class="block w-full lg:w-4/5 form-caption text-gray-700 text-center mb-10 pt-16 lg:pt-16">
                <span class="block text-2xl font-semibold">GHANA DOT COM LTD.</span>
                <span class="block text-sm">Promo Form</span>
              </div> --}}
              
              {{-- form captions --}}
              <div class="form-element">

                <label class="block w-full lg:w-4/5">
                  <span class="text-gray-700 text-sm font-bold mb-2 @error('fullName') text-red-500 @enderror" for="fullName">Full Name</span>
                  <span>
                    <input type="text" placeholder="Obi Baa" name="fullName" class="shadow appearance-none @error('fullName') border-red-500 @enderror w-full p-2 border border-blue-200 rounded-lg leading-tight focus:outline-none active:outline-none focus:border-blue-500 active:border-blue-500">
                  </span>
                  <span class="text-red-600 italic border-red-500">
                    @error("fullName")
                      {{ $message }}
                    @enderror
                  </span>
                </label>
              </div>
              {{-- form captions --}}
              <div class="form-element">

                <label class="block w-full lg:w-4/5">
                  <span class="text-gray-700 text-sm font-bold mb-2 @error('email') text-red-500 @enderror" for="email">Email</span>
                  <span>
                    <input type="email" placeholder="obibaa@ghana.com" name="email" class="shadow appearance-none @error('email') border-red-500 @enderror w-full p-2 border border-blue-200 rounded-lg leading-tight focus:outline-none active:outline-none focus:border-blue-500 active:border-blue-500">
                  </span>
                  <span class="text-red-600 italic">
                    @error("email")
                      {{ $message }}
                    @enderror
                  </span>
                </label>
              </div>
              {{-- form element --}}

              <div class="form-element">

                <label class="block w-full lg:w-4/5">
                  <span class="text-gray-700 text-sm font-bold mb-2 @error('phoneNumber') text-red-500 @enderror" for="phoneNumber">Phone Number</span>
                  <span>
                    <input type="number" placeholder="0245557777" name="phoneNumber" class="shadow appearance-none @error('phoneNumber') border-red-500 @enderror w-full p-2 border border-blue-200 rounded-lg leading-tight focus:outline-none active:outline-none focus:border-blue-500 active:border-blue-500">
                  </span>
                  <span class="text-red-600 italic">
                    @error("phoneNumber")
                      {{ $message }}
                    @enderror
                  </span>
                </label>
              </div>

              {{-- form element

              <div class="form-element">

                <label class="block w-full lg:w-4/5">
                  <span>Password</span>
                  <span>
                    <input type="password" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none active:outline-none focus:border-gray-500 active:border-gray-500">
                  </span>  
                </label>
              </div>
              

              <div class="form-element flex items-center justify-between w-full lg:w-4/5">
                <label class="flex items-center justify-start space-x-1">
                  <span>
                    <input type="checkbox">
                  </span>  
                  <span>Remember Me</span>
                </label>
                
                <div class="">
                  <a href="#" class="border-b border-gray-300 hover:border-gray-500">Forgot password?</a>
                </div>
                
              </div>
              form element --}}
              
              <div class="form-element w-full lg:w-4/5">
                <input type="submit" class="shadow-md w-full bg-theme-yellow p-2 border border-theme-yellow hover:bg-theme-yellow-dark transition-all rounded focus:outline-none active:outline-none focus:bg-theme-yellow-dark active:bg-theme-yellow-dark">
              </div>
              {{-- form element --}}

              
            </div>
          </div>
        </div>
        {{-- end form side --}}
      </div>
    </div>
  </form>
</body>
</html>