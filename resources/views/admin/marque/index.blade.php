@extends('layouts.admin')
@section('title','Marque')
@section('content')
    <livewire:admin.marque.index>
@endsection
@push('script')
    <script>
        window.addEventListener('close-modal' , event => {
            $('#addMarque').modal('hide');
            $('#deleteMarque').modal('hide');
        });
    </script>
@endpush
