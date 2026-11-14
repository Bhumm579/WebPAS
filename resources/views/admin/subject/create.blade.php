<x-admin.layout>
    <section class="max-w-2xl">
        <div class="mb-6">
            <h1 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-3xl">
                {{ $title }}
            </h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                Form input data mata pelajaran baru.
            </p>
        </div>

        <form action="{{ url('/admin/subjects') }}" method="POST"
            class="space-y-4 rounded-lg bg-white p-6 shadow-sm dark:bg-gray-800">
            @csrf

            {{-- Name --}}
            <div>
                <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Mata Pelajaran</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                    placeholder="Contoh: Pemrograman Web">
                @error('name')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            {{-- Action Buttons --}}
            <div class="flex items-center gap-3 pt-4">
                <button type="submit"
                    class="rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Simpan
                </button>
                <a href="{{ url('/admin/subjects') }}"
                    class="rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600">
                    Batal
                </a>
            </div>
        </form>
    </section>
</x-admin.layout>
