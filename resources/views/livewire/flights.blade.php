<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Jadwal Penerbangan
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            <button wire:click="create()" class="border border-gray-300 text-black font-bold py-2 px-4 rounded my-3">Tambah Jadwal Penerbangan</button>
            @if($isOpen)
                @include('livewire.create_flight')
            @endif
            <table class="table-fixed w-full mt-3">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">No.</th>
                        <th class="px-4 py-2">Kode Pesawat</th>
                        <th class="px-4 py-2">Keberangkatan</th>
                        <th class="px-4 py-2">Tujuan</th>
                        <th class="px-4 py-2">Tanggal Keberangkatan</th>
                        <th class="px-4 py-2">Waktu Keberangkatan</th>
                        <th class="px-4 py-2">Waktu Tiba</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($flights as $flight)
                        <tr>
                            <td class="border px-4 py-2">{{ $flight->id }}</td>
                            <td class="border px-4 py-2">{{ $flight->plane_code }}</td>
                            <td class="border px-4 py-2">{{ $flight->depature }}</td>
                            <td class="border px-4 py-2">{{ $flight->destination }}</td>
                            <td class="border px-4 py-2">{{ $flight->depature_date }}</td>
                            <td class="border px-4 py-2">{{ $flight->depature_time }}</td>
                            <td class="border px-4 py-2">{{ $flight->arrival_time }}</td>
                            <td class="border px-4 py-2">
                            <button wire:click="edit({{ $flight->id }})" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Edit</button>
                            <button wire:click="delete({{ $flight->id }})" class="bg-red-500 hover:bg-red-700 text-black font-bold py-2 px-4 rounded">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>