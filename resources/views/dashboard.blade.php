<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMi5KNL3U8Vmo/Cg8YFVxLe4D8oklB8C7pMZxf" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-2xl text-gray-900 dark:text-gray-100">
                    {{ __("Data Laporan") }}
                </div>

                @if($data->isNotEmpty())
                <div class="overflow-x-auto mt-4">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr>
                                <th class="py-3 px-6 text-left">{{ __("PIC") }}</th>
                                <th class="py-3 px-6 text-left">{{ __("Cabang") }}</th>
                                <th class="py-3 px-6 text-left">{{ __("Perihal") }}</th>
                                <th class="py-3 px-6 text-left">{{ __("File") }}</th>
                                <th class="py-3 px-6 text-left">{{ __("Aksi") }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6">{{ $item->pic }}</td>
                                <td class="py-3 px-6">{{ $item->cabang }}</td>
                                <td class="py-3 px-6">{{ Str::limit($item->perihal, 5) }}</td>
                                <td class="py-3 px-6">
                                    @if($item->file)
                                    <a href="{{ asset('uploads/whistleblowing/' . $item->file) }}"
                                        class="text-blue-500 underline" target="_blank">{{ __("View") }} <i
                                            class="fas fa-file-alt"></i></a>
                                    @else
                                    {{ __("-") }} <i class="fas fa-file-alt"></i>
                                    @endif
                                </td>
                                <td class="py-3 px-6">
                                    <!-- Tombol untuk melihat detail -->
                                    <a href="{{ route('whistleblowing.show', $item->id) }}"
                                        class="text-blue-500 underline">{{ __("View") }}</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="p-10 mt-4">
                    {{ $data->links() }}
                </div>
                @else
                <div class="p-4 text-center text-gray-500">
                    Tidak ada data yang ditemukan.
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
