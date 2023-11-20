@extends('layouts.admin')
@section('title','Couleur')
@section('content')
    <livewire:admin.couleur.index>
@endsection
@push('script')
    <script>
        window.addEventListener('close-modal' , event => {
            $('#addCouleur').modal('hide');
            $('#deleteBrandModal').modal('hide');
        });
    </script>
@endpush
