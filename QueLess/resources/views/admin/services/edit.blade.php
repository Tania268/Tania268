// resources/views/admin/services/edit.blade.php
@extends('open-admin::layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Edit Service</h3>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.services.update', $service->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Service Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $service->name }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Service Description</label>
                    <textarea name="description" class="form-control">{{ $service->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
@endsection
