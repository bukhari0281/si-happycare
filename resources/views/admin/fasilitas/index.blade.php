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
                    <!-- <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin/fasilitas') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Fasilitas</li>
                    </ol> -->
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-outline-primary block float-end" href="{{ url('admin/fasilitas/create') }}">
                        Tambah Data
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
                                    <th>Jenis</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                    @forelse ($items as $alt)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        {{-- <td>{{ $alt->healthDestination->name }}</td>
                                        <td>{{ $alt->touristDestination->name }}</td> --}}
                                        <td>{{ $alt->name }}</td>
                                        <td>{{ $alt->qty }}</td>
                                        @if ($alt->healthDestination )
                                            <td>Faskes {{ $alt->healthDestination->name }}</td>
                                        @endif
                                        @if ($alt->touristDestination)
                                            <td>Wisata {{ $alt->touristDestination->name }}</td>
                                        @endif
                                        <td>
                                                <a href="{{ url("admin/fasilitas/$alt->id/edit") }}" class="btn btn-secondary block btn-sm">Edit</a>
                                                <button data-bs-toggle="modal" data-bs-target="#deleteFasilitasModal{{ $alt->id }}" class="btn btn-danger block btn-sm">Hapus</button>
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

