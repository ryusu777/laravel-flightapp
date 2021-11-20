<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Flight;

class Flights extends Component

{
    public $flights, $plane_code, $depature, $destination, $depature_date, $depature_time, $arrival_time, $flight_id;

    public $isOpen = 0;

    public function render()
    {
        $this->flights = Flight::all();
        return view('livewire.flights');
    }
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields(){
        $this->plane_code = '';
        $this->depature = '';
        $this->destination = '';
        $this->depature_date = '';
        $this->depature_time = '';
        $this->arrival_time = '';
        $this->flight_id = '';
    }
   
    public function store()
    {
        $validateData = $this->validate([
        'plane_code' => 'required',
        'depature' => 'required',
        'destination' => 'required',
        'depature_date' => 'required',
        'depature_time' => 'required',
        'arrival_time' => 'required',
        ]);

        if ($this->flight_id) {
            Flight::find($this->flight_id)->update($validateData);
        } else {            
            Flight::create($validateData);
        }

        session()->flash('message',
        $this->flight_id ? 'Flight Schedule Updated' : 'Flight Schedule Created');
        
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id){
        $flight = Flight::findOrFail($id);
        $this->flight_id = $id;
        $this->plane_code = $flight->plane_code;
        $this->depature = $flight->depature;
        $this->destination = $flight->destination;
        $this->depature_date = $flight->depature_date;
        $this->depature_time = $flight->depature_time;
        $this->arrival_time = $flight->arrival_time;
        
        $this->openModal();
       
    }

    public function delete($id)
    {
        Flight::find($id)->delete();
        session()->flash('message', 'Flight Schedule Deleted.');
    }
}
