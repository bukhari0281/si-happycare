@extends('admin.utils.layout')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Health Destination</h3>
                <p class="text-subtitle text-muted">Tempat yang didaftarkan</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <!-- <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin/health-destination') }}">Health Destination</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tempat</li>
                    </ol> -->
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-outline-primary block float-end" href="{{ url('admin/health-destination/create') }}">
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
                                    <th>Nama Tempat</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                @forelse ($items as $alt)
                                <tr>
                                    <input type="hidden" class="id" value="{{ $alt->id }}">
                                    <td>{{ $i }}</td>
                                    <td>{{ $alt->name }}</td>
                                    <td class="mb-0 text-truncate" style="max-width: 200px;">{{ $alt->description }}</td>
                                    <td>
                                        <a href="{{ url('admin/health-destination/'.$alt->id.'/image') }}" class="btn btn-primary block btn-sm">Tambah Gambar / lihat gambar</a>
                                    </td>
                                    {{-- <td>{{ implode(', ', $alt->bahasa->pluck('name')->toArray()) }}</td> --}}
                                    <td>
                                          <a href="{{ url("admin/health-destination/$alt->id") }}" class="btn btn-primary block btn-sm">Detail</a>
                                          <a href="{{ url("admin/health-destination/$alt->id/edit") }}" class="btn btn-secondary block btn-sm">Edit</a>
                                          <button data-bs-toggle="modal" data-bs-target="#deleteHDModal{{ $alt->id }}" class="btn btn-danger block btn-sm">Hapus</button>
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
@include('admin.healthDestination.delete')
@endsection

