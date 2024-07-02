@extends('admin.utils.layout')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Bahasa</h3>
                <p class="text-subtitle text-muted">Bahasa yang tersedia</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <!-- <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index_dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Bahasa</li>
                    </ol> -->
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                {{-- <a class="btn btn-outline-primary block" href="{{ url('bahasa/create') }}">
                        Tambah Data
                </a> --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success-delete'))
                    <div class="alert alert-success">
                        {{ session('success-delete') }}
                        <p class="text-bold">{{ $item->name }}</p>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('success-update'))
                    <div class="alert alert-success">
                        {{ session('success-update') }}
                    </div>
                @endif
            </div>
            <div class="card-content">
                <div class="card-body">
                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>

                                <tr>
                                    <th>No.</th>
                                    <th>Bahasa</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                @forelse ($items as $alt)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $alt->name }}</td>
                                </tr>
                                <?php $i++; ?>
                                @empty
                                <tr>
                                    <td>
                                        Data Bahasa masih kosong
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
{{-- @include('admin.layanan.create')
@include('admin.layanan.edit')
@include('admin.layanan.delete') --}}
@endsection
