@extends('layouts.base')
@section('content')
    <div class="container mx-auto">
        <nav class="bg-white flex md:justify-between justify-center items-center mt-11 md:flex-row flex-col md:p-5">
            <div class="sm:mb-0 mb-4">
                <h1 class="text-4xl font-bold md:text-start text-center">To-do List</h1>
                <h2 class="text-lg md:text-start text-center">By Gerda SOWULO</h2>
            </div>
            <p id="dateContainer" class="md:mr-4 mr-0 sm:p-5 text-lg text-center sm:mb-0 mb-4">Now: Thu, 28 Maret 2024</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <button type="submit" class="bg-[#00AFE7] text-white px-5 py-3 rounded-lg sm:p-5 text-lg">Register</button>
            </form>
        </nav>
        <div class="container mx-auto mt-20 p-5 lg:px-96 lg:pt-52 lg:pb-80 lg:mt-0">
            <div class="bg-white px-8 py-4 border-2 rounded-2xl border-[#616161] drop-shadow">
                <h1 class="font-bold text-4xl mb-4">Show List </h1>
                <p class="text-sm">Open: 28 Maret 2024</p>
                <p class="text-sm">Due: 1 May 2024</p>
            </div>

            <button type="submit" class="rounded-lg bg-white border border-gray-300 text-[#00AFE7] px-5 py-3">
                <p class="text-sm">Mark As Done</p>
            </button>
            <p><strong>Lorem ipsum dolor sit amet consectetur.</strong> Lacus at neque nec proin vitae tempus eu et
                dignissim. Vel purus arcu nunc egestas enim. Morbi adipiscing dignissim tincidunt turpis eget morbi aliquet
                eu fames. Mauris aliquet nullam mi imperdiet nunc porta sem enim sit. Feugiat posuere tempus cursus elit
                diam et sit gravida. Donec est fermentum congue tincidunt dignissim risus adipiscing pharetra habitant.
                Posuere neque senectus semper parturient varius. Nulla amet commodo lobortis risus et rhoncus. Sed placerat
                neque non aliquet. Lacus sed aliquet volutpat convallis neque rutrum. Leo integer massa mauris lorem
                malesuada. Non blandit viverra magna velit ullamcorper. Feugiat quis sollicitudin sit pharetra viverra.
                Velit mollis ut iaculis leo venenatis.</p>


        </div>
    </div>
    </div>

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
