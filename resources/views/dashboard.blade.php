<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-2">Selamat datang di Halaman Manajemen Galeri Masjid Al-Bakrie</h3>
                    <p class="mb-4">Gunakan halaman ini untuk menambahkan, mengedit, atau menghapus galeri dan kegiatan masjid.</p>
                    <a href="{{ route('galleries.index') }}"
                        class="inline-block bg-[#091c3a] text-white px-4 py-2 mx-2 rounded hover:opacity-80 hover:scale-105 transition duration-200">
                        Kelola Galeri
                    </a>
                    <a href="{{ route('kegiatan.index') }}"
                        class="inline-block bg-[#091c3a] text-white px-4 py-2 mx-2 rounded hover:opacity-80 hover:scale-105 transition duration-200">
                        Kelola Kegiatan
                    </a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
