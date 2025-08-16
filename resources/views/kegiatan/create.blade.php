<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
      {{ isset($kegiatan) ? 'Edit Jadwal' : 'Tambah Jadwal' }} Kegiatan Masjid
    </h2>
  </x-slot>

  <div class="py-4">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded shadow">
      <form action="{{ isset($kegiatan) ? route('kegiatan.update', $kegiatan->id) : route('kegiatan.store') }}"method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($kegiatan)) @method('PUT') @endif

        {{-- Tanggal --}}
        <div class="mb-4">
          <label class="block mb-1 font-semibold">Tanggal</label>
          <input type="date" id="tanggal" name="tanggal" class="w-full border rounded px-3 py-2"
                 value="{{ old('tanggal', $kegiatan->tanggal ?? '') }}" required>
        </div>

        {{-- Hari --}}
        <div class="mb-4">
          <label class="block mb-1 font-semibold">Hari</label>
          <input type="text" id="hari" name="hari" class="w-full border rounded px-3 py-2 bg-gray-100" 
                 value="{{ old('hari', $kegiatan->hari ?? '') }}" readonly required>
        </div>

        {{-- Waktu --}}
        <div class="mb-4">
          <label class="block mb-1 font-semibold">Waktu</label>
          <input type="time" name="waktu" class="w-full border rounded px-3 py-2"
                 value="{{ old('waktu', $kegiatan->waktu ?? '') }}" required>
        </div>

        {{-- Kegiatan --}}
        <div class="mb-4">
          <label class="block mb-1 font-semibold">Kegiatan</label>
          <input type="text" name="kegiatan" class="w-full border rounded px-3 py-2"
                 value="{{ old('kegiatan', $kegiatan->kegiatan ?? '') }}" placeholder="Contoh: Kajian Ba'da Maghrib" required>
        </div>

        {{-- Pengisi --}}
        <div class="mb-4">
          <label class="block mb-1 font-semibold">Nara Sumber</label>
          <input type="text" name="pengisi" class="w-full border rounded px-3 py-2"
                 value="{{ old('pengisi', $kegiatan->pengisi ?? '') }}" placeholder="Nama Pengisi" required>
        </div>

        <!-- Poster -->
        <div class="mb-4">
          <label class="block mb-1">Poster</label>
          <!-- <p class="text-sm text-red-500 mb-1"></p> -->
          <input type="file" name="gambar" class="w-full" accept="image/*">
          @if(isset($kegiatan))
            <img src="{{ asset('storage/' . $kegiatan->gambar) }}" class="w-24 mt-2">
          @endif
        </div>

        <button type="submit" 
                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
          Simpan
        </button>
      </form>
    </div>
  </div>

  @push('scripts')
  <script>
    document.getElementById('tanggal').addEventListener('change', function() {
      let tanggal = new Date(this.value);
      if (!isNaN(tanggal.getTime())) {
        let hariList = ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'];
        document.getElementById('hari').value = hariList[tanggal.getDay()];
      } else {
        document.getElementById('hari').value = '';
      }
    });
  </script>
  @endpush
</x-app-layout>
