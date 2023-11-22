<?php

namespace App\Http\Livewire\Admin\Couleur;
use App\Models\Couleur;

use Livewire\Component;

class Index extends Component
{
    public $nom,$code,$couleur_id;
    public $couleurs;
    protected function rules()
    {
        return [
            'nom' => 'required|string',
            'code' => 'required|string',
        ];
    }

    public function updated($champs)
    {
        $this->validateOnly($champs);
    }

    public function SaveCouleur()
    {
        $validatedData = $this->validate();
        $couleur = new Couleur();
        if($this->couleur_id)
        {
            $couleur = Couleur::find($this->couleur_id);
        }
        $couleur->name = $validatedData['nom'];
        $couleur->code = $validatedData['code'];
        $couleur->save();
        toastr()->success('Operation effectue avec success');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function editCouleur($id)
    {
        $couleur = Couleur::find(decrypt($id));
        if($couleur){
            $this->couleur_id = $couleur->id;
            $this->nom = $couleur->name;
            $this->code = $couleur->code;
        }
    }

    public function deleteCouleur($id)
    {
        $this->couleur_id = decrypt($id);
    }

    public function DestroyCouleur()
    {
        Couleur::where('id', $this->couleur_id)->delete();
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
        $this->code = '';
    }


    public function render()
    {
        $this->couleurs = Couleur::get();
        return view('livewire.admin.couleur.index');
    }
}
