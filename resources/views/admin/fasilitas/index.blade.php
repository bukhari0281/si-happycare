@extends('admin.utils.layout')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Fasilitas</h3>
                <p class="text-subtitle text-muted">Fasilitas yang disediakan</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('fasilitas') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Fasilitas</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-outline-primary block float-end" href="{{ url('fasilitas/create') }}">
                        Tambah Fasilitas
                </a>

            </div>
            <div class="card-content">
                <div class="card-body">
                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>

                                <tr>
                                    <th>No.</th>
                                    <th>Fasilitas</th>
                                    <th>Jumlah</th>
                                    <th>Wisata</th>
                                    <th>Faskes</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                <?php $i=1; ?>
                                    @forelse ($items as $alt)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        {{-- <td>{{ $alt->healthDestination->name }}</td>
                                        <td>{{ $alt->touristDestination->name }}</td> --}}
                                        <td>{{ $alt->name }}</td>
                                        <td>{{ $alt->qty }}</td>
                                        @if ($alt->healthDestination )
                                            <td>{{ $alt->healthDestination->name }}</td>
                                        @endif
                                        {{-- @if ($alt->touristDestination)
                                            <td>{{ $alt->touristDestination->name }}</td>
                                        @endif --}}
                                        <td>{{ $alt->name }}</td>
                                        <td>
                                                <a href="{{ url("fasilitas/$alt->id/edit") }}" class="btn btn-secondary block">Edit</a>
                                                <button data-bs-toggle="modal" data-bs-target="#deleteFasilitasModal{{ $alt->id }}" class="btn btn-danger block">Hapus</button>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                    @empty
                                    <tr>
                                        <td>
                                            Data kosong
                                        </td>
                                        <td>
                                            Data kosong
                                        </td>
                                        <td>
                                            Data kosong
                                        </td>
                                        <td>
                                            Data kosong
                                        </td>
                                        <td>
                                            Data kosong
                                        </td>
                                        <td>
                                            Data kosong
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
@include('admin.fasilitas.delete')
@endsection


{{--
    <section class="section">
        <div class="row" id="basic-table">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">

                        <a class="btn btn-outline-primary block float-end" href="{{ url('layanan/create') }}">
                                Tambah Layanan
                        </a>

                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Table -->
                            <div class="table-responsive">
                                <table class="table table-lg">
                                    <thead>

                                        <tr>
                                            <th>No.</th>
                                            <th>Faskes</th>
                                            <th>Wisata</th>
                                            <th>Layanan yang tersedia</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; ?>
                                        @forelse ($items as $alt)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $alt->healthDestination->name }}</td>
                                            <td>{{ $alt->touristDestination->name }}</td>
                                            <td>{{ $alt->name }}</td>
                                            <td>
                                                  <button data-bs-toggle="modal" data-bs-target="#editLayananModal{{ $alt->id }}" class="btn btn-secondary block">Edit</button>
                                                  <button data-bs-toggle="modal" data-bs-target="#deleteLayananModal{{ $alt->id }}" class="btn btn-danger block">Hapus</button>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                        @empty
                                        <tr>
                                            <td>
                                                Data layanan masih kosong
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Masih Kosong</h1>

                    </div>
                    <div class="card-content m-4">
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
                </div>
            </div>
        </div>
    </section> --}}
