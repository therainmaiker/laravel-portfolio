<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PortFolio XD</title>

        <!-- Fonts -->
        <script src="https://kit.fontawesome.com/5f7e84bf6f.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="C:\Users\Youcode\Desktop\portfolio\resources\style.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link href="{{ asset('/css/css.css') }}" rel="stylesheet">


    </head>

<header>

    <nav>


        <section class="aw-header bg-white border-b border-gray-200 shadow-md">
          <header class="container mx-auto flex items-center justify-between flex-wrap px-2 py-4 lg:p-6 ">
            <div id="mobile-menu__toggler" class="block lg:hidden">
              <button id="mobile-menu__open" class="px-3 py-1 w-20 border rounded text-white bg-purple-700 border-transparent hover:bg-purple-900 transition">
                      Menu
                  </button>
              <button id="mobile-menu__close" class="hidden px-3 py-1 w-20 border rounded text-white bg-purple-700 border-transparent hover:bg-purple-900 transition">
                      Close
                  </button>
            </div>

            <div class="aw-header__logo flex items-center flex-shrink-0 text-purple-700 hover:text-purple-900 mx-2 lg:mr-6 order-1 transition ">
              <span>&#9760;</span>


              <span class="font-semibold text-lg tracking-tight">PortfoLio</span>
            </div>

            <nav id="mobile-menu__items" class="aw-header__nav hidden w-full block flex-grow lg:flex lg:items-center lg:w-auto order-3 lg:order-2">
              <ol class="text-lg lg:flex-grow lg:flex lg:justify-around">
                <li class="block mb-4 mt-3 lg:inline-block lg:mb-0 lg:mt-0 mr-4">
                  <a href="/about" class="text-gray-700 hover:text-gray-900 transition">About</a>
                </li>




                <li class="block mb-4 lg:inline-block lg:mb-0 mr-4">
                  <a href="#responsive-header" class="text-gray-700 hover:text-gray-900 transition">Products & Testimonials</a>
                </li>

                <li class="block lg:inline-block lg:mb-0 mr-4">
                  <a href="/contact" class="text-gray-700 hover:text-gray-900 transition">Contact</a>
                </li>
              </ol>
            </nav>

            <div class="flex order-2">


              </div>
            </div>
          </header>
        </section>


    </nav>


</header>



<body>





</body>

<footer>

    <div class="section-footer container mx-auto px-4">
        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4">
            <h4 class="text-3xl font-semibold">Let's keep in touch!</h4>
            <h5 class="text-lg mt-0 mb-2 text-gray-700">
              Find us on any of these platforms, we respond 1-2 business days.
            </h5>
            <div class="mt-6">
              <a class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3" type="button" href="#">
                <i class="flex fab fa-twitter" aria-hidden="true"></i></a><a class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3" type="button" href="#">
                <i class="flex fab fa-facebook-square" aria-hidden="true"></i></a><a class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3" type="button" href="#">
                                    <i class="flex fab fa-facebook-square" aria-hidden="true"></i></a><button class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3" type="button" href="#">

                <i class="flex fab fa-github" aria-hidden="true"></i>
              </button>
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="flex flex-wrap items-top mb-6">
              <div class="w-full lg:w-4/12 px-4 ml-auto">
                <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Useful Links</span>
                <ul class="list-unstyled">
                  <li>
                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="/about">Products & Testimonials</a>
                  </li>

                  <li>
                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://www.github.com/therainmaiker">Github</a>
                  </li>

                </ul>
              </div>

            </div>
          </div>
        </div>
        <hr class="my-6 border-gray-400">
        <div class="flex flex-wrap items-center md:justify-between justify-center">
          <div class="w-full md:w-4/12 px-4 mx-auto text-center">

          </div>
        </div>
      </div>




    <script src="{{ asset('js/js.js') }}" ></script>
</footer>
</html>

