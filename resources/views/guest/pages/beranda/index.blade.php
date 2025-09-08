@extends('guest.layouts.main')

@section('document.head')
@endsection

@section('document.body')
<div class="hero bg-base-200 py-20 text-center pt-24">
    <div class="container mx-auto px-4">
        <h1 class="text-5xl font-bold mb-6">Prototype AI UNMUL</h1>
        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/logo/LogoAI (3).png') }}" alt="Logo AI" class="max-w-xs">
        </div>
        <p class="text-xl mb-8">Kasih Bagoyang Test</p>
        <a href="#" class="btn btn-neutral btn-lg">Welcome to Prototype</a>
    </div>
</div>
@endsection


