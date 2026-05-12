<x-app-layout>
    @if(session()->has('success'))
    <div class="p-4 sm:ml-64 mt-4">
        <div class="bg-green-600 overflow-hidden rounded-lg border border-green-700 p-4">
            <h1 class="text-white font-medium">{{session('success')}}</h1>
        </div>
    </div>
    @endif

    @if ($errors->any())
    <div class="p-4 sm:ml-64 mt-4">
        <div class="bg-red-600 overflow-hidden rounded-lg border border-red-700 p-4">
            @foreach($errors->all() as $err)
            <h1 class="text-white font-medium">{{$err}}</h1>
            @endforeach
        </div>
    </div>
    @endif

    <div class="p-4 sm:ml-64">
        <div class="bg-neutral-primary overflow-hidden rounded-lg border border-default">
            <div class="p-6 text-body">
                <div class="flex justify-between items-center">
                    <form action="{{ route('barang.index') }}" method="GET" class="flex gap-2">
                        <input type="text" name="search" placeholder="Cari Kode Barang" class="py-2 px-3 rounded-lg border border-default bg-neutral-primary text-body">
                        <button class="py-2 px-3 border border-default bg-neutral-tertiary text-heading rounded-lg transition duration-300 ease-in hover:bg-gray-700 hover:text-white">Cari</button>
                    </form>
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
                                @foreach($barangs as $barang)
                                <tr class="border-b border-default font-medium text-heading">
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
                                            <a href="{{route('barang.show', $barang->id)}}" class="py-2 px-3 border border-default bg-neutral-tertiary text-heading rounded-lg transition duration-300 ease-in hover:bg-gray-700 hover:text-white">
                                                View</a>
                                            <a href="{{route('barang.edit', $barang->id)}}" class="py-2 px-3 border border-default bg-neutral-tertiary text-heading rounded-lg transition duration-300 ease-in hover:bg-gray-700 hover:text-white">
                                                Update</a>

                                            <form action="{{route('barang.destroy', $barang->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button class="py-2 px-3 border border-default bg-red-600 text-white rounded-lg transition duration-300 ease-in-out hover:bg-red-700">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="p-4 sm:ml-64 mt-6">
        <div class="bg-neutral-primary overflow-hidden rounded-lg border border-default">
            <div class="p-6 text-body">
                <h2 class="font-semibold text-xl text-heading mb-6">
                    {{ __('Tambah Barang') }}
                </h2>
                <form action="{{ route('barang.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label class="block mb-2.5 text-sm font-medium text-heading">Nama</label>
                        <input type="text" name="nama_barang"
                            class="block w-full py-2.5 px-3 border border-default rounded-lg bg-neutral-secondary-soft text-body focus:outline-none focus:border-fg-brand"
                            placeholder="Nasi Goreng">
                    </div>

                    <div>
                        <label class="block mb-2.5 text-sm font-medium text-heading">Kode</label>
                        <input type="text" name="kode_barang"
                            class="block w-full py-2.5 px-3 border border-default rounded-lg bg-neutral-secondary-soft text-body focus:outline-none focus:border-fg-brand"
                            placeholder="MKN-001">
                    </div>

                    <div>
                        <label class="block mb-2.5 text-sm font-medium text-heading">Kategori</label>
                        <input type="text" name="kategori"
                            class="block w-full py-2.5 px-3 border border-default rounded-lg bg-neutral-secondary-soft text-body focus:outline-none focus:border-fg-brand"
                            placeholder="Makanan">
                    </div>

                    <div>
                        <label class="block mb-2.5 text-sm font-medium text-heading">Stok</label>
                        <input type="number" name="stok"
                            class="block w-full py-2.5 px-3 border border-default rounded-lg bg-neutral-secondary-soft text-body focus:outline-none focus:border-fg-brand"
                            placeholder="100">
                    </div>

                    <div>
                        <label class="block mb-2.5 text-sm font-medium text-heading">Satuan</label>
                        <input type="text" name="satuan"
                            class="block w-full py-2.5 px-3 border border-default rounded-lg bg-neutral-secondary-soft text-body focus:outline-none focus:border-fg-brand"
                            placeholder="Pcs / Kg / Liter">
                    </div>

                    <div>
                        <label class="block mb-2.5 text-sm font-medium text-heading">Harga Modal</label>
                        <input type="number" name="harga_beli"
                            class="block w-full py-2.5 px-3 border border-default rounded-lg bg-neutral-secondary-soft text-body focus:outline-none focus:border-fg-brand"
                            placeholder="10000">
                    </div>

                    <div>
                        <label class="block mb-2.5 text-sm font-medium text-heading">Harga Jual</label>
                        <input type="number" name="harga_jual"
                            class="block w-full py-2.5 px-3 border border-default rounded-lg bg-neutral-secondary-soft text-body focus:outline-none focus:border-fg-brand"
                            placeholder="15000">
                    </div>

                    <div>
                        <label class="block mb-2.5 text-sm font-medium text-heading">Expired Date</label>
                        <input type="date" name="expired_date"
                            class="block w-full py-2.5 px-3 border border-default rounded-lg bg-neutral-secondary-soft text-body focus:outline-none focus:border-fg-brand">
                    </div>
                    <div class="pt-2">
                        <button type="submit" class="border border-default py-2 px-4 rounded-lg text-heading bg-neutral-tertiary transition duration-300 ease-in hover:bg-gray-700 hover:text-white">Tambah Barang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>