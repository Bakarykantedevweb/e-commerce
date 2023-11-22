<?php

namespace App\Http\Livewire\Admin\Categorie;

use App\Models\Categorie;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    public $titre, $description, $images, $categorie_id;
    /*public $categories;*/

    public function rules(){
        return[
          'titre' => 'required|string',
            'description' => 'required|string',
            'images' => 'required|mimes:png,jpeg,gif,jpg'
        ];
    }

    public function updated($champs)
    {
        $this->validateOnly($champs);
    }


    public function SaveCategorie(){
        $validatedData = $this->validate();
        $categorie = new Categorie();

        if($this->categorie_id){
            $categorie = Categorie::find($this->categorie_id);
        }

        $imageName = Carbon::now()->timestamp. '.'  .$this->images->extension();
        $this->images->storeAs('categorie', $imageName);

        $categorie->titre = $validatedData['titre'];
        $categorie->description = $validatedData['description'];
        $categorie->images = $imageName;
        /*dd($categorie);*/
        $categorie->save();
        toastr()->success('Operation saved successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function editCategorie($id)
    {

        $categorie = Categorie::find(decrypt($id));
        if($categorie){
            $this->categorie_id = $categorie;
            $this->titre = $categorie->titre;
            $this->description = $categorie->description;
            $this->images = $categorie->images;
        }
    }

    public function DestroyCategorie($id)
    {
        Categorie::where('id', decrypt($id))->delete();
        toastr()->success('Operation delete successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function resetInput(){
        $this->titre = "";
        $this->description = "";
        $this->images = "";
    }
    public function render()
    {
        $categories = Categorie::all();
        return view('livewire.admin.categorie.index', compact('categories'));
    }
}
