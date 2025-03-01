<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Produk as ModelsProduk;

class Produk extends Component
{
    public $name;
    public $description;

    // #[On('modal-close')] 

    public function store()
    {
        $produk = [
            'name' => $this->name,
            'description' => $this->description,
        ];

        // dd($produk);

        ModelsProduk::create($produk);
        
        $this->name = null;
        $this->description = null;

        // $this->reset();

        // Emit event untuk menutup modal
        // $this->dispatch('modal-close');
    }

    public function edit($id)
    {
        $produk = ModelsProduk::find($id);
        $this->name = $produk->name;
        $this->description = $produk->description;
    }

    public function destroy($id)
    {
        ModelsProduk::find( $id)->delete();
    }

    public function render()
    {
        $produks = ModelsProduk::all();
        return view('livewire.produk', compact('produks'));
    }
}
