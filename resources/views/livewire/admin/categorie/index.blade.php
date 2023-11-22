<div>
    @include('livewire.admin.categorie.modal')
    <!-- row -->
    <div class="row align-items-center grid-margin">
        <div class="col-12">
            <div class="card card-white">
                <div class="card-body row align-items-center">
                    <div class="col-12 col-sm">
                        <h4 class="mb-4 mb-sm-0 text-center text-sm-start">Categories</h4>
                    </div>

                    <div class="col-12 col-sm-auto">

                        <div class="row justify-content-center">

                            <div class="col-auto my-1 my-md-0">
                                <label class="m-0">Show:</label>
                                <select class="w-auto d-inline-block form-select">
                                    <option value="#?limit=24" selected="selected">24</option>
                                    <option value="#?limit=25">25</option>
                                    <option value="#?limit=50">50</option>
                                    <option value="#?limit=75">75</option>
                                    <option value="#?limit=100">100</option>
                                </select>
                            </div>

                            <div class="col-auto my-1 my-md-0">
                                <label class="m-0">Sort By:</label>
                                <select class="w-auto d-inline-block form-select">
                                    <option value="#?sort=p.sort_order&amp;order=ASC">Default</option>
                                    <option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                                    <option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                                    <option value="#?sort=p.price&amp;order=ASC" selected="">Price (Low &gt; High)
                                    </option>
                                    <option value="#?sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
                                    <option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>
                                    <option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>
                                    <option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>
                                    <option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>
                                </select>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    @include('layouts.partials.message')
    @include('layouts.partials.error')
    <button class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addCategorie">Nouvelle Categorie</button>
    <!-- row -->
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card card-white">
                <div class="card-body slimscroll">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-light">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Description</th>
                                <th scope="col">Images</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $key = 1;
                            @endphp
                            @forelse ($categories as $items)
                                <tr>
                                    <td>{{ $key++}}</td>
                                    <td>{{ $items->titre }}</td>
                                    <td>{{ $items->description }}</td>
                                    <td>
                                        <img src="{{ URL::to('uploads/categorie/' .$items->images) }}" width="60" height="60" />
                                    </td>
                                    <td>
                                        <a href="#" wire:click="editCategorie('{{ encrypt($items->id) }}')" data-bs-toggle="modal" data-bs-target="#addCategorie" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="#" wire:click="DestroyCategorie('{{ encrypt($items->id) }}')" data-bs-toggle="modal" data-bs-target="#deleteCategorie" class="btn btn-danger"><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Pas de Categories</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
</div>

