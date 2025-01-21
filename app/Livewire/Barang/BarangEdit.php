<?php

namespace App\Livewire\Barang;

use App\Models\Barang;
use Livewire\Component;

class BarangEdit extends Component
{
    public $nama_barang, $total, $ket, $id;
    public function mount($id)
    {
        $barang = Barang::find($id);
        $this->nama_barang = $barang->nama_barang;
        $this->total = $barang->total;
        $this->ket = $barang->ket;
    }

    public function update()
    {
        $barang = [
            'nama_barang' => $this->nama_barang,
            'total'=> $this->total,
            'ket'=> $this->ket,
        ];

        Barang::find($this->id)->update($barang);

        session()->flash('status','Data berhasil diubah!');
        $this->redirect('/barang', navigate: true);
    }

    public function render()
    {
        return view('livewire.barang.barang-edit');
    }
}
