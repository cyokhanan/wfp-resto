<!-- Modal Edit -->
<div class="modal fade" id="editModal_{{ $f->id }}" tabindex="-1" aria-labelledby="editModalLabel_{{ $f->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('foods.update', $f->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel_{{ $f->id }}">Edit Makanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name_{{ $f->id }}" class="form-label">Nama Makanan</label>
                        <input type="text" class="form-control" name="name" value="{{ $f->name }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="category_id_{{ $f->id }}" class="form-label">Kategori</label>
                        <select class="form-control" name="category_id" required>
                            @foreach ($categories as $c)
                                <option value="{{ $c->id }}" {{ $f->category_id == $c->id ? 'selected' : '' }}>
                                    {{ $c->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="description_{{ $f->id }}" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="description">{{ $f->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="nutrition_{{ $f->id }}" class="form-label">Nutrition Fact</label>
                        <textarea class="form-control" name="nutrition">{{ $f->nutrition_fact }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="price_{{ $f->id }}" class="form-label">Harga</label>
                        <input type="number" class="form-control" name="price" value="{{ $f->price }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Gambar Saat Ini</label><br>
                        <img src="{{ asset('storage/' . $f->image) }}" alt="Gambar Makanan" class="img-fluid mb-2" style="max-height: 200px;">
                    </div>

                    <div class="mb-3">
                        <label for="image_{{ $f->id }}" class="form-label">Ubah Gambar</label>
                        <input type="file" class="form-control" name="image" accept="image/*">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>