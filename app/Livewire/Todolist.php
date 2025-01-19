<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Todolist as ModelsTodolist;

class Todolist extends Component
{
    #[Validate('required', message:'Masukkan title!')]
    public $title;
    public $id;
    public $edit = false;

    public function store()
    {
        // validasi data
        $this->validate();
        // melakukan update jika nilai edit menjadi true
        if( $this->edit ) {
            // mengedit data sesuai id yang di klik
            ModelsTodolist::find($this->id)->update(['title' => $this->title ]);
        } else {
            // memasukkan data ke database
            ModelsTodolist::create(['title' => $this->title]);
        }

        // mereset isi dari variabel $title
        $this->reset();

    }

    public function update($id)
    {
        // mencari dari sesuai id yang di klik
        $todo_list = ModelsTodolist::find($id);

        // menampilkan data ke form dari hasil pencarian
        $this->id = $todo_list->id;
        $this->title = $todo_list->title;
        $this->edit = true;
    }

    public function destroy($id)
    {
        // menghapus data sesuai id yang di klik
        ModelsTodolist::find($id)->delete();
    }

    public function render()
    {
        $todos = ModelsTodolist::orderBy("id","desc")->get();
        return view('livewire.todolist', ['todos' => $todos]);
    }
}
