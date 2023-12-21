<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    {{-- <h1 class="text-green-600">test text</h1> --}}
    <!-- nav -->
    <div class="google">
        <!-- header -->
        <div class="flex justify-between text-sm text-gray-700">
            <div class="flex items-center">
                <a class="block p-3">About</a>
                <a class="block p-3">Store</a>
            </div>
            <div class="flex items-center">
                <a class="block p-3">Gmail</a>
                <a class="block p-3">Images</a>
                <img class="rounded-full block py-3 px-4"
                    src="https://lh3.googleusercontent.com/-qKDxtPVf3MA/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rdxXjFhEvxN4q1JUHeo4xlUIanULA.CMID/s64-c/photo.jpg">
            </div>
        </div>

        <!-- main -->
        <div class="flex justify-center pt-20">
            <div>
                <img class="w-2/3 ml-auto mr-auto mb-6"
                    src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png">
                <div class="flex border border-gray-200 rounded-full p-4 shadow text-xl">
                    <input type="text" class="w-full outline-none px-3">
                    <div>🎤</div>
                </div>
                <div class="mt-8 text-center">
                    <button
                        class="mr-3 bg-gray-200 border border-gray-300 py-3 px-4 rounded hover:bg-gray-400 hover:border-gray-500">Google
                        Search</button>
                    <button
                        class="bg-gray-200 border border-gray-300 py-3 px-4 rounded hover:bg-gray-400 hover:border-gray-500">I'm
                        Feeling Lucky</button>
                </div>
            </div>
        </div>

        <!-- footer -->
        <div class="fixed bottom-0 bg-gray-200 border-t w-full flex justify-between text-gray-600 text-xs">
            <div class="flex">
                <a class="block p-3">Advertising</a>
                <a class="block p-3">Business</a>
                <a class="block p-3">How Search Works</a>
            </div>
            <div class="flex">
                <a class="block p-3">Privacy</a>
                <a class="block p-3">Terms</a>
                <a class="block p-3">Settings</a>
            </div>
        </div>
    </div>
    {{-- <div class="instagram">

        <nav class="border-b px-4 py-2 bg-white">
            <div class="flex flex-wrap items-center justify-between md:justify-around">
                <!-- logo -->
                <img class="h-10"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/150px-Instagram_logo.svg.png"
                    alt="instagram">

                <!-- search-->
                <div class="relative hidden sm:block text-gray-500">
                    <input
                        class="search-bar max-w-xs border rounded bg-gray-200 px-4
                  text-center outline-none focus:border-gray-400"
                        type="search" placeholder="Search">
                    <i class="fa fa-search absolute top-0 left-0 ml-12 mt-1"></i>
                </div>

                <div class="space-x-4">
                    <a class="inline-block bg-blue-500 px-2 py-1 text-white font-semibold 
                                 text-sm rounded"
                        href="#">Log In</a>
                    <a class="inline-block text-blue-500 font-semibold text-sm" href="#">Sign Up</a>
                </div>
            </div>
        </nav>

        <main class="bg-gray-100 bg-opacity-25">

            <div class="lg:w-8/12 lg:mx-auto mb-8">

                <header class="flex flex-wrap items-center p-4 md:py-8">

                    <div class="md:w-3/12 md:ml-16">
                        <!-- profile image -->
                        <img class="w-20 h-20 md:w-40 md:h-40 object-cover rounded-full
                           border-2 border-pink-600 p-1"
                            src="https://images.unsplash.com/photo-1502791451862-7bd8c1df43a7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80"
                            alt="profile">
                    </div>

                    <!-- profile meta -->
                    <div class="w-8/12 md:w-7/12 ml-4">
                        <div class="md:flex md:flex-wrap md:items-center mb-4">
                            <h2 class="text-3xl inline-block font-light md:mr-2 mb-2 sm:mb-0">
                                mrtravlerrr_
                            </h2>

                            <!-- badge -->
                            <span
                                class="inline-block fas fa-certificate fa-lg text-blue-500 
                                     relative mr-6 text-xl transform -translate-y-2"
                                aria-hidden="true">
                                <i
                                    class="fas fa-check text-white text-xs absolute inset-x-0
                                     ml-1 mt-px"></i>
                            </span>

                            <!-- follow button -->
                            <a href="#"
                                class="bg-blue-500 px-2 py-1 
                              text-white font-semibold text-sm rounded block text-center 
                              sm:inline-block block">Follow</a>
                        </div>

                        <!-- post, following, followers list for medium screens -->
                        <ul class="hidden md:flex space-x-8 mb-4">
                            <li>
                                <span class="font-semibold">136</span>
                                posts
                            </li>

                            <li>
                                <span class="font-semibold">40.5k</span>
                                followers
                            </li>
                            <li>
                                <span class="font-semibold">302</span>
                                following
                            </li>
                        </ul>

                        <!-- user meta form medium screens -->
                        <div class="hidden md:block">
                            <h1 class="font-semibold">Mr Travlerrr...</h1>
                            <span>Travel, Nature and Music</span>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                        </div>

                    </div>

                    <!-- user meta form small screens -->
                    <div class="md:hidden text-sm my-2">
                        <h1 class="font-semibold">Mr Travlerrr...</h1>
                        <span>Travel, Nature and Music</span>
                        <p>Lorem ipsum dolor sit amet consectetur</p>
                    </div>

                </header>

                <!-- posts -->
                <div class="px-px md:px-3">

                    <!-- user following for mobile only -->
                    <ul
                        class="flex md:hidden justify-around space-x-8 border-t 
                      text-center p-2 text-gray-600 leading-snug text-sm">
                        <li>
                            <span class="font-semibold text-gray-800 block">136</span>
                            posts
                        </li>

                        <li>
                            <span class="font-semibold text-gray-800 block">40.5k</span>
                            followers
                        </li>
                        <li>
                            <span class="font-semibold text-gray-800 block">302</span>
                            following
                        </li>
                    </ul>

                    <!-- insta freatures -->
                    <ul
                        class="flex items-center justify-around md:justify-center space-x-12  
                          uppercase tracking-widest font-semibold text-xs text-gray-600
                          border-t">
                        <!-- posts tab is active -->
                        <li class="md:border-t md:border-gray-700 md:-mt-px md:text-gray-700">
                            <a class="inline-block p-3" href="#">
                                <i class="fas fa-th-large text-xl md:text-xs"></i>
                                <span class="hidden md:inline">post</span>
                            </a>
                        </li>
                        <li>
                            <a class="inline-block p-3" href="#">
                                <i class="far fa-square text-xl md:text-xs"></i>
                                <span class="hidden md:inline">igtv</span>
                            </a>
                        </li>
                        <li>
                            <a class="inline-block p-3" href="#">
                                <i
                                    class="fas fa-user border border-gray-500
                                   px-1 pt-1 rounded text-xl md:text-xs"></i>
                                <span class="hidden md:inline">tagged</span>
                            </a>
                        </li>
                    </ul>
                    <!-- flexbox grid -->
                    <div class="flex flex-wrap -mx-px md:-mx-3">

                        <!-- column -->
                        <div class="w-1/3 p-px md:px-3">
                            <!-- post 1-->
                            <a href="#">
                                <article class="post bg-gray-100 text-white relative pb-full md:mb-6">
                                    <!-- post image-->
                                    <img class="w-full h-full absolute left-0 top-0 object-cover"
                                        src="https://images.unsplash.com/photo-1502791451862-7bd8c1df43a7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                        alt="image">

                                    <i class="fas fa-square absolute right-0 top-0 m-1"></i>
                                    <!-- overlay-->
                                    <div
                                        class="overlay bg-gray-800 bg-opacity-25 w-full h-full absolute 
                                      left-0 top-0 hidden">
                                        <div
                                            class="flex justify-center items-center 
                                          space-x-4 h-full">
                                            <span class="p-2">
                                                <i class="fas fa-heart"></i>
                                                412K
                                            </span>

                                            <span class="p-2">
                                                <i class="fas fa-comment"></i>
                                                2,909
                                            </span>
                                        </div>
                                    </div>

                                </article>
                            </a>
                        </div>

                        <div class="w-1/3 p-px md:px-3">
                            <a href="#">
                                <!-- post 2 -->
                                <article class="post bg-gray-100 text-white relative pb-full md:mb-6">
                                    <img class="w-full h-full absolute left-0 top-0 object-cover"
                                        src="https://images.unsplash.com/photo-1498409570040-05bf6d3dd5b5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                        alt="image">

                                    <!-- overlay-->
                                    <div
                                        class="overlay bg-gray-800 bg-opacity-25 w-full h-full absolute 
                                      left-0 top-0 hidden">
                                        <div
                                            class="flex justify-center items-center 
                                          space-x-4 h-full">
                                            <span class="p-2">
                                                <i class="fas fa-heart"></i>
                                                412K
                                            </span>

                                            <span class="p-2">
                                                <i class="fas fa-comment"></i>
                                                1,993
                                            </span>
                                        </div>
                                    </div>

                                </article>
                            </a>
                        </div>

                        <div class="w-1/3 p-px md:px-3">
                            <a href="#">
                                <article class="post bg-gray-100 text-white relative pb-full  md:mb-6">
                                    <img class="w-full h-full absolute left-0 top-0 object-cover"
                                        src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                        alt="image">
                                    <!-- overlay-->
                                    <div
                                        class="overlay bg-gray-800 bg-opacity-25 w-full h-full absolute 
                                      left-0 top-0 hidden">
                                        <div
                                            class="flex justify-center items-center 
                                          space-x-4 h-full">
                                            <span class="p-2">
                                                <i class="fas fa-heart"></i>
                                                112K
                                            </span>

                                            <span class="p-2">
                                                <i class="fas fa-comment"></i>
                                                2,090
                                            </span>
                                        </div>
                                    </div>
                                </article>
                            </a>
                        </div>

                        <div class="w-1/3 p-px md:px-3">
                            <a href="#">
                                <article class="post bg-gray-100 text-white relative pb-full md:mb-6">
                                    <img class="w-full h-full absolute left-0 top-0 object-cover"
                                        src="https://images.unsplash.com/photo-1533105079780-92b9be482077?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                        alt="image">

                                    <i class="fas fa-video absolute right-0 top-0 m-1"></i>

                                    <!-- overlay-->
                                    <div
                                        class="overlay bg-gray-800 bg-opacity-25 w-full h-full absolute 
                                      left-0 top-0 hidden">
                                        <div
                                            class="flex justify-center items-center 
                                          space-x-4 h-full">
                                            <span class="p-2">
                                                <i class="fas fa-heart"></i>
                                                841K
                                            </span>

                                            <span class="p-2">
                                                <i class="fas fa-comment"></i>
                                                909
                                            </span>
                                        </div>
                                    </div>

                                </article>
                            </a>
                        </div>

                        <div class="w-1/3 p-px md:px-3">
                            <a href="#">
                                <article class="post bg-gray-100 text-white relative pb-full md:mb-6">
                                    <img class="w-full h-full absolute left-0 top-0 object-cover"
                                        src="https://images.unsplash.com/photo-1475688621402-4257c812d6db?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80"
                                        alt="image">
                                    <!-- overlay-->
                                    <div
                                        class="overlay bg-gray-800 bg-opacity-25 w-full h-full absolute 
                                      left-0 top-0 hidden">
                                        <div
                                            class="flex justify-center items-center 
                                          space-x-4 h-full">
                                            <span class="p-2">
                                                <i class="fas fa-heart"></i>
                                                120K
                                            </span>

                                            <span class="p-2">
                                                <i class="fas fa-comment"></i>
                                                3,909
                                            </span>
                                        </div>
                                    </div>

                                </article>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div> --}}
</body>

</html>
