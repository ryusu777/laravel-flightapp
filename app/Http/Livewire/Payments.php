<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Payment;

class Payments extends Component
{
    public $payments, $nama_lengkap, $no_referensi, $tgl_bayar, $payment_id;

    public $isOpen = 0;

    public function render()
    {
        $this->payments = Payment::all();
        return view('livewire.payment');
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
        $this->nama_lengkap = '';
        $this->no_referensi = '';
        $this->tgl_bayar = '';
    }
   
    public function store()
    {
        $this->validate([
            'nama_lengkap' => 'required',
            'no_referensi' => 'required',
            'tgl_bayar' => 'required',
        ]);

        Payment::create([
            'nama_lengkap' => $this->nama_lengkap,
            'no_referensi' => $this->no_referensi,
            'tgl_bayar' => $this->tgl_bayar,
        ]);

        // session()->flash('message',
        // $this->payment_id ? 'Successfully Sent.' : 'Send Failed.');
        
        $this->closeModal();
        $this->resetInputFields();
    }
}
