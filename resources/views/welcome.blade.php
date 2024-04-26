    @extends('layouts.base')
    @section('content')
        <link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">
        <div class="container mx-auto">
            <nav class="mt-11 flex flex-col items-center justify-center bg-white md:flex-row md:justify-between md:p-5">
                <div class="mb-4 sm:mb-0">
                    <h1 class="text-center text-4xl font-bold md:text-start">To-do List</h1>
                    <h2 class="text-center text-lg md:text-start">By Gerda SOWULO</h2>
                </div>
                <p id="dateContainer" class="mb-4 mr-0 text-center text-lg sm:mb-0 sm:p-5 md:mr-4">Now: Thu, 28 Maret 2024</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <button type="submit"
                        class="rounded-lg bg-[#00AFE7] px-5 py-3 text-lg text-white sm:p-5">Login</button>
                </form>
            </nav>
            <div class="container mx-auto mt-20 p-5 lg:mt-0 lg:px-96 lg:pb-80 lg:pt-52">
                <div class="rounded-2xl border border-[#616161] bg-white px-8 pb-8 drop-shadow">

                    <h1 class="mb-4 mr-4 text-4xl font-bold">Create</h1>
                    <form>
                        @csrf
                        <div class="mb-3.5">

                        </div>
                        <div class="mb-3.5">
                            <label for="textarea" class="mb-1 block text-lg text-gray-700">Judul</label>
                            <input type="textarea"
                                class="form-input w-full rounded-md border border-gray-300 p-2 drop-shadow" required>
                        </div>
                        <div class="mb-3.5">
                            <label for="date" class="mb-1 block text-lg text-gray-700">Deadline</label>
                            <input type="date"
                                class="form-input w-full rounded-md border border-gray-300 p-2 drop-shadow" required>
                        </div>
                        <div class="mb-3.5">
                            <label for="textarea" class="mb-1 block text-lg text-gray-700">deskripsi</label>
                            <div id="editor">
                                <input type="textarea"
                                    class="form-input w-full rounded-md border border-gray-300 p-2 drop-shadow" required>
                            </div>
                        </div>
                        <div class="col-span-1 mt-3 flex items-center justify-center">
                            <div class="px-auto rounded-[10px] bg-[#00AFE7]">
                                <button type="submit" class="rounded-lg bg-[#00AFE7] px-4 py-2 text-white">
                                    <p class="px-3 py-1 text-lg">Submit</p>
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
                placeholder: 'Compose an epic...',
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
