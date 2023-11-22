@extends('layouts.admin')
@section('title','Categorie')
@section('content')
    <livewire:admin.categorie.index>
@endsection
    @push('script')
        <script>
            window.addEventListener('close-modal' , event => {
                $('#addCategorie').modal('hide');
                /*$('#deleteBrandModal').modal('hide');*/
            });
        </script>
    @endpush
