<?php

namespace App\Livewire;

use Livewire\Component;
//use App\Models\Elements;
use Illuminate\Support\Facades\Cache;

class EditableTable extends Component
{
    public $elements = [];

    public function add () {
        $this->elements[] = [
            'val1' => '',
            'val2' => '',
        ];
    }

    public function remove($index) {
        unset($this->elements[$index]);
    }

    public function mount()
    {
        $elements = Cache::get('elements');

        if (empty($elements)) {
            $elements[] = [
                'val1' => '',
                'val2' => '',
            ];
        }

        $this->elements = $elements;
    }

    public function render()
    {
        return view('livewire.editable-table', [
            //'elements' => $this->elements
        ]);
    }

    public function save () {
        //dd($this->elements);
        Cache::put('elements', $this->elements);
    }
}
