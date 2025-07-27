<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">{{ isset($gallery) ? 'Edit' : 'Tambah' }} Galeri</h2>
  </x-slot>

  <div class="py-4">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded shadow">
      <form action="{{ isset($gallery) ? route('galleries.update', $gallery->id) : route('galleries.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($gallery)) @method('PUT') @endif

        <div class="mb-4">
          <label class="block mb-1">Judul</label>
          <input type="text" name="title" class="w-full border rounded px-3 py-2" value="{{ old('title', $gallery->title ?? '') }}">
        </div>

        <div class="mb-4">
          <label class="block mb-1">Deskripsi</label>
          <textarea name="desc" class="w-full border rounded px-3 py-2">{{ old('desc', $gallery->desc ?? '') }}</textarea>
        </div>

        <div class="mb-4">
          <label class="block mb-1">Gambar</label>
          <p class="text-sm text-red-500 mb-1">Ukuran file 1024 x 768 px</p>
          <input type="file" name="file" class="w-full">
          @if(isset($gallery))
            <img src="{{ asset('storage/' . $gallery->file) }}" class="w-24 mt-2">
          @endif
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan</button>

      </form>
    </div>
  </div>
</x-app-layout>
