<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Inventaris Barang') }}
            </h2>
            <a href="{{route('barang.index')}}" class="font-bold hover:underline flex gap-1">
                <img src="{{ asset('images/arrow.svg') }}" alt="Back" class="w-5 hover:scale-110 transition duration-300 ease-in">
            </a>
        </div>
    </x-slot>

    @if(session()->has('success'))
    <div class="py-6 pb-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-700 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    <h1>{{session('success')}}</h1>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if ($errors->any())
    <div class="py-6 pb-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-700 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    @foreach($errors->all() as $err)
                    <h1>{{$err}}</h1>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="rounded-lg overflow-hidden">
                        <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-body">
                                <thead class="text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default text-white bg-slate-700 whitespace-nowrap">
                                    <tr>
                                        <th class="px-6 py-5 font-medium">Kode</th>
                                        <th class="px-6 py-5 font-medium">Nama</th>
                                        <th class="px-6 py-5 font-medium">Stok</th>
                                        <th class="px-6 py-5 font-medium">Kategori</th>
                                        <th class="px-6 py-5 font-medium">Satuan</th>
                                        <th class="px-6 py-5 font-medium">Harga Modal</th>
                                        <th class="px-6 py-5 font-medium">Harga Jual</th>
                                        <th class="px-6 py-5 font-medium">Tanggal Ditambahkan</th>
                                        <th class="px-6 py-5 font-medium">Tanggal Kadaluarsa</th>
                                        <th class="px-6 py-5 font-medium">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-neutral-primary border-b border-default font-medium text-heading whitespace-nowrap">
                                        <td class="px-6 py-4">
                                            {{ $barang->kode_barang }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $barang->nama_barang }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $barang->stok }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $barang->kategori }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $barang->satuan }}
                                        </td>
                                        <td class="px-6 py-4">
                                            Rp {{ number_format($barang->harga_beli, 0, ',', '.') }}
                                        </td>
                                        <td class="px-6 py-4">
                                            Rp {{ number_format($barang->harga_jual, 0, ',', '.') }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $barang->created_at }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $barang->expired_date }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex justify-between">
                                                <a href="{{route('barang.show', $barang->id)}}" class="py-2 px-3 border-collapse border bg-slate-700 text-white rounded-lg transition duration-300 ease-in-out hover:bg-white hover:text-gray-500">
                                                    View</a>
                                                <a href="{{route('barang.edit', $barang->id)}}" class="py-2 px-3 border-collapse border bg-slate-700 text-white rounded-lg transition duration-300 ease-in-out hover:bg-white hover:text-gray-500">
                                                    Update</a>

                                                <form action="{{route('barang.destroy', $barang->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="py-2 px-3 border-collapse border bg-slate-700 text-white rounded-lg transition duration-300 ease-in-out hover:bg-white hover:text-gray-500">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>