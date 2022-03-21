@extends('layouts.app')
@section('mytitle', 'Edit')
@section('content')
    <div class="w-10/12 m-auto py-6 sm:px-6">
        <div class="px-4 md:px-10 py-4 md:py-7 bg-gray-200 rounded-tl-lg rounded-tr-lg">
            <div class="sm:flex items-center justify-between">
                <p tabindex="0"
                    class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">
                    Edit</p>
            </div>
        </div>
        <div class="bg-white shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
            <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="text" name="title" value="{{ $post->title }}"
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 mb-2"
                    required>
                <textarea id="ckeditor" name="description" placeholder="Isi"
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full h-60 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 mb-2"
                    required>{{ $post->description }}</textarea>
                <div class="my-6">
                    <label for="file-upload"
                        class="w-64 items-center px-2 py-3 bg-transparent text-black shadow-lg border border-gray-300 rounded-lg cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="text-base leading-normal">Pilih gambar</span>
                        <input id="file-upload" type='file' name="image" class="hidden" onchange="loadFile(event)"/>
                    </label>
                    <span class="inline pl-3" id="file-name"></span>
                    <div class="w-4/5 py-8">
                        <img id="blah" src="{{ url('images/' . $post->image_path) }}" alt="">
                    </div>
                </div>

                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded mt-5">
                    Submit
                </button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('input[type="file"]').change(function(e) {
                var fileName = e.target.files[0].name;
                document.getElementById("file-name").innerHTML = fileName
            });
        });
        var loadFile = function(event) {
            var output = document.getElementById('blah');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };

    </script>
    <script src="//cdn.ckeditor.com/4.16.1/basic/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('ckeditor');

    </script>
@endsection
