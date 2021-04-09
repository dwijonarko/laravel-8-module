<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChainDropdown extends Component
{
    public $provinces, $cities;
    public $provinceId=null;

    public function mount()
    {
        $this->provinces = \Indonesia::allProvinces();
        $this->cities = collect();
    }

    public function render()
    {
        return view('livewire.chain-dropdown');
    }

    public function updatedProvinceId($province_id)
    {
        if(!is_null($province_id)){
            $this->cities = \Indonesia::findProvince($province_id, ['cities']);
        }
    }
}
