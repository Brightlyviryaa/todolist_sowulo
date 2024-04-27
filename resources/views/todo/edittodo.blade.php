@extends('layouts.base')
@section('content')
    <link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">
    <div class="container mx-auto">
        <nav class="bg-white flex md:justify-between justify-center items-center mt-11 md:flex-row flex-col md:p-5">
            <div class="sm:mb-0 mb-4">
                <h1 class="text-4xl font-bold md:text-start text-center">To-do List</h1>
                <h2 class="text-lg md:text-start text-center">By Gerda SOWULO</h2>
            </div>
            <p id="dateContainer" class="md:mr-4 mr-0 sm:p-5 text-lg text-center sm:mb-0 mb-4">Now: Thu, 28 Maret 2024</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <button type="submit" class="bg-[#00AFE7] text-white px-5 py-3 rounded-lg sm:p-5 text-lg">Login</button>
            </form>
        </nav>
        <div class="container mx-auto mt-20 p-5 lg:px-96 lg:pt-52 lg:pb-80 lg:mt-0">
            <div class="bg-white px-8 pb-8 border rounded-2xl border-[#616161] drop-shadow">

                <h1 class="font-bold text-4xl mb-4 mr-4">Edit Task </h1>
                <form>
                    <div class="mb-3.5">

                    </div>
                    <div class="mb-3.5">
                        <label for="judul" class="block text-gray-700 mb-1 text-lg">Judul</label>
                        <input type="textarea" class="form-input w-full border border-gray-300 rounded-md p-2 drop-shadow"
                            placeholder="To do list tutor gapot sowulo" required>
                    </div>
                    <div class="mb-3.5">
                        <label for="date" class="block text-gray-700 mb-1 text-lg">Deadline</label>
                        <input type="date" class="form-input w-full border border-gray-300 rounded-md p-2 drop-shadow"
                            required>
                    </div>
                    <div class="mb-3.5">
                        <label for="textarea" class="block text-gray-700 mb-1 text-lg">deskripsi</label>
                        <div id="editor">
                            <input type="textarea"
                                class="form-input w-full border border-gray-300 rounded-md p-2 drop-shadow" required>
                        </div>
                    </div>
                    <div class="col-span-1 flex justify-center items-center mt-3">
                        <div class="bg-[#00AFE7] px-auto rounded-[10px]">
                            <button type="submit" class="rounded-lg bg-[#00AFE7] text-white px-4 py-2">
                                <p class="text-lg px-3 py-1">Submit</p>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>





    <script src="/index.js"></script>
    <script>
        const quill = new Quill('#editor', {
            modules: {
                toolbar: [
                    [{
                        header: [1, 2, false]
                    }],
                    ['bold', 'italic', 'underline'],
                    ['image', 'code-block'],
                ],
            },
            placeholder: 'Lorem ipsum dolor sit amet consectetur. Lacus at neque nec proin vitae tempus eu et dignissim. ',
            theme: 'snow', // or 'bubble'
        });
    </script>


    <script>
        // Now: Thu, 28 Maret 2024
        let date = new Date();

        const dateContainer = document.querySelector("#dateContainer");

        let day
        switch (date.getDay()) {
            case 0:
                day = "Minggu"
                break
            case 1:
                day = "Senin"
                break
            case 2:
                day = "Selasa"
                break
            case 3:
                day = "Rabu"
                break
            case 4:
                day = "Kamis"
                break
            case 5:
                day = "Jumat"
                break
            case 6:
                day = "Sabtu"
                break
        }

        let month
        switch (date.getMonth()) {
            case 0:
                month = "Januari"
                break
            case 1:
                month = "Februari"
                break
            case 2:
                month = "Maret"
                break
            case 3:
                month = "April"
                break
            case 4:
                month = "Mei"
                break
            case 5:
                month = "Juni"
                break
            case 6:
                month = "Juli"
                break
            case 7:
                month = "Agustus"
                break
            case 8:
                month = "September"
                break
            case 9:
                month = "Oktober"
                break
            case 10:
                month = "November"
                break
            case 11:
                month = "Desember"
                break
        }

        let dateString = "Now: " + day + ", " + date.getDate() + " " + month + " " + date.getFullYear();
        dateContainer.innerHTML = dateString;
    </script>
@endsection