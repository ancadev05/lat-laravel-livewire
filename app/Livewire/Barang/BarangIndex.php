<?php

namespace App\Livewire\Barang;

use App\Models\Barang;
use Livewire\Component;

class BarangIndex extends Component
{
    public function render()
    {
        $barang = Barang::all();
        return view('livewire.barang.barang-index', compact('barang'));
    }

    public function destroy($id)
    {
        Barang::find($id)->delete();
    }
}
