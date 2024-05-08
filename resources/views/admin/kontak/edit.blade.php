@extends('admin.utils.layout')
@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Kontak</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('kontak') }}">Kontak</a></li>
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
             <h4 class="card-title">Edit Data Kontak</h4>
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
                 <form action="{{ url('kontak/'.$items->id) }}" method="POST" class="form form-horizontal" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="email">Email</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" id="email" name="email" value="{{ $items->email }}">
                            </div>
                            <div class="col-md-4">
                                <label for="city_id">Kota</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <select class="form-control" id="city_id"  name="city_id" >
                                    @foreach ($kotas as $hd)
                                    @if($hd->id == $items->city_id)
                                        <option value="{{ $hd->id }}" selected>{{ $hd->name }}</option>
                                    @endif
                                        <option value="{{ $hd->id }}">{{ $hd->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="address">Alamat Lengkapnya</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" id="address" name="address" value="{{ $items->address }}">
                            </div>
                            <div class="col-md-4">
                                <label for="phone">Alamat Lengkapnya</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $items->phone }}">
                            </div>
                            <div class="col-md-4">
                                <label for="tourist_destination_id">Wisata?</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <select class="form-control" id="tourist_destination_id"  name="tourist_destination_id" >
                                    @foreach ($touristDestination as $td)
                                    @if($td->id == $items->tourist_destination_id)
                                        <option value="{{ $td->id }}" selected>{{ $td->name }}</option>
                                    @endif
                                        <option value="{{ $td->id }}">{{ $td->name }}</option>
                                    @endforeach
                                </select>
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
