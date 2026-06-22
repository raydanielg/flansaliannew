@extends('admin.layouts.admin')

@section('page-title', 'Gallery')

@section('content')
<div class="row mb-4 animate__animated animate__fadeInUp">
    <div class="col-12">
        <div class="admin-card p-4">
            <h5 class="fw-bold text-primary mb-3"><i class="bi bi-plus-circle me-2"></i>Add Gallery Image</h5>
            <form method="POST" action="{{ route('admin.gallery.store') }}">
                @csrf
                <div class="row g-3">
                    <div class="col-md-4"><input type="text" name="title" class="form-control" placeholder="Image Title" required></div>
                    <div class="col-md-3"><input type="text" name="image" class="form-control" placeholder="Image URL/Path" required></div>
                    <div class="col-md-2"><input type="text" name="category" class="form-control" placeholder="Category" required></div>
                    <div class="col-md-1"><input type="number" name="order" class="form-control" placeholder="Order" value="0" required></div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary w-100 fw-bold"><i class="bi bi-plus-lg me-1"></i>Add</button>
                    </div>
                    <div class="col-12">
                        <textarea name="description" class="form-control" rows="2" placeholder="Description..."></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row animate__animated animate__fadeInUp animate__delay-1s">
    <div class="col-12">
        <div class="admin-card">
            <div class="admin-card-header">
                <h5><i class="bi bi-images me-2 text-primary"></i> Gallery</h5>
                <span class="badge bg-primary">{{ $galleries->total() }} Images</span>
            </div>
            <div class="p-4">
                <div class="row g-3">
                    @forelse($galleries as $img)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card border-0 rounded-4 shadow-sm overflow-hidden" style="transition: transform 0.2s;" onmouseover="this.style.transform='translateY(-4px)'" onmouseout="this.style.transform='translateY(0)'">
                            <div style="height: 160px; background: #f0f0f0; overflow: hidden;">
                                <img src="{{ asset($img->image) }}" alt="{{ $img->title }}" class="w-100 h-100" style="object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x160?text=No+Image'">
                            </div>
                            <div class="card-body p-3">
                                <h6 class="fw-bold mb-1 text-truncate">{{ $img->title }}</h6>
                                <p class="text-muted small mb-2 text-truncate">{{ $img->description ?? 'No description' }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-light text-dark">{{ $img->category }}</span>
                                    <div class="d-flex gap-1">
                                        <button class="btn btn-sm btn-outline-primary rounded-circle" style="width:30px;height:30px;padding:0;" data-bs-toggle="modal" data-bs-target="#editGallery{{ $img->id }}"><i class="bi bi-pencil" style="font-size:0.7rem;"></i></button>
                                        <form method="POST" action="{{ route('admin.gallery.delete', $img) }}" onsubmit="return confirm('Delete?');">@csrf @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger rounded-circle" style="width:30px;height:30px;padding:0;"><i class="bi bi-trash" style="font-size:0.7rem;"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center text-muted py-5">
                        <i class="bi bi-images fs-1 d-block mb-3 opacity-25"></i>
                        No gallery images yet.
                    </div>
                    @endforelse
                </div>
                <div class="mt-4">{{ $galleries->links() }}</div>
            </div>
        </div>
    </div>
</div>

@foreach($galleries as $img)
<div class="modal fade" id="editGallery{{ $img->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content rounded-4">
            <div class="modal-header">
                <h5 class="modal-title fw-bold text-primary">Edit Gallery</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST" action="{{ route('admin.gallery.update', $img) }}">
                @csrf @method('PUT')
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12"><label class="form-label fw-bold">Title</label><input type="text" name="title" class="form-control" value="{{ $img->title }}" required></div>
                        <div class="col-12"><label class="form-label fw-bold">Image URL/Path</label><input type="text" name="image" class="form-control" value="{{ $img->image }}" required></div>
                        <div class="col-md-6"><label class="form-label fw-bold">Category</label><input type="text" name="category" class="form-control" value="{{ $img->category }}" required></div>
                        <div class="col-md-6"><label class="form-label fw-bold">Order</label><input type="number" name="order" class="form-control" value="{{ $img->order }}" required></div>
                        <div class="col-12"><label class="form-label fw-bold">Description</label><textarea name="description" class="form-control" rows="2">{{ $img->description }}</textarea></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary rounded-pill px-4 fw-bold">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection
