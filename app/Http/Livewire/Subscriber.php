<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subscriber as Model;
use Livewire\WithPagination;
class Subscriber extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $columnOrder = 'id';
    public $order = 'ASC';
    
    public function render()
    {
        $columnOrder = $this->columnOrder;
        $order = $this->order;
        return view('livewire.subscriber',[
            'subscribers' => Model::orderBy($columnOrder,$order)->paginate(10)
        ]);
    }

    public function sort($column){
        $this->order = $this->order == 'ASC' ? 'DESC' : 'ASC';
        $this->columnOrder = $column;
    }
}
