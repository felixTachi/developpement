@extends('layouts.form')
@section('card')
    @component('components.card')
        @slot('title')
            @lang('Ajouter un versement')
        @endslot
        <form method="POST" action="{{ route('versement.store') }}">
            {{ csrf_field() }}
            @include('partials.form-group', [
                'title' => __('Somme'),
                'type' => 'number',
                'name' => 'montant',
                'required' => true,
                ])
                @component('components.datepiker')
                @lang('date de versement')
                @endcomponent
            @component('components.button')
                @lang('Envoyer')
            @endcomponent
        </form>
    @endcomponent            
@endsection