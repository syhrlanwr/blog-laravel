@extends('layouts.app')
@section('mytitle', 'Postingan Saya')
@section('content')
    {{-- <div class="w-4/6 px-6 pt-8 text-left m-auto">
        <a href="\blog\create">
            <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
              <i class="bi bi-plus-circle-fill"></i>
                Buat Postingan Baru
            </button>
        </a>
    </div>
    <div class=" w-4/5 py-10 m-auto">
        <table class="rounded-t-lg w-4/5 m-auto bg-gray-200 text-gray-800 text-center overflow-x-auto">
            <thead>
                <tr class="border-b-2 border-gray-300">
                    <th class="px-4 py-3">Judul</th>
                    <th class="px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    @if (Auth::user()->id == $post->user_id)
                        <tr class="bg-gray-100 border-b border-gray-200">
                            <td class="px-4 py-3">{{ $post->title }}</td>
                            <td class="px-4 py-3">
                                <div 
                                {{-- class="md:grid grid-cols-3 gap-0" --}}
    {{-- >
                                    <span class="">
                                        <a class="w-auto" href="\blog\{{ $post->slug }}">
                                            <button
                                                class="bg-green-500 hover:bg-green-700 text-white inline font-bold py-2 px-4 rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    <path fill-rule="evenodd"
                                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </a>
                                    </span>
                                    <span class="w-auto">
                                        <a href="\blog\{{ $post->slug }}\edit">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 inline text-white font-bold py-2 px-4 rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                    <path fill-rule="evenodd"
                                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </a>
                                    </span>
                                    <span class="w-auto">
                                        <form action="\blog\{{ $post->slug }}" method="POST" class="inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-700 inline text-white font-bold py-2 px-4 rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </form>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div> --}}

    @if (session()->has('message'))
        <div class="w-4/6 bg-green-100 m-auto border border-green-400 text-green-700 py-8 rounded relative"
            role="alert">
            <strong class="font-bold">{{ session()->get('message') }}</strong>
        </div>
    @endif
    <div class="w-4/5 m-auto py-6 sm:px-6">
        <div class="px-4 md:px-10 py-4 md:py-7 bg-gray-200 rounded-tl-lg rounded-tr-lg">
            <div class="sm:flex items-center justify-between">
                <p tabindex="0"
                    class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">
                    Postingan Saya</p>
                <div>
                    <a href="/blog/create"
                        class="inline-flex sm:ml-3 mt-4 sm:mt-0 items-start justify-start px-6 py-3 bg-indigo-500 hover:bg-indigo-700 rounded">
                        <p class="text-sm font-medium leading-none text-white"><svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 inline w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                    clip-rule="evenodd" />
                            </svg> Buat Postingan Baru</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-white shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
            <table class="w-full whitespace-nowrap text-center">
                <thead>
                    <tr tabindex="0" class="focus:outline-none h-16 w-full text-lg leading-none text-gray-800">
                        <th class="text-center font-semibold m-auto">Judul</th>
                        <th class="font-semibold m-auto text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="w-full">
                    @foreach ($posts as $post)
                        @if (Auth::user()->id == $post->user_id)
                            <tr tabindex="0"
                                class="focus:outline-none h-20 text-lg leading-none text-gray-800 bg-white hover:bg-gray-100 border-b border-t border-gray-100">
                                <td class="m-auto">
                                    <p class="font-medium">{{ $post->title }}</p>
                                </td>
                                <td class="m-auto">
                                    <span class="">
                                        <a class="w-auto" href="\blog\{{ $post->slug }}">
                                            <button
                                                class="bg-green-500 hover:bg-green-700 text-white inline font-bold py-2 px-4 rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    <path fill-rule="evenodd"
                                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </a>
                                    </span>
                                    <span class="w-auto">
                                        <a href="\blog\{{ $post->slug }}\edit">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 inline text-white font-bold py-2 px-4 rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                    <path fill-rule="evenodd"
                                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </a>
                                    </span>
                                    <span class="w-auto">
                                        <form action="\blog\{{ $post->slug }}" method="POST" class="inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-700 inline text-white font-bold py-2 px-4 rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </form>
                                    </span>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>




@endsection
