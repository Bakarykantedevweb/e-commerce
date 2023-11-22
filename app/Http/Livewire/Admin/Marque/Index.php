<?php

namespace App\Http\Livewire\Admin\Marque;

use App\Models\Marque;
use Livewire\Component;

class Index extends Component
{
    public $marques,$marque_id;
    public $nom;
    protected function rules()
    {
        return [
            'nom' => 'required|string',
        ];
    }

    public function updated($champs)
    {
        $this->validateOnly($champs);
    }

    public function SaveMarque()
    {
        $validatedData = $this->validate();
        $marque = new Marque();
        if ($this->marque_id) {
            $marque = Marque::find($this->marque_id);
        }
        $marque->nom = $validatedData['nom'];
        $marque->save();
        toastr()->success('Operation effectue avec success');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function editMarque($id)
    {
        $marque = Marque::find(decrypt($id));
        if ($marque) {
            $this->marque_id = $marque->id;
            $this->nom = $marque->nom;
        }
    }

    public function deleteMarque($id)
    {
        $this->marque_id = decrypt($id);
    }

    public function DestroyMarque()
    {
        Marque::where('id', $this->marque_id)->delete();
        toastr()->success('Operation effectue avec success');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->nom = '';
    }
    public function render()
    {
        $this->marques = Marque::get();
        return view('livewire.admin.marque.index');
    }
}
