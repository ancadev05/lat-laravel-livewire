<div>
    <h1>Todo List</h1>

    <section class="my-3">
        <form wire:submit="store()">
            <input type="text" wire:model="title" placeholder="Enter a task"
                class="form-control @error('title') is-invalid @enderror">
            @error('title')
                {{ $message }}
            @enderror
            <button type="submit" class="btn btn-sm btn-primary mt-3">{{ $edit == true ? 'Update' : 'Tambah' }}</button>
        </form>
    </section>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>List</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $key => $item)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $item->title }}</td>
                    <td>
                        <button type="button" wire:click='update({{ $item->id }})'
                            class="btn badge text-bg-warning">Edit</button>
                        <button type="button" wire:click='destroy({{ $item->id }})'
                            wire:confirm="yakin ingin hapus data?" class="btn btn-sm btn-danger">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
