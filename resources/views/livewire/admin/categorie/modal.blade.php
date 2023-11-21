<div wire:ignore.self class="modal fade" id="addCategorie" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $categorie_id ? 'Modifier' : 'Nouvelle Categorie' }}</h5>
                <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                </button>
            </div>
            <form wire:submit.prevent="SaveCategorie">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Titre</label>
                        <input type="text" wire:model.defer="titre" class="form-control">
                        @error('titre')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <textarea class="form-control" wire:model.defer="description">

                        </textarea>
                        @error('description')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Images</label>
                        <input type="file" wire:model.defer="images" class="form-control">
                        @error('images')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        @if($this->images)
                            <img src="{{ URL::to('uploads/categorie/'. $this->images) }}" width="60" height="60" />
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click="closeModal" class="btn btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>


