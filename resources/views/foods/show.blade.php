<!-- Modal -->
<div class="modal fade" id="{{ $modalId }}" tabindex="-1" aria-labelledby="{{ $modalId }}Label" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header bg-light text-dark rounded-top-4">
                <h5 class="modal-title" id="{{ $modalId }}Label">Detail Makanan: {{ $f->name }}</h5>
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    @if ($f->image)
                    <div class="col-md-5 text-center mb-3 mb-md-0">
                        <img src="{{ asset('storage/' . $f->image) }}" alt="{{ $f->name }}" class="img-fluid rounded shadow" style="height: 250px; width: 100%; object-fit: cover;">
                    </div>
                    @endif
                    <div class="col-md-7">
                        <p><strong>Deskripsi:</strong> {{ $f->description }}</p>
                        <p><strong>Nutrition Fact:</strong> {{ $f->nutrition_fact }}</p>
                        <p><strong>Harga:</strong> <span class="text-success fw-semibold">Rp {{ number_format($f->price, 0, ',', '.') }}</span></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-light rounded-bottom-4">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>