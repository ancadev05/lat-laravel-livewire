<?php

namespace App\Livewire\Barang;

use App\Models\Barang;
use Livewire\Attributes\Validate;
use Livewire\Component;

class BarangCreate extends Component
{
    #[Validate('required', message:'Nama barang tidak boleh kosong!')]
    public $nama_barang, $total, $ket;

    public function store()
    {
        $this->validate();
        
        $barang = [
            'nama_barang' => $this->nama_barang,
            'total' => $this->total,
            'ket' => $this->ket
        ];
        Barang::create($barang);

        session()->flash('status','Data berhasil ditambahkan!');

        $this->redirect('/barang', navigate: true);
    }
    public function render()
    {
        return view('livewire.barang.barang-create');
    }
}
