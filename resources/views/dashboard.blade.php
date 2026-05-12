<x-app-layout>
    <div class="p-4 sm:ml-64">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div class="bg-neutral-primary overflow-hidden rounded-lg border border-default">
                <div class="p-6 text-body">

                    <div class="flex justify-between">
                        <h2 class="font-semibold text-xl text-whitepb-3">
                            {{ __('Barang Expired') }}
                            <p class="font-medium text-sm underline">
                                Menampilkan {{ $barangs_expired->count() }} Barang yang sudah Expired di Inventaris
                            </p>
                        </h2>

                    </div>

                    <div class="relative overflow-x-auto rounded-lg border border-default">
                        <table class="w-full text-sm text-left text-body">
                            <thead class="text-white bg-neutral-secondary-soft border-b border-default bg-red-700">
                                <tr>
                                    <th class="px-6 py-5 font-medium">Kode</th>
                                    <th class="px-6 py-5 font-medium">Nama</th>
                                    <th class="px-6 py-5 font-medium">Kategori</th>
                                    <th class="px-6 py-5 font-medium">Expired Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($barangs_expired as $barang)
                                <tr class="border-b border-default font-medium">
                                    <td class="px-6 py-4">{{ $barang->kode_barang }}</td>
                                    <td class="px-6 py-4">{{ $barang->nama_barang }}</td>
                                    <td class="px-6 py-4">{{ $barang->kategori }}</td>
                                    <td class="px-6 py-4">
                                        {{ $barang->expired_date }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="bg-neutral-primary overflow-hidden rounded-lg border border-default">
                <div class="p-6 text-body">

                    <div class="flex justify-between">
                        <h2 class="font-semibold text-xl text-whitepb-3">
                            {{ __('Barang Mendekati Expired') }}
                            <p class="font-medium text-sm underline">
                                Menampilkan {{ $barangs_expired_soon->count() }} Barang yang akan Expired dalam 10 hari ke depan
                            </p>
                        </h2>

                    </div>

                    <div class="relative overflow-x-auto rounded-lg border border-default">
                        <table class="w-full text-sm text-left text-body">
                            <thead class="text-white bg-neutral-secondary-soft border-b border-default bg-red-700">
                                <tr>
                                    <th class="px-6 py-5 font-medium">Kode</th>
                                    <th class="px-6 py-5 font-medium">Nama</th>
                                    <th class="px-6 py-5 font-medium">Kategori</th>
                                    <th class="px-6 py-5 font-medium">Expired Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($barangs_expired_soon as $barang)
                                <tr class="border-b border-default font-medium">
                                    <td class="px-6 py-4">{{ $barang->kode_barang }}</td>
                                    <td class="px-6 py-4">{{ $barang->nama_barang }}</td>
                                    <td class="px-6 py-4">{{ $barang->kategori }}</td>
                                    <td class="px-6 py-4">
                                        {{ $barang->expired_date }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="bg-neutral-primary overflow-hidden rounded-lg border border-default">
                <div class="p-6 text-body">

                    <div class="flex justify-between">
                        <h2 class="font-semibold text-xl text-whitepb-3">
                            {{ __('Barang Termahal') }}
                            <p class="font-medium text-sm underline">
                                Menampilkan {{ $barangs_mahal->count() }} Barang Termahal di Inventaris
                            </p>
                        </h2>

                    </div>

                    <div class="relative overflow-x-auto rounded-lg border border-default">
                        <table class="w-full text-sm text-left text-body">
                            <thead class="text-white bg-neutral-secondary-soft border-b border-default bg-green-700">
                                <tr>
                                    <th class="px-6 py-5 font-medium">Kode</th>
                                    <th class="px-6 py-5 font-medium">Nama</th>
                                    <th class="px-6 py-5 font-medium">Kategori</th>
                                    <th class="px-6 py-5 font-medium">Harga Jual</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($barangs_mahal as $barang)
                                <tr class="border-b border-default font-medium">
                                    <td class="px-6 py-4">{{ $barang->kode_barang }}</td>
                                    <td class="px-6 py-4">{{ $barang->nama_barang }}</td>
                                    <td class="px-6 py-4">{{ $barang->kategori }}</td>
                                    <td class="px-6 py-4">
                                        Rp {{ number_format($barang->harga_jual, 0, ',', '.') }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="bg-neutral-primary overflow-hidden rounded-lg border border-default">
                <div class="p-6 text-body">

                    <div class="flex justify-between">
                        <h2 class="font-semibold text-xl text-whitepb-3">
                            {{ __('Barang Termurah') }}
                            <p class="font-medium text-sm underline">
                                Menampilkan {{ $barangs_murah->count() }} Barang Termurah di Inventaris
                            </p>
                        </h2>

                    </div>

                    <div class="relative overflow-x-auto rounded-lg border border-default">
                        <table class="w-full text-sm text-left text-body">
                            <thead class="text-white bg-neutral-secondary-soft border-b border-default bg-green-700">
                                <tr>
                                    <th class="px-6 py-5 font-medium">Kode</th>
                                    <th class="px-6 py-5 font-medium">Nama</th>
                                    <th class="px-6 py-5 font-medium">Kategori</th>
                                    <th class="px-6 py-5 font-medium">Harga Jual</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($barangs_murah as $barang)
                                <tr class="border-b border-default font-medium">
                                    <td class="px-6 py-4">{{ $barang->kode_barang }}</td>
                                    <td class="px-6 py-4">{{ $barang->nama_barang }}</td>
                                    <td class="px-6 py-4">{{ $barang->kategori }}</td>
                                    <td class="px-6 py-4">
                                        Rp {{ number_format($barang->harga_jual, 0, ',', '.') }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="bg-neutral-primary overflow-hidden rounded-lg border border-default">
                <div class="p-6 text-body">

                    <div class="flex justify-between">
                        <h2 class="font-semibold text-xl text-whitepb-3">
                            {{ __('Barang dengan Stok Rendah') }}
                            <p class="font-medium text-sm underline">
                                Menampilkan {{ $barangs_lowstock->count() }} Barang dengan Stok ter Rendah
                            </p>
                        </h2>

                    </div>

                    <div class="relative overflow-x-auto rounded-lg border border-default">
                        <table class="w-full text-sm text-left text-body">
                            <thead class="text-white bg-neutral-secondary-soft border-b border-default bg-yellow-600">
                                <tr>
                                    <th class="px-6 py-5 font-medium">Kode</th>
                                    <th class="px-6 py-5 font-medium">Nama</th>
                                    <th class="px-6 py-5 font-medium">Kategori</th>
                                    <th class="px-6 py-5 font-medium">Stok</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($barangs_lowstock as $barang)
                                <tr class="border-b border-default font-medium">
                                    <td class="px-6 py-4">{{ $barang->kode_barang }}</td>
                                    <td class="px-6 py-4">{{ $barang->nama_barang }}</td>
                                    <td class="px-6 py-4">{{ $barang->kategori }}</td>
                                    <td class="px-6 py-4">{{ $barang->stok }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="bg-neutral-primary overflow-hidden rounded-lg border border-default">
                <div class="p-6 text-body">

                    <div class="flex justify-between">
                        <h2 class="font-semibold text-xl text-whitepb-3">
                            {{ __('Barang dengan Stok Banyak') }}
                            <p class="font-medium text-sm underline">
                                Menampilkan {{ $barangs_highstock->count() }} Barang dengan Stok ter Banyak
                            </p>
                        </h2>

                    </div>

                    <div class="relative overflow-x-auto rounded-lg border border-default">
                        <table class="w-full text-sm text-left text-body">
                            <thead class="text-white bg-neutral-secondary-soft border-b border-default bg-yellow-600">
                                <tr>
                                    <th class="px-6 py-5 font-medium">Kode</th>
                                    <th class="px-6 py-5 font-medium">Nama</th>
                                    <th class="px-6 py-5 font-medium">Kategori</th>
                                    <th class="px-6 py-5 font-medium">Stok</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($barangs_highstock as $barang)
                                <tr class="border-b border-default font-medium">
                                    <td class="px-6 py-4">{{ $barang->kode_barang }}</td>
                                    <td class="px-6 py-4">{{ $barang->nama_barang }}</td>
                                    <td class="px-6 py-4">{{ $barang->kategori }}</td>
                                    <td class="px-6 py-4">{{ $barang->stok }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>

        <div class="mt-6">
            <div class="bg-neutral-primary overflow-hidden rounded-lg border border-default">
                <div class="p-6 text-body">

                    <div class="flex justify-between items-center">
                        <h2 class="font-semibold text-xl text-whitepb-3">
                            {{ __('Barang Terbaru') }}
                            <p class="font-medium text-sm underline">
                                Selama 1 Minggu ke-Belakang
                            </p>
                        </h2>
                        <a href="{{ route('barang.index') }}"
                            class="font-medium text-sm text-fg-brand hover:underline">
                            View All
                        </a>
                    </div>

                    <div class="relative overflow-x-auto rounded-lg border border-default">
                        <table class="w-full text-sm text-left text-body">

                            <thead class="text-white bg-neutral-secondary-soft border-b border-default bg-blue-500">
                                <tr>
                                    <th class="px-6 py-5 font-medium">Kode</th>
                                    <th class="px-6 py-5 font-medium">Nama</th>
                                    <th class="px-6 py-5 font-medium">Kategori</th>
                                    <th class="px-6 py-5 font-medium">Stok</th>
                                    <th class="px-6 py-5 font-medium">Satuan</th>
                                    <th class="px-6 py-5 font-medium">Harga Modal</th>
                                    <th class="px-6 py-5 font-medium">Harga Jual</th>
                                    <th class="px-6 py-5 font-medium">Tanggal Ditambahkan</th>
                                    <th class="px-6 py-5 font-medium">Expired</th>
                                    <th class="px-6 py-5 font-medium">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($barangs as $barang)
                                <tr class="border-b border-default font-medium">
                                    <td class="px-6 py-4">{{ $barang->kode_barang }}</td>
                                    <td class="px-6 py-4">{{ $barang->nama_barang }}</td>
                                    <td class="px-6 py-4">{{ $barang->kategori }}</td>
                                    <td class="px-6 py-4">{{ $barang->stok }}</td>
                                    <td class="px-6 py-4">{{ $barang->satuan }}</td>
                                    <td class="px-6 py-4">
                                        Rp {{ number_format($barang->harga_beli, 0, ',', '.') }}
                                    </td>
                                    <td class="px-6 py-4">
                                        Rp {{ number_format($barang->harga_jual, 0, ',', '.') }}
                                    </td>
                                    <td class="px-6 py-4">{{ $barang->created_at }}</td>
                                    <td class="px-6 py-4">{{ $barang->expired_date }}</td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('barang.show', $barang->id) }}"
                                            class="py-2 px-3 border border-default bg-neutral-tertiary text-grey rounded-lg transition duration-300 ease-in hover:bg-blue-500 hover:text-white">
                                            View
                                        </a>
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

</x-app-layout>