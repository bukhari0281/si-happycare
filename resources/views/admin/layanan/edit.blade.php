@foreach ($items as $item)
<!-- Vertically Centered modal Modal -->
<div class="modal fade" id="editLayananModal{{ $item->id }}" tabindex="-1" role="dialog"
aria-labelledby="editLayananModalTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
    role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editLayananModalTitle">Ubah Layanan
            </h5>
            <button type="button" class="close" data-bs-dismiss="modal"
                aria-label="Close">
                <i data-feather="x"></i>
            </button>
        </div>
        <div class="modal-body">
          <form action="{{ url('layanan/'.$item->id) }}" method="POST">
            @method('PUT')
            @csrf
            <label for="name">Layanan</label>
            <input type="text" class="form-control mb-5" aria-describedby="helpId" name="name" id="name" placeholder="Layanan" value="{{ old('name',$item->name) }}">
            <button type="button" class="btn btn-light-secondary"
                data-bs-dismiss="modal">
                <i class="bx bx-x d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Tutup</span>
            </button>
            <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                <i class="bx bx-check d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Ubah</span>
            </button>
          </form>
        </div>
    </div>
</div>
</div>

@endforeach
