@foreach ($items as $item)
<!-- Vertically Centered modal Modal -->
<div class="modal fade" id="deleteHDModal{{ $item->id }}" tabindex="-1" role="dialog"
aria-labelledby="deleteHDModalTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
    role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="deleteHDModalTitle">Hapus Data
            </h5>
            <button type="button" class="close" data-bs-dismiss="modal"
                aria-label="Close">
                <i data-feather="x"></i>
            </button>
        </div>
        <div class="modal-body">
          <form action="{{ url('health-destination/'.$item->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <p>
                Apakah Anda yakin ingin menghapus data <strong>{{ $item->name }}</strong>?
            </p>
            <button type="button" class="btn btn-light-secondary"
                data-bs-dismiss="modal">
                <i class="bx bx-x d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Tutup</span>
            </button>
            <button type="submit" class="btn btn-danger ms-1" data-bs-dismiss="modal">
                <i class="bx bx-check d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Hapus</span>
            </button>
          </form>
        </div>
    </div>
</div>
</div>

@endforeach
