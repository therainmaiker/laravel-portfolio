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




        <section class="aw-header bg-white border-b border-gray-200 shadow-md navbar">
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





</header>

    <body>

        <section class="sectionx relative block py-24 lg:pt-0 bg-gray-900">
            <div class="container mx-auto px-4">
              <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300">
                    <div class="flex-auto p-5 lg:p-10">
                      <h4 class="text-2xl font-semibold">Want to work with us?</h4>
                      <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                        Complete this form and we will get back to you in 24 hours.
                      </p>
                      <div class="relative w-full mb-3 mt-8">
                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="full-name">Full Name</label><input type="text" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Full Name" style="transition: all 0.15s ease 0s;">
                      </div>
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="email">Email</label><input type="email" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Email" style="transition: all 0.15s ease 0s;">
                      </div>
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="message">Message</label><textarea rows="4" cols="80" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Type a message..."></textarea>
                      </div>
                      <div class="text-center mt-6">
                        <button class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all 0.15s ease 0s;">
                          Send Message
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          {{-- ---- End of Contact page ---- --}}

    </body>


    <footer>
        <script src="{{ asset('js/js.js') }}" ></script>
    </footer>

</html>
