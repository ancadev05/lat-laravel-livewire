<div>
    <h1 class="mb-3">Edit Barang</h1>

    <form wire:submit="update">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama_barang</label>
                    <input type="text" id="nama_barang" wire:model="nama_barang" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="total" class="form-label">Total</label>
                    <input type="number" id="total" wire:model="total" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="ket" class="form-label">Ket</label>
                    <textarea wire:model="ket" id="ket" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div>
            <a wire:navigate href="{{ url('/barang') }}" class="btn btn-sm btn-secondary">Batal</a>
            <button class="btn btn-sm btn-primary">Simpan</button>
        </div>
    </form>


</div>
