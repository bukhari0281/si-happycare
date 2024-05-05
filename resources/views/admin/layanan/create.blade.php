@extends('admin.utils.layout')
@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Form Layout</h3>
            <p class="text-subtitle text-muted">Multiple form layouts, you can use.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('health-destination') }}">Daftar Tempat</a></li>
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
                 <form action="{{ url('layanan') }}" method="POST" class="form form-horizontal" enctype="multipart/form-data">
                     @csrf
                     <div class="form-body">
                         <div class="row">
                             <div class="col-md-4">
                                 <label for="name">Layanan apa yang akan disediakan</label>
                             </div>
                             <div class="col-md-8 form-group">
                                 <input type="text" id="name" class="form-control" name="name"
                                     placeholder="Nama Tempat">
                             </div>
                             <div class="col-md-4">
                                 <label for="description">Deskripsi</label>
                             </div>
                             <div class="col-md-8 form-group">
                                 <textarea type="text" class="form-control" id="description" name="description" placeholder="Deskripsi" rows="7" ></textarea>
                             </div>
                             <div class="col-md-4">
                                 <label for="health_destination_id">Kategori Faskes</label>
                             </div>
                             <div class="col-md-8 form-group">
                                 <select class="form-control" id="health_destination_id"  name="health_destination_id" >
                                     <option value="" hidden>-- Pilih --</option>
                                     @foreach ($healthDestination as $hd)
                                         <option value="{{ $hd->id }}">{{ $hd->name }}</option>
                                     @endforeach
                                 </select>
                             </div>
                             <div class="col-md-4">
                                 <label for="tourist_destination_id">Kategori Wisata</label>
                             </div>
                             <div class="col-md-8 form-group">
                                 <select class="form-control" id="tourist_destination_id"  name="tourist_destination_id" >
                                     <option value="" hidden>-- Pilih --</option>
                                     @foreach ($touristDestination as $td)
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
