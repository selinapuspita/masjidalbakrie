<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">Galeri</h2>
  </x-slot>

  <div class="py-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <a href="{{ route('galleries.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Gambar</a>

      <form method="GET" action="{{ route('galleries.index') }}" class="mb-4">
        <input 
            type="text" 
            name="search" 
            placeholder="Cari galeri..." 
            value="{{ request('search') }}"
            class="border rounded px-3 py-2 w-full sm:w-64"
        >
    </form>


      <ul class="space-y-4">
        @foreach($galleries as $index => $item)
        <li class="bg-white p-4 rounded shadow flex items-center space-x-4">
          <div class="w-6 font-bold text-gray-600">{{ ($galleries->currentPage() - 1) * $galleries->perPage() + $index + 1 }}.</div>
          <div>
            <a 
              href="{{ asset('storage/' . $item->file) }}" 
              class="glightbox" 
              data-gallery="gallery-items" 
              data-title="{{ $item->title }}" 
              data-description="{{ $item->desc }}">
              <img src="{{ asset('storage/' . $item->file) }}" class="w-24 h-16 object-cover rounded shadow" alt="{{ $item->title }}">
            </a>
          </div>
          <div class="flex-1">
            <h3 class="font-semibold text-gray-800">{{ $item->title }}</h3>
            <p class="text-gray-500 text-sm italic">
                Diunggah pada {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}
            </p>
            <p class="block md:hidden">
                {{ \Illuminate\Support\Str::limit($item->desc, 10) }}
            </p>
            <p class="hidden md:block">
             {{ \Illuminate\Support\Str::limit($item->desc, 100) }}
            </p>

          </div>
          <div class="flex items-center space-x-2">
            <a href="{{ route('galleries.edit', $item->id) }}" class="bg-yellow-400 text-white px-3 py-1 rounded text-sm hover:bg-yellow-500">Edit</a>
            <form action="{{ route('galleries.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
              @csrf @method('DELETE')
              <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded text-sm hover:bg-red-600">Hapus</button>
            </form>
          </div>
        </li>
        @endforeach
      </ul>
      <div class="mt-6">
        {{ $galleries->withQueryString()->links() }}
    </div>

    </div>
  </div>

  @push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
  <script>
    const lightbox = GLightbox({
      selector: '.glightbox'
    });
  </script>
  @endpush

  @push('styles')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
  @endpush
</x-app-layout>
