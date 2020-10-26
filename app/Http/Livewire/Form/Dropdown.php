<?php
namespace App\Http\Livewire\Form;

//use App\City;
use App\Country;
use Livewire\Component;
class Dropdown extends Component
{
    public $country;
    public $cities=[];
    public $city;

    public function render()
    {
        if(!empty($this->country)) {
            $this->cities = Country::where('parent_id', $this->country)->get();
        }
        return view('livewire.form.dropdown')
            ->withCountries(Country::orderBy('nombre')->get());
    }
}
