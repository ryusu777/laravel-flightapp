<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Upload Bukti Pembayaran
    </h2>
</x-slot>

<div class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            <form>
    
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
    
                    <div class="">
                        <div class="mb-4">
    
                            <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap :</label>
    
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Nama Lengkap" wire:model="nama_lengkap">
    
                            @error('nama_lengkap') <span class="text-red-500">{{ $message }}</span>@enderror
                        
                        </div>
    
                        <div class="mb-4">
    
                            <label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">No. Referensi :</label>
    
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadowoutline" id="exampleFormControlInput2"placeholder="No. Referensi" wire:model="no_referensi" >
   
                            @error('no_referensi') <span class="text-red-500">{{ $message }}</span>@enderror
    
                        </div>
                        
                        <div class="mb-4">
    
                            <label for="exampleFormControlInput3" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Bayar :</label>
    
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Tanggal Bayar" wire:model="tgl_bayar">
    
                            @error('tgl_bayar') <span class="text-red-500">{{ $message }}</span>@enderror
                        
                        </div>
    
                    </div>
    
                </div>
    
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
    
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
    
                        <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-gray-700 shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
    
                            Upload Bukti Bayar
    
                        </button>
    
                    </span>

                </div>
    
            </form>

        </div>

    </div>
    
</div>
   
