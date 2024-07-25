// resources/views/admin/dashboard.blade.php

@extends('open-admin::layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Dashboard</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('admin.services.index') }}" class="btn btn-primary">Manage Services</a>
            <!-- Other dashboard contents -->
        </div>
    </div>
@endsection
