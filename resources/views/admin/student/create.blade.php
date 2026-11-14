<x-admin.layout>
    <section class="max-w-2xl">
        <div class="mb-6">
            <h1 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-3xl">
                {{ $title }}
            </h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                Form input data siswa baru.
            </p>
        </div>

        <form action="{{ url('/admin/students') }}" method="POST"
            class="space-y-4 rounded-lg bg-white p-6 shadow-sm dark:bg-gray-800">
            @csrf

            {{-- Name --}}
            <div>
                <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Siswa</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                    placeholder="Masukkan nama lengkap">
                @error('name')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            {{-- NIS --}}
            <div>
                <label for="NIS" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">NIS</label>
                <input type="text" id="NIS" name="NIS" value="{{ old('NIS') }}" required
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                    placeholder="Masukkan NIS">
                @error('NIS')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            {{-- Classroom ID --}}
            <div>
                <label for="classroom_id"
                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                <select id="classroom_id" name="classroom_id" required
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                    <option value="">Pilih Kelas</option>
                    @foreach ($classrooms as $classroom)
                        <option value="{{ $classroom->id }}" {{ old('classroom_id') == $classroom->id ? 'selected' : '' }}>
                            {{ $classroom->name }}
                        </option>
                    @endforeach
                </select>
                @error('classroom_id')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            {{-- Status --}}
            <div>
                <label for="status"
                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Status</label>
                <select id="status" name="status" required
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                    <option value="Active" {{ old('status') == 'Active' ? 'selected' : '' }}>Active</option>
                    <option value="Inactive" {{ old('status') == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            {{-- Action Buttons --}}
            <div class="flex items-center gap-3 pt-4">
                <button type="submit"
                    class="rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Simpan
                </button>
                <a href="{{ url('/admin/students') }}"
                    class="rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600">
                    Batal
                </a>
            </div>
        </form>
    </section>
</x-admin.layout>
