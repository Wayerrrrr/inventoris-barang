<x-app-layout>
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

    <div class="p-4 sm:ml-64">
        <div class="bg-neutral-primary overflow-hidden rounded-lg border border-default">
            <div class="p-6 text-body">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-semibold text-heading">Detail Barang</h1>
                    <a href="{{route('barang.index')}}" class="py-2 px-3 font-medium text-sm text-fg-brand hover:underline">Kembali</a>
                </div>
                <div class="overflow-hidden py-5">
                    <div class="relative overflow-x-auto rounded-lg border border-default">
                        <table class="w-full text-sm text-left rtl:text-right text-body">
                            <thead class="text-white bg-neutral-secondary-soft border-b border-default whitespace-nowrap bg-gray-700">
                                <tr>
                                    <th class="px-6 py-5 font-medium">Kode</th>
                                    <th class="px-6 py-5 font-medium">Nama</th>
                                    <th class="px-6 py-5 font-medium">Kategori</th>
                                    <th class="px-6 py-5 font-medium">Stok</th>
                                    <th class="px-6 py-5 font-medium">Satuan</th>
                                    <th class="px-6 py-5 font-medium">Harga Beli</th>
                                    <th class="px-6 py-5 font-medium">Harga Jual</th>
                                    <th class="px-6 py-5 font-medium">Tanggal Ditambahkan</th>
                                    <th class="px-6 py-5 font-medium">Tanggal Kadaluarsa</th>
                                    <th class="px-6 py-5 font-medium">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-default font-medium text-heading whitespace-nowrap">
                                    <td class="px-6 py-4">
                                        {{ $barang->kode_barang }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $barang->nama_barang }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $barang->kategori }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $barang->stok }}
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
                                        <div class="flex gap-2">
                                            <a href="{{route('barang.edit', $barang->id)}}" class="py-2 px-3 border border-default bg-neutral-tertiary text-grey rounded-lg transition duration-300 ease-in hover:bg-blue-500 hover:text-white">
                                                Update</a>

                                            <form action="{{route('barang.destroy', $barang->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button class="py-2 px-3 border border-default bg-red-600 text-white rounded-lg transition duration-300 ease-in-out hover:bg-red-700">Delete</button>
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
</x-app-layout>