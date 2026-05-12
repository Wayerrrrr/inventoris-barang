<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inventaris Barang') }}
        </h2>
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
                    <h2 class="font-semibold text-xl text-gray-800">
                        {{ __('Edit Barang') }}
                    </h2>
                    <form action="{{ route('barang.update', $barang->id) }}" method="POST" class="pt-5">
                        @csrf
                        @method('PUT')

                        <div class="pt-3">
                            <label>Nama Barang</label>
                            <input type="text" name="nama_barang"
                                value="{{ old('nama_barang', $barang->nama_barang ?? '') }}"
                                class="block w-full py-2.5 border rounded-lg">
                        </div>

                        <div class="pt-3">
                            <label>Kode Barang</label>
                            <input type="text" name="kode_barang"
                                value="{{ old('kode_barang', $barang->kode_barang ?? '') }}"
                                class="block w-full py-2.5 border rounded-lg">
                        </div>

                        <div class="pt-3">
                            <label>Stok</label>
                            <input type="number" name="stok"
                                value="{{ old('stok', $barang->stok ?? '') }}"
                                class="block w-full py-2.5 border rounded-lg">
                        </div>

                        <div class="pt-3">
                            <label>Kategori</label>
                            <input type="text" name="kategori"
                                value="{{ old('kategori', $barang->kategori ?? '') }}"
                                class="block w-full py-2.5 border rounded-lg">
                        </div>

                        <div class="pt-3">
                            <label>Satuan</label>
                            <input type="text" name="satuan"
                                value="{{ old('satuan', $barang->satuan ?? '') }}"
                                class="block w-full py-2.5 border rounded-lg">
                        </div>

                        <div class="pt-3">
                            <label>Harga Modal</label>
                            <input type="number" name="harga_beli"
                                value="{{ old('harga_beli', $barang->harga_beli ?? '') }}"
                                class="block w-full py-2.5 border rounded-lg">
                        </div>

                        <div class="pt-3">
                            <label>Harga Jual</label>
                            <input type="number" name="harga_jual"
                                value="{{ old('harga_jual', $barang->harga_jual ?? '') }}"
                                class="block w-full py-2.5 border rounded-lg">
                        </div>

                        <div class="pt-3">
                            <label>Expired Date</label>
                            <input type="date" name="expired_date"
                                value="{{ old('expired_date', $barang->expired_date ?? '') }}"
                                class="block w-full py-2.5 border rounded-lg">
                        </div>

                        <div class="pt-4">
                            <button class="border py-2 px-3 rounded-lg text-white bg-slate-700">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>