@extends('admin.utils.layout')
@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Form Edit Data</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('tourist-destination') }}">Wisata</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
 <!-- Basic Horizontal form layout section start -->

 <section id="basic-horizontal-layouts">
     <div class="card">
         <div class="card-header">
             <h4 class="card-title">Horizontal Form</h4>
             @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
         </div>
         <div class="card-content">
             <div class="card-body">
                 <form action="{{ url('tourist-destination/'.$td->id) }}" method="POST" class="form form-horizontal" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="name">Nama Tempat</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" id="name" name="name" value="{{ $td->name }}">
                            </div>
                            <div class="col-md-4">
                                <label for="description">Deskripsi</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <textarea type="text" class="form-control" id="description" name="description" rows="7" >{{ old('description', $td->description) }}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="wisata_kategori_id">Jenis Wisata</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <select class="form-control" id="wisata_kategori_id"  name="wisata_kategori_id" >
                                    @foreach ($wisataKategori as $item)
                                    @if ($item->id == $td->wisata_kategori_id)
                                        <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                    @endif
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="bahasa_id">Bahasa yang digunakan</label>
                            </div>
                            <div class="col-md-8 form-group">
                                @php
                                    $selectedBahasaIDs = $td->bahasa->pluck('id')->toArray();
                                @endphp
                                @foreach ($bahasa as $itemID => $namaBahasa)
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="bahasa_id[]" value="{{ $itemID }}" @checked(in_array($itemID, $selectedBahasaIDs))>
                                    <label class="form-check-label">
                                        {{ $namaBahasa }}
                                    </label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-sm-12 d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                <button type="reset"
                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </div>
                 </form>
             </div>
         </div>
     </div>

</section>
@endsection
