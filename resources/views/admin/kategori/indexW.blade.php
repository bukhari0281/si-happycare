@extends('admin.utils.layout')
@section('content')
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-lg">
                    <thead>

                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        @forelse ($wisataKategori as $alt)
                        <tr>
                            <input type="hidden" class="id" value="{{ $alt->id }}">
                            <td>{{ $i }}</td>
                            <td>{{ $alt->name }}</td>
                            <td>
                                  {{-- <a href="{{ url("tourist-destination/$alt->id/edit") }}" class="btn btn-secondary block">Edit</a> --}}
                                  <button data-bs-toggle="modal" data-bs-target="#deleteTDModal{{ $alt->id }}" class="btn btn-danger block">Hapus</button>
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
                            {{-- <td>
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
                            </td> --}}
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
