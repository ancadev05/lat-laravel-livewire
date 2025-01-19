<div>
    <h1>Produk</h1>

    <section class="my-3">
        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
            data-bs-target="#tambah">Tambah</button>
    </section>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $key => $item)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <button type="button" wire:click='edit({{ $item->id }})'
                            class="btn btn-sm btn-warning">Edit</button>
                        <button type="button" wire:click='destroy({{ $item->id }})'
                            wire:confirm="yakin ingin hapus data?" class="btn btn-sm btn-danger">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Produk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent='store()'>
                    <div class="modal-body">
                        <input type="text" wire:model="name" placeholder="Masukkan produk" id="name"
                            class="form-control mb-3 @error('name') is-invalid @enderror">
                        <input type="text" wire:model="description" placeholder="deskripsi"
                            class="form-control @error('description') is-invalid @enderror">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        Livewire.on('modal-close', () => {
            // Tutup modal di sini
            $('#tambah').modal('hide'); // Ganti dengan ID modal Anda
        });
    </script>

    <script>
        const myModal = document.getElementById('tambah')
        const myInput = document.getElementById('name')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>
</div>
