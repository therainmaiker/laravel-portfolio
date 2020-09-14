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


{{-- start of navbar  --}}

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

   {{-- the end of navbar with toggle --}}



<body>


    <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
        <div class="absolute top-0 w-full h-full bg-center bg-cover background-img"
        >
          <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
          {{-- oppacity image dark --}}
        </div>
        <div class="container relative mx-auto">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
              <div class=" text-about-me">
                <h1 class="text-white font-semibold text-5xl">
                  Your story starts with us.
                </h1>
                <p class="mt-4 text-lg text-gray-300">
                  I am a web developer from Morocco . I enjoy building everything from small business sites to rcih interactive web apps ,
                   if you are a business seeking a web presence or an employer looking to hire n you ca get in touch with me here.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden" style="height: 70px; transform: translateZ(0px);">
          <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </div>


<section class=" my-hub ">


  <div class="flex flex-wrap">





    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-6 text-center">
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
        <div class="px-4 py-5 flex-auto">
          <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
            <i class="fas fa-award"></i>
          </div>
          <h6 class="text-xl font-semibold">Experience</h6>
          <h5 class="text-l font-semibold">Infographic Design</h5>
          <p class="mt-2 mb-4 text-gray-600">
            working on the creation of infographics and data visualisation projects. we creates data-driven visual content and reports for consumers
          </p>
        </div>
      </div>
    </div>








    <div class="sectionp-rojects w-full h-48 md:w-4/12 px-6 text-center">
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
        <div class="px-4 py-5 flex-auto">
          <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
            <i class="fas fa-retweet"></i>
          </div>
          <h6 class="text-xl font-semibold">Education</h6>
          <h5 class="text-l font-semibold">Youcode University</h5>
          <p class="mt-2 mb-4 text-gray-600">
            responsible for server-side web application logic and integration of the work front-end developers do.
             Back-end developers are usually write the web services and APIs used by front-end developers and mobile application developers


          </p>
        </div>
      </div>
    </div>





    <div class="pt-6 w-full md:w-4/12 px-6 text-center">
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
        <div class="px-4 py-5 flex-auto">
          <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
            <i class="fas fa-fingerprint"></i>
          </div>
          <h6 class="text-xl font-semibold">About me</h6>
          <h5 class="text-l font-semibold">Who AM I?</h5>
          <p class="mt-2 mb-4 text-gray-600">
            Well-organised person, problem solver, independent employee with high attention to detail. Fan of MMA, outdoor activities,
            TV series and, recently, English literature. A family person, father of two fractious boys, therefore remote employment is preferred.
          </p>
        </div>
      </div>
    </div>




  </div>







</section>




{{--
end of Section 2 --}}










    <section class="pb-20 relative block bg-gray-900">



        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px; transform: translateZ(0px);">
          <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
{{-- polygon --}}


        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">


          <div class="flex flex-wrap text-center justify-center">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold text-white">Build something?</h2>
              <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                if you are looking for web developer you are in the right place :)
              </p>
            </div>
          </div>
          <div class="flex flex-wrap mt-12 justify-center">
            <div class="w-full lg:w-3/12 px-4 text-center">
              <div class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                <i class="fas fa-medal text-xl"></i>
              </div>
              <h6 class="text-xl mt-5 font-semibold text-white">
               EXAMPLE
              </h6>
              <p class="mt-2 mb-4 text-gray-500">
                EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE
              </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
              <div class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                <i class="fas fa-poll text-xl"></i>
              </div>
              <h5 class="text-xl mt-5 font-semibold text-white">
                EXAMPLE
              </h5>
              <p class="mt-2 mb-4 text-gray-500">
                EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE
              </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
              <div class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                <i class="fas fa-lightbulb text-xl"></i>
              </div>
              <h5 class="text-xl mt-5 font-semibold text-white">EXAMPLE</h5>
              <p class="mt-2 mb-4 text-gray-500">
                EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE
              </p>
            </div>
          </div>
        </div>
      </section>




{{--
end of sectionprojects --}}

<section class="section-contact">


    <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
        <div class="w-full lg:w-6/12 px-4">
          <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300">
            <div class="flex-auto p-5 lg:p-10">
              <h4 class="text-2xl font-semibold">Want to work with us?</h4>
              <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                Complete this form and we will get back to you in 24 hours.
              </p>
              <div class="relative w-full mb-3 mt-8">
                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="full-name">Full Name</label>
                <input type="text" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Full Name" style="transition: all 0.15s ease 0s;">
              </div>
              <div class="relative w-full mb-3">

                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="email">Email</label>

            <input type="email" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Email" style="transition: all 0.15s ease 0s;">

        </div>
              <div class="relative w-full mb-3">

                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="message">Message</label>
                <textarea rows="4" cols="80" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Type a message..."></textarea>
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



</section>
{{--
------ end Contact Section ----- --}}

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
