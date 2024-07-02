@extends('admin.utils.layout')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tourist Destination</h3>
                <p class="text-subtitle text-muted">Tempat yang didaftarkan</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <!-- <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin/tourist-destination') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tourist Destination</li>
                    </ol> -->
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-outline-primary block float-end" href="{{ url('admin/tourist-destination/create') }}">
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
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Jenis Wisata</th>
                                    <th>Bahasa yang digunakan</th>
                                    {{-- <th>Bahasa yang digunakan</th>
                                    <th>Layanan yang disediakan</th> --}}
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
                                    <td>{{ $alt->wisataKategori->name }}</td>
                                    <td>{{ implode(', ', $alt->bahasa->pluck('name')->toArray()) }}</td>
                                    <td>
                                          <a href="{{ url("admin/tourist-destination/$alt->id") }}" class="btn btn-primary block btn-sm">Detail</a>
                                          <a href="{{ url("admin/tourist-destination/$alt->id/edit") }}" class="btn btn-secondary block btn-sm">Edit</a>
                                          <button data-bs-toggle="modal" data-bs-target="#deleteTDModal{{ $alt->id }}" class="btn btn-danger block btn-sm">Hapus</button>
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
@include('admin.touristDestination.delete')
@endsection

