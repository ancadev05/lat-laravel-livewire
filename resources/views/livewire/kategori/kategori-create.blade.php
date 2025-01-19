<div>
    <!-- Modal -->
    <divclass="modal fade" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false"
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
    </divclass=>
</div>
