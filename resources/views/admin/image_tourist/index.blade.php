@extends('admin.utils.layout')
@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Gambar</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <!-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/galeri') }}">Galeri</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
                </ol> -->
            </nav>
        </div>
    </div>
</div>
 <!-- Basic Horizontal form layout section start -->

 <section id="basic-horizontal-layouts">
     <div class="card">
         <div class="card-header">
            <!-- <h4 class="card-title">Horizontal Form</h4> -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
         </div>
         <div class="card-content">
             <div class="card-body">
                    <h3 class="card-title">{{ $items->name }}</h3>
                 <form action="{{ url('admin/tourist-destination/'.$items->id.'/image') }}" method="POST" class="form form-horizontal" enctype="multipart/form-data">
                     @csrf
                     <div class="form-body">
                         <div class="row">
                             <div class="col-md-4">
                                 <label for="url">Upload Gambar</label>
                             </div>
                             <div class="col-md-8 form-group">
                                 <input type="file" id="url" class="form-control" name="url[]" multiple>
                                 <small>Supported formats: JPG, JPEG, PNG. Max size: 2MB per image.</small>
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

 <section id="basic-horizontal-layouts">
     <div class="card">
        <div class="card-header">
            <div class="card-content">
                <div class="card-body">
                    @foreach ($images as $item)
                        <div class="row">
                            <div class="col">
                                <img src="{{ asset('storage/gallery/'.$item->url) }}" alt="Image Gallery" class="m-2" style="width: 20%">
                                <a href="{{ url('admin/image/'.$item->id.'/delete') }}" class="btn btn-danger btn-sm">Hapus </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


</section>

@endsection
