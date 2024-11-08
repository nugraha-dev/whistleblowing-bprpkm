<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Whistleblowing Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="bg-gray-100 py-10 px-4">
            <div class="max-w-2xl mx-auto bg-white p-8 shadow-lg border border-gray-300 rounded-md">
                <!-- Header -->
                <div class="text-center">
                    <h1 class="text-2xl font-bold text-gray-900 mb-2">Laporan Whistleblowing System</h1>
                    <p class="text-sm text-gray-600">Nomor: WBS/{{ $data->created_at->format('Y') }}/{{ $data->id }}</p>
                    <p class="text-sm text-gray-600">Tanggal: {{ $data->created_at }}</p>
                </div>

                <hr class="my-6 border-gray-300">

                <!-- Informasi Pelapor -->
                <section>
                    <h2 class="text-lg font-semibold text-gray-800 mb-3">Informasi Yang Dilaporkan</h2>
                    <p class="text-gray-700 mb-1">Nama: {{ $data->pic }}</p>
                    <p class="text-gray-700 mb-1">Cabang: {{ $data->cabang }}</p>
                    <p class="text-gray-700 mb-1">File:
                        @if ($data->file)
                        <a href="{{ $data->file }}" target="__blank"><i class="fas fa-download"></i></a>
                        @else
                        -
                        @endif
                    </p>
                </section>

                <hr class="my-6 border-gray-300">

                <!-- Judul dan Isi Laporan -->
                <section>
                    {{-- <h2 class="text-lg font-semibold text-gray-800 mb-3">Judul Laporan</h2>
                    <p class="text-gray-900 font-bold mb-4">Penyalahgunaan Dana Perusahaan</p> --}}

                    <h2 class="text-lg font-semibold text-gray-800 mb-3">Isi Laporan</h2>
                    <p class="text-gray-700 leading-relaxed">
                        {{ $data->perihal }}
                    </p>
                </section>

                <hr class="my-6 border-gray-300">

                <!-- Penutup -->
                <section class="text-gray-700">
                    <p>Hormat Kami,</p>
                    <p class="mt-4 font-bold">Anonymous</p>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
