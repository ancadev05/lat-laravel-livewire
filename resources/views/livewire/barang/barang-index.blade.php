<div>
    <h1>Barang</h1>

    @if (session('status'))
        <section>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </section>
    @endif

    <div class="mb-3 d-flex justify-content-end">
        <a wire:navigate href="{{ url('/barang/create') }}" class="btn btn-sm btn-primary">Tambah</a>
    </div>
    <table class="table table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Barang</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $index => $item)
                <tr>
                    <td>{{ ++$index }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ number_format($item->total) }}</td>
                    <td>
                        <a wire:navigate href="{{ url('/barang/edit/' . $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <button wire:click="destroy({{ $item->id }})" wire:confirm="Yakin ingin hapus {{ $item->nama_barang }}?" class="btn btn-sm btn-danger">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
