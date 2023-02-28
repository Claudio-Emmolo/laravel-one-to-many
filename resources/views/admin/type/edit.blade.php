@extends('layouts.adminProject')

@section('title', 'Type')

@section('main-app')
    <section id="form" class="d-flex pt-5">
        <a href="{{ route('admin.types.index') }}" class="ms-5 btn btn-dark"><i class="fa-solid fa-arrow-left"></i></a>
        <form action="{{ route('admin.types.update', $type->id) }}" method="POST" class="m-auto">
            @csrf
            @method('PUT')
            <input type="text" name="name" value="{{ old('name', $type->name) }}">
            <button class="btn btn-success d-block mx-auto mt-3">Save</button>
        </form>

    </section>

@endsection
