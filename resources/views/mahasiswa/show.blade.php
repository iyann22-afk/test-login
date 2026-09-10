<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Mahasiswa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <table class="w-full text-sm">
                    <tbody class="divide-y divide-gray-100">
                        <tr class="py-2"><td class="py-2 w-1/3 font-medium text-gray-600">NIM</td><td class="py-2">{{ $mahasiswa->nim }}</td></tr>
                        <tr><td class="py-2 font-medium text-gray-600">Nama Mahasiswa</td><td class="py-2">{{ $mahasiswa->nama_mahasiswa }}</td></tr>
                        <tr><td class="py-2 font-medium text-gray-600">Tempat Lahir</td><td class="py-2">{{ $mahasiswa->tempat_lahir }}</td></tr>
                        <tr><td class="py-2 font-medium text-gray-600">Tanggal Lahir</td><td class="py-2">{{ \Carbon\Carbon::parse($mahasiswa->tanggal_lahir)->format('d F Y') }}</td></tr>
                        <tr><td class="py-2 font-medium text-gray-600">Jenis Kelamin</td><td class="py-2">{{ $mahasiswa->jenis_kelamin }}</td></tr>
                        <tr><td class="py-2 font-medium text-gray-600">Alamat</td><td class="py-2">{{ $mahasiswa->alamat }}</td></tr>
                        <tr><td class="py-2 font-medium text-gray-600">Program Studi</td><td class="py-2">{{ $mahasiswa->program_studi }}</td></tr>
                        <tr><td class="py-2 font-medium text-gray-600">Nomor HP</td><td class="py-2">{{ $mahasiswa->nomor_hp }}</td></tr>
                        <tr><td class="py-2 font-medium text-gray-600">Email</td><td class="py-2">{{ $mahasiswa->email }}</td></tr>
                    </tbody>
                </table>

                <div class="flex gap-3 mt-6">
                    <a href="{{ route('mahasiswa.edit', $mahasiswa) }}"
                       class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-6 rounded">
                        Edit
                    </a>
                    <a href="{{ route('mahasiswa.index') }}"
                       class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-6 rounded">
                        Kembali
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>