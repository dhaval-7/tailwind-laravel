@extends('layouts.app')
@section('main')
    <div class="py-20 h-screen bg-gray-300 px-2">
        <div class="max-w-md mx-auto rounded-lg overflow-hidden md:max-w-xl">
            <div class="md:flex">
                <div class="w-full p-3">

                    <div class="relative">
                        <i class="absolute fa fa-search text-gray-400 top-5 left-4"></i>
                        <input type="text" id="search-input" placeholder="Search..."
                            class="bg-white h-14 w-full px-12 rounded-lg focus:outline-none hover:cursor-pointer"
                            name="">
                        <span class="absolute top-4 right-5 border-l pl-4"><i
                                class="fa fa-microphone text-gray-500 hover:text-green-500 hover:cursor-pointer"></i></span>
                    </div>
                    {{-- @include('list') --}}
                    <ul id="search-results"> </ul>
                </div>
            </div>
        </div>

    </div>


    {{-- <div class="search-container mt-5">
        <input type="text" id="search-input" placeholder="Search...">
        <ul id="search-results"></ul>
    </div> --}}

    <!-- Add this inside the body of your HTML -->
    {{-- <li class="result-item">
        <span class="result-text"></span>
    </li> --}}
    <script type="text/template" id="result-template">

    <div class="py-1">
        <div class="hover:bg-gray-200 cursor-pointer bg-white shadow flex p-5 items-center mb-5 rounded-lg">
            <div class="w-1/2">
                <div class="flex items-center">
                    <img :src="contact.picture.thumbnail" class="rounded-full">
                    <div class="ml-4">
                        <span class="result-text" class="capitalize block text-gray-800">{{ $contact ?? 'test' }}</span>
                    </div>
                </div>
            </div>
        </div>
</script>
@endsection
