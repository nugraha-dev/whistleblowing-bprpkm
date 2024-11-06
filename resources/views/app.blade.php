<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whistleblowing System</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    {{-- notiflix --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notiflix@3.2.5/dist/notiflix-3.2.5.min.css">
    <script src="https://cdn.jsdelivr.net/npm/notiflix@3.2.5/dist/notiflix-aio-3.2.5.min.js"></script>

</head>

<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-blue-600 text-white py-6">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold">Whistleblowing System</h1>
            <p class="text-sm mt-2">Laporkan pelanggaran secara rahasia dan aman.</p>
        </div>
    </header>

    <!-- Notifikasi untuk sukses -->
    <!-- Success Notification -->
    @if(session('success'))
    <script>
        Notiflix.Notify.init({
             closeButton: true,  // Adds close button
         });
         Notiflix.Notify.success("{{ session('success') }}");
    </script>
    @endif

    <!-- Error Notifications -->
    @if($errors->any())
    <script>
        Notiflix.Notify.init({
             closeButton: true,  // Adds close button
         });
         @foreach ($errors->all() as $error)
             Notiflix.Notify.failure("{{ $error }}");
         @endforeach
    </script>
    @endif


    <!-- Main Form -->
    <main class="container mx-auto p-6 mt-8">
        <div class="flex flex-wrap justify-between">
            <div class="hidden md:flex md:w-5/12">
                <div class="flex justify-center items-center h-full w-full">
                    <img class="" src="{{ asset('img/wishtleblowing.png') }}" alt="" width="350">
                </div>
            </div>


            <div class="w-full md:w-7/12 p-6 bg-white shadow-lg rounded-lg">
                <h2 class="text-2xl font-semibold text-center mb-6">Formulir Pelaporan</h2>
                <form action="{{ route('send') }}" method="post" class="space-y-4 max-w-2xl mx-auto">
                    @csrf
                    <!-- Name (Optional) -->
                    <div class="grid md:grid-cols-2 gap-4 xl:gap-8">
                        <div class="">
                            <label for="name" class="mb-1 md:mb-2 block text-gray-700 font-medium">Nama Pihak Yang
                                Dilaporkan</label>
                            <input name="pic" type="text" id="nama"
                                class="w-full p-2 rounded-md border focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="nama pihak yang dilaporkan">
                        </div>

                        <!-- Email -->
                        <div class="">
                            <label for="email" class="mb-1 md:mb-2 block text-gray-700 font-medium">Cabang</label>
                            <input name="cabang" type="text" id="cabang"
                                class="w-full p-2 rounded-md border focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Cabang">
                        </div>

                    </div>
                    <div class="grid gap-4 xl:gap-4">

                        <div class="">
                            <label for="email" class="mb-1 md:mb-2 block text-gray-700 font-medium">File</label>
                            <input name="attachment" type="file" id="file"
                                class="w-full p-2 rounded-md border focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Email Anda">
                        </div>
                        <div class="">

                            <label for="description"
                                class="mb-1 md:mb-2 block text-gray-700 font-medium">Perihal</label>
                            <textarea name="perihal" id="description" rows="4"
                                class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Deskripsikan detail pelanggaran yang ingin Anda laporkan"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit"
                                class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500">Kirim
                                Laporan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4 mt-8">
        <p class="text-sm">© 2024 Whistleblowing System <a class="hover:text-blue-200 text-blue-400"
                href="https://www.bprpkm.co.id/">BPRPKM.</a> All rights
            reserved.</p>
    </footer>

</body>

</html>
