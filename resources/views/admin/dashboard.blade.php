<x-admin.layout>
    <div class="col-span-1 sm:col-span-2 lg:col-span-4 mb-6">
        <h1 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-3xl">
            {{ $title }}
        </h1>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
            Selamat datang di panel administrasi sekolah.
        </p>
    </div>

    {{-- 4 Menu Stats Cards --}}
    <div class="col-span-1 sm:col-span-2 lg:col-span-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        {{-- Students --}}
        <a href="{{ url('/admin/students') }}"
            class="block p-6 bg-white rounded-lg border border-gray-200 shadow-sm hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-sm font-medium tracking-tight text-gray-500 dark:text-gray-400">Total Siswa</h5>
            <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $stats['students'] }}</p>
            <p class="mt-2 text-xs text-blue-600 dark:text-blue-400">Kelola Siswa &rarr;</p>
        </a>

        {{-- Classrooms --}}
        <a href="{{ url('/admin/classrooms') }}"
            class="block p-6 bg-white rounded-lg border border-gray-200 shadow-sm hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-sm font-medium tracking-tight text-gray-500 dark:text-gray-400">Total Kelas</h5>
            <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $stats['classrooms'] }}</p>
            <p class="mt-2 text-xs text-blue-600 dark:text-blue-400">Kelola Kelas &rarr;</p>
        </a>

        {{-- Teachers --}}
        <a href="{{ url('/admin/teachers') }}"
            class="block p-6 bg-white rounded-lg border border-gray-200 shadow-sm hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-sm font-medium tracking-tight text-gray-500 dark:text-gray-400">Total Guru</h5>
            <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $stats['teachers'] }}</p>
            <p class="mt-2 text-xs text-blue-600 dark:text-blue-400">Kelola Guru &rarr;</p>
        </a>

        {{-- Subjects --}}
        <a href="{{ url('/admin/subjects') }}"
            class="block p-6 bg-white rounded-lg border border-gray-200 shadow-sm hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-sm font-medium tracking-tight text-gray-500 dark:text-gray-400">Total Mapel</h5>
            <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $stats['subjects'] }}</p>
            <p class="mt-2 text-xs text-blue-600 dark:text-blue-400">Kelola Mapel &rarr;</p>
        </a>
    </div>
</x-admin.layout>
