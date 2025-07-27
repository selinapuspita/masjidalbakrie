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
                    <p class="mb-4">Gunakan halaman ini untuk menambahkan, mengedit, atau menghapus foto-foto kegiatan masjid.</p>
                    <a href="{{ route('galleries.index') }}"
                       class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                        Kelola Galeri
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
