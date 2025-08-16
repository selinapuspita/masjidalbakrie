<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">Jadwal Kegiatan Masjid</h2>
  </x-slot>

  <div class="py-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <!-- Add success message display -->
      @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
          {{ session('success') }}
        </div>
      @endif
      <!-- Error message display for completeness -->
      @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      
      <a href="{{ route('kegiatan.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Kegiatan</a>

      <form method="GET" action="{{ route('kegiatan.index') }}" class="mb-4">
        <input 
            type="text" 
            name="search" 
            placeholder="Cari kegiatan atau pengisi..." 
            value="{{ request('search') }}"
            class="border rounded px-3 py-2 w-full sm:w-64"
        >
      </form>

      <div class="inline-block bg-white rounded shadow overflow-hidden">
          <table class="table-auto border-collapse">
              <thead class="bg-gray-100">
                  <tr>
                      <th class="px-4 py-2 border text-center">No</th>
                      <th class="px-4 py-2 border">Tanggal</th>
                      <th class="px-4 py-2 border">Hari</th>
                      <th class="px-4 py-2 border">Waktu</th>
                      <th class="px-4 py-2 border">Kegiatan</th>
                      <th class="px-4 py-2 border">Nara Sumber</th>
                      <th class="px-4 py-2 border">Poster</th>
                      <th class="px-4 py-2 border">Aksi</th>
                  </tr>
              </thead>
              <tbody>
                  @forelse($kegiatan as $index => $item)
                      <tr class="hover:bg-gray-50">
                          <td class="px-4 py-2 border text-center">
                              {{ ($kegiatan->currentPage() - 1) * $kegiatan->perPage() + $index + 1 }}
                          </td>
                          <td class="px-4 py-2 border">
                              {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                          </td>
                          <td class="px-4 py-2 border">{{ $item->hari }}</td>
                          <td class="px-4 py-2 border">{{ $item->waktu }}</td>
                          <td class="px-4 py-2 border">{{ $item->kegiatan }}</td>
                          <td class="px-4 py-2 border">{{ $item->pengisi }}</td>
                           <td class="px-4 py-2 border text-center">
                                @if ($item->gambar)
                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->kegiatan }}" class="w-16 h-16 object-cover rounded">
                                @else
                                    <span class="text-gray-500">No Image</span>
                                @endif
                            </td>
                          <td class="px-4 py-2 border text-center">
                              <div class="flex items-center justify-center space-x-2">
                                  <a href="{{ route('kegiatan.edit', $item->id) }}" 
                                    class="bg-yellow-400 text-white px-3 py-1 rounded text-sm hover:bg-yellow-500 transition">
                                      Edit
                                  </a>
                                  <form action="{{ route('kegiatan.destroy', $item->id) }}" 
                                        method="POST" 
                                        onsubmit="return confirm('Yakin ingin menghapus?')">
                                      @csrf @method('DELETE')
                                      <button type="submit" 
                                              class="bg-red-500 text-white px-3 py-1 rounded text-sm hover:bg-red-600 transition">
                                          Hapus
                                      </button>
                                  </form>
                              </div>
                          </td>
                      </tr>
                  @empty
                      <tr>
                          <td colspan="7" class="px-4 py-4 text-center text-gray-500">Tidak ada kegiatan</td>
                      </tr>
                  @endforelse
              </tbody>
          </table>
      </div>
      <div class="mt-6">
        {{ $kegiatan->withQueryString()->links() }}
      </div>
    </div>
  </div>
</x-app-layout>
