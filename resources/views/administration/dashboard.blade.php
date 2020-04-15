@extends('layouts.app')

@section('content')
    <div class="colorbar"></div>
    <div class="container mt-4">
        <h1>Administration Dashboard</h1>
        <div class="row">
            <div class="col-md-3">
                <a href="/admin/property">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <h4>Properties</h4>
                            <i class="fas fa-home fa-8x text-center mb-3"></i><br />
                            <button class="btn btn-sm btn-dark">Edit Properties</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="/admin/user">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <h4>Users</h4>
                            <i class="fas fa-user fa-8x text-center mb-3"></i><br />
                            <button class="btn btn-sm btn-dark">Edit Users</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="/admin/venue">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <h4>Venues</h4>
                            <i class="fas fa-beer fa-8x text-center mb-3"></i><br />
                            <button class="btn btn-sm btn-dark">Edit Venues</button>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="colorbar mt-5"></div>
@endsection