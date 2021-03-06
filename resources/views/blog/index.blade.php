@extends('layouts.app')
@section('mytitle', 'Blog')
@section('content')
    <div class="pt-2 relative w-4/6 mx-auto text-gray-600 text-right my-6">
        <form action="/search" method="GET">
            <input class="border-2 border-gray-300 bg-white w-full h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                type="search" name="search" placeholder="Cari">
            <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                    width="512px" height="512px">
                    <path
                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                </svg>
            </button>
        </form>
    </div>
    {{-- <div class="w-4/5 m-auto text-center">
        <div class="md:py-15 md:border-b border-gray-200">
            <h1 class="md:text-6xl font-bold mt-8">
                Blog Posts
            </h1>
        </div>
    </div>

    <div class="pt-2 relative w-4/6 mx-auto text-gray-600 text-right my-6">
        <form action="/search" method="GET">
            <input class="border-2 border-gray-300 bg-white w-full h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                type="search" name="search" placeholder="Cari">
            <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                    width="512px" height="512px">
                    <path
                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                </svg>
            </button>
        </form>
    </div>
    @if ($posts->isEmpty())
    Postingan tidak ditemukan.
    @else
        @foreach ($posts as $post)
            {{-- <div class="sm:grid grid-cols-2 w-4/6 m-auto my-5 bg-white rounded-3xl p-10 shadow-2xl">
            <div class="md:w-1/2">
                <img src="{{ url('images/' . $post->image_path) }}" width="500" alt="">
            </div>

            <div class="flex text-gray-800 sm:m-5 md:w-1/2">
                <div class="md:m-auto block md:w-10/12">
                    <span class="uppercase text-xl font-bold">{{ $post->title }}</span>
                    <span class="text-gray-500 block mt-2">
                        Oleh <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>,
                        {{ date('j F Y', strtotime($post->updated_at)) }}
                    </span>
                    <h3 class="py-10">
                        {{ substr(strip_tags($post->description), 0, 200) }}...
                    </h3>
                    <a href="\blog\{{ $post->slug }}"
                        class="uppercase bg-blue-500 text-gray-100 text-xs font-extrabold py-4 px-8 rounded-3xl hover:bg-blue-700">
                        Baca Selengkapnya
                    </a>

                </div>
            </div>
        </div> --}}

    {{-- <section class="p-8 w-4/6 m-auto bg-white rounded-3xl shadow-2xl">
                <div class="flex flex-wrap -mx-4">
                    <div class="md:w-1/2 px-4 mb-8 md:mb-0">
                        <img src="{{ url('images/' . $post->image_path) }}" class="m-auto" width="400" alt="">
                    </div>
                    <div class="md:w-1/2 px-4 mb-8  m-auto">
                        <div class="">
                            <span class="uppercase text-xl font-bold">{{ $post->title }}</span>
                            <span class="text-gray-500 block mt-2">
                                Oleh <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>,
                                {{ date('j F Y', strtotime($post->updated_at)) }}
                            </span>
                            <p class="py-10">
                                {{ substr(strip_tags($post->description), 0, 200) }}...
                            </p>
                            <a href="\blog\{{ $post->slug }}"
                                class="uppercase bg-blue-500 text-gray-100 text-xs font-extrabold py-4 px-8 rounded-3xl hover:bg-blue-700">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <div class="w-4/5 justify-center m-auto my-12">
                {{ $posts->links() }}
            </div>

        @endforeach
    @endif --}}
    @if ($posts->isEmpty())
    <h1 class="title-font text-lg text-center font-semibold uppercase text-gray-900">
        Postingan tidak ditemukan.
    </h1>
    @else
        @foreach ($posts as $post)

            <section class="text-gray-600 body-font py-5">
                <div class="container w-4/6 mx-auto">
                    <div class="flex flex-wrap -m-4">
                        <div class="p-4 md:w-full">
                            <div
                                class="h-full border-2 border-gray-200 shadow-lg border-opacity-60 rounded-lg overflow-hidden">
                                <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                    src="{{ url('images/' . $post->image_path) }}" alt="blog">
                                <div class="p-6">
                                    <h1 class="title-font text-lg font-semibold uppercase text-gray-900 mb-3">{{ $post->title }}</h1>
                                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1">Diposting
                                        oleh
                                        <span class="font-bold text-gray-600">{{ $post->user->name }}</span> |
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
                    </div>
                </div>
            </section>
        @endforeach
    @endif
@endsection
