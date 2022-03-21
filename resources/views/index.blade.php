@extends('layouts.app')
@section('mytitle', 'myBlog')
@section('content')
    {{-- <div class="grid h-4/5 w-full grid-cols-1 m-auto" style="background-image: url('https://cdn.pixabay.com/photo/2017/07/31/23/45/pen-2562078_1280.jpg');
                                background-position: center center;
                                background-repeat: no-repeat;
                                background-attachment: fixed;
                                background-size: cover;">
        <section class="text-white w-4/6 mx-auto body-font">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div
                    class="lg:flex-grow lg:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-bold uppercase text-gray-100">Buat blogmu sendiri
                        dengan
                        sangat mudah
                    </h1>
                    <p class="mb-8 leading-relaxed text-gray-300">Nikmati kemudahan membuat blog di website kami. Kamu dapat
                        membagikan apapun
                        disini dengan siapapun, kapanpun dan dimanapun kamu berada.@guest Tunggu apa lagi? Daftar sekarang!
                        </p>
                        <div class="flex justify-center">
                            <a href="/register"
                                class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Daftar</a>
                            <a href="/login"
                                class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Login</a>
                        @else
                            <div class="flex justify-center">
                                <a href="/blog/create"
                                    class="inline-block text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd"
                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Buat Postingan Baru
                                </a>
                            @endguest
                        </div>
                    </div>
                </div>
        </section>
    </div> --}}
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="relative bg-white shadow-lg mb-16">
        <div class="max-w-7xl">
            <div class="relative z-10 pb-4 bg-white sm:pb-12 md:pb-26 lg:max-w-2xl lg:w-full lg:pb-24 xl:pb-28">
                <main class="mx-auto max-w-7xl px-4 bg-white py-7 sm:px-6">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Buat blogmu sendiri
                                dengan</span>
                            <span class="text-indigo-600">
                                sangat mudah</span>
                        </h1>

                        @guest
                            <p
                                class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                Nikmati kemudahan membuat blog di website kami. Kamu dapat
                                membagikan apapun
                                disini dengan siapapun, kapanpun dan dimanapun kamu berada. Tunggu apa lagi? Daftar sekarang!
                            </p>
                        @else
                            <p
                                class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                Nikmati kemudahan membuat blog di website kami. Kamu dapat
                                membagikan apapun
                                disini dengan siapapun, kapanpun dan dimanapun kamu berada.
                            </p>
                        @endguest

                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            @guest
                                <div class="rounded-md shadow">
                                    <a href="/register"
                                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                        Daftar
                                    </a>
                                </div>
                                <div class="mt-3 sm:mt-0 sm:ml-3">
                                    <a href="/login"
                                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                        Login
                                    </a>
                                </div>
                            @else
                                <div class="rounded-md shadow">
                                    <a href="/register"
                                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                            <path fill-rule="evenodd"
                                                d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Buat Postingan Baru
                                    </a>
                                </div>
                            @endguest
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849825_960_720.jpg" alt="">
        </div>
    </div>







    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="w-4/5 m-auto">
        <div class="min-w-0">
            <h2 class="text-2xl font-bold text-gray-900 sm:text-3xl md:text-center">
                Postingan Terbaru
            </h2>
        </div>
    </div>
    
    <section class="text-gray-600 my-12 body-font">
        <div class="container px-5 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach ($posts as $post)
                    <div class="p-4 md:w-1/3">
                        <div
                            class="h-full border-2 border-gray-200 shadow-lg border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                src="{{ url('images/' . $post->image_path) }}" alt="blog">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-semibold uppercase text-gray-900 mb-3">
                                    {{ $post->title }}</h1>
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1">Diposting
                                    oleh
                                    <span class="font-bold text-gray-600">{{ $post->user->name }}</span>,
                                    {{ date('j F Y', strtotime($post->updated_at)) }}
                                </h2>
                                <p class="leading-relaxed mb-3">
                                    {{ substr(strip_tags($post->description), 0, 200) }}...</p>
                                <div class="flex justify-end flex-wrap ">
                                    <a href="/blog/{{ $post->slug }}"
                                        class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Baca
                                        Selengkapnya
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="text-center my-12">
        <a href="/blog" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-3xl">
            Lihat postingan lainnya <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
    </div>
@endsection
