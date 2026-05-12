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
                    <h1 class="text-2xl font-semibold text-heading">Edit Barang</h1>
                    <a href="{{route('barang.index')}}" class="py-2 px-3 font-medium text-sm text-fg-brand hover:underline">Kembali</a>
                </div>
                <form action="{{ route('barang.update', $barang->id) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="block mb-2.5 text-sm font-medium text-heading">Nama</label>
                        <input type="text" name="nama_barang"
                            class="block w-full py-2.5 px-3 border border-default rounded-lg bg-neutral-secondary-soft text-body focus:outline-none focus:border-fg-brand"
                            placeholder="Nasi Goreng" value="{{ old('nama_barang', $barang->nama_barang) }}">
                    </div>

                    <div>
                        <label class="block mb-2.5 text-sm font-medium text-heading">Kode</label>
                        <input type="text" name="kode_barang"
                            class="block w-full py-2.5 px-3 border border-default rounded-lg bg-neutral-secondary-soft text-body focus:outline-none focus:border-fg-brand"
                            placeholder="MKN-001" value="{{ old('kode_barang', $barang->kode_barang) }}">
                    </div>

                    <div>
                        <label class="block mb-2.5 text-sm font-medium text-heading">Kategori</label>
                        <input type="text" name="kategori"
                            class="block w-full py-2.5 px-3 border border-default rounded-lg bg-neutral-secondary-soft text-body focus:outline-none focus:border-fg-brand"
                            placeholder="Makanan" value="{{ old('kategori', $barang->kategori) }}">
                    </div>

                    <div>
                        <label class="block mb-2.5 text-sm font-medium text-heading">Stok</label>
                        <input type="number" name="stok"
                            class="block w-full py-2.5 px-3 border border-default rounded-lg bg-neutral-secondary-soft text-body focus:outline-none focus:border-fg-brand"
                            placeholder="100" value="{{ old('stok', $barang->stok) }}">
                    </div>

                    <div>
                        <label class="block mb-2.5 text-sm font-medium text-heading">Satuan</label>
                        <input type="text" name="satuan"
                            class="block w-full py-2.5 px-3 border border-default rounded-lg bg-neutral-secondary-soft text-body focus:outline-none focus:border-fg-brand"
                            placeholder="Pcs / Kg / Liter" value="{{ old('satuan', $barang->satuan) }}">
                    </div>

                    <div>
                        <label class="block mb-2.5 text-sm font-medium text-heading">Harga Modal</label>
                        <input type="number" name="harga_beli"
                            class="block w-full py-2.5 px-3 border border-default rounded-lg bg-neutral-secondary-soft text-body focus:outline-none focus:border-fg-brand"
                            placeholder="10000" value="{{ old('harga_beli', $barang->harga_beli) }}">
                    </div>

                    <div>
                        <label class="block mb-2.5 text-sm font-medium text-heading">Harga Jual</label>
                        <input type="number" name="harga_jual"
                            class="block w-full py-2.5 px-3 border border-default rounded-lg bg-neutral-secondary-soft text-body focus:outline-none focus:border-fg-brand"
                            placeholder="15000" value="{{ old('harga_jual', $barang->harga_jual) }}">
                    </div>

                    <div>
                        <label class="block mb-2.5 text-sm font-medium text-heading">Expired Date</label>
                        <input type="date" name="expired_date"
                            class="block w-full py-2.5 px-3 border border-default rounded-lg bg-neutral-secondary-soft text-body focus:outline-none focus:border-fg-brand" value="{{ old('expired_date', $barang->expired_date) }}">
                    </div>
                    <div class="pt-2">
                        <button type="submit" class="border border-default py-2 px-4 rounded-lg text-white bg-green-600 transition duration-300 ease-in hover:bg-green-700 hover:text-white">Update Barang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>