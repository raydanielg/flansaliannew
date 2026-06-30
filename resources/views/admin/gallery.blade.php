@extends('admin.layouts.admin')

@section('page-title', 'Gallery')

@section('content')
<div class="row mb-4 animate__animated animate__fadeInUp">
    <div class="col-12">
        <div class="admin-card p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-bold text-primary mb-0"><i class="bi bi-cloud-upload me-2"></i>Upload Gallery Images</h5>
                <span class="badge bg-primary fs-6">{{ $galleries->total() }} Images</span>
            </div>

            <form method="POST" action="{{ route('admin.gallery.store') }}" enctype="multipart/form-data" id="galleryUploadForm">
                @csrf
                <div id="dropZone" class="drop-zone rounded-4 p-5 text-center mb-4">
                    <div class="drop-zone-content">
                        <i class="bi bi-cloud-arrow-up fs-1 text-primary mb-3 d-block"></i>
                        <p class="fw-bold text-dark mb-1">Drag & drop images here</p>
                        <p class="text-muted small mb-3">or click to browse (JPG, PNG, GIF, WEBP up to 5MB each)</p>
                        <input type="file" name="images[]" id="galleryImages" class="d-none" accept="image/*" multiple required>
                        <button type="button" class="btn btn-outline-primary rounded-pill px-4 fw-bold" onclick="document.getElementById('galleryImages').click()">
                            <i class="bi bi-folder me-2"></i>Select Images
                        </button>
                    </div>
                </div>

                <div id="imagePreviewContainer" class="row g-3 mb-4"></div>

                <div class="d-flex gap-2 justify-content-end">
                    <button type="button" class="btn btn-outline-secondary rounded-pill px-4" onclick="clearUploads()">Clear</button>
                    <button type="submit" class="btn btn-primary rounded-pill px-5 fw-bold" id="uploadBtn" disabled>
                        <i class="bi bi-cloud-upload me-2"></i>Upload All Images
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row animate__animated animate__fadeInUp animate__delay-1s">
    <div class="col-12">
        <div class="admin-card">
            <div class="admin-card-header">
                <h5 class="mb-0"><i class="bi bi-images me-2 text-primary"></i> Gallery Images</h5>
                <div class="d-flex gap-2">
                    <span class="badge bg-secondary align-self-center">{{ $galleries->total() }} total</span>
                </div>
            </div>
            <div class="p-4">
                <div class="row g-3">
                    @forelse($galleries as $img)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card gallery-card border-0 rounded-4 shadow-sm overflow-hidden h-100">
                            <div class="gallery-image-wrapper">
                                <img src="{{ asset('storage/' . $img->image) }}" alt="{{ $img->title }}" class="w-100 h-100" onerror="this.src='https://via.placeholder.com/300x200?text=No+Image'">
                                <div class="gallery-overlay">
                                    <button type="button" class="btn btn-sm btn-light rounded-circle me-2" data-bs-toggle="modal" data-bs-target="#editGallery{{ $img->id }}" title="Edit">
                                        <i class="bi bi-pencil text-primary"></i>
                                    </button>
                                    <form method="POST" action="{{ route('admin.gallery.delete', $img) }}" class="d-inline" onsubmit="return confirm('Delete this image?');">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-light rounded-circle" title="Delete">
                                            <i class="bi bi-trash text-danger"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <h6 class="fw-bold mb-1 text-truncate" title="{{ $img->title }}">{{ $img->title }}</h6>
                                <p class="text-muted small mb-2 text-truncate" title="{{ $img->description }}">{{ $img->description ?? 'No description' }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-light text-dark border">{{ $img->category }}</span>
                                    <small class="text-muted">#{{ $img->order }}</small>
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded-4">
            <div class="modal-header">
                <h5 class="modal-title fw-bold text-primary">Edit Gallery Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST" action="{{ route('admin.gallery.update', $img) }}" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6"><label class="form-label fw-bold">Title</label><input type="text" name="title" class="form-control" value="{{ $img->title }}" required></div>
                        <div class="col-md-6"><label class="form-label fw-bold">Category</label><input type="text" name="category" class="form-control" value="{{ $img->category }}" required></div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Change Image</label>
                            <input type="file" name="image" class="form-control" accept="image/*" onchange="previewEditImage(this, 'editPreview{{ $img->id }}')">
                        </div>
                        <div class="col-md-6"><label class="form-label fw-bold">Order</label><input type="number" name="order" class="form-control" value="{{ $img->order }}" required></div>
                        <div class="col-12">
                            <label class="form-label fw-bold">Current Image</label>
                            <img id="editPreview{{ $img->id }}" src="{{ asset('storage/' . $img->image) }}" class="rounded-3 shadow-sm d-block" style="max-height: 150px; object-fit: cover;">
                        </div>
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

@section('styles')
<style>
.drop-zone {
    border: 2px dashed #c2d9ff;
    background: linear-gradient(135deg, #f8fbff 0%, #eef4ff 100%);
    transition: all 0.3s ease;
    cursor: pointer;
}
.drop-zone:hover, .drop-zone.dragover {
    border-color: #0d6efd;
    background: linear-gradient(135deg, #eef4ff 0%, #e0edff 100%);
    transform: translateY(-2px);
}
.drop-zone.dragover {
    box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.15);
}
.preview-card {
    border: 1px solid #e0e6ed;
    border-radius: 16px;
    background: #fff;
    overflow: hidden;
    transition: transform 0.2s ease;
}
.preview-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
}
.preview-image {
    height: 140px;
    background: #f8f9fa;
    overflow: hidden;
}
.preview-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.gallery-card {
    transition: transform 0.2s ease;
}
.gallery-card:hover {
    transform: translateY(-5px);
}
.gallery-image-wrapper {
    height: 200px;
    background: #f0f0f0;
    overflow: hidden;
    position: relative;
}
.gallery-image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}
.gallery-card:hover .gallery-image-wrapper img {
    transform: scale(1.05);
}
.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 26, 51, 0.6);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}
.gallery-card:hover .gallery-overlay {
    opacity: 1;
}
</style>
@endsection

@section('scripts')
<script>
let selectedFiles = [];
const dropZone = document.getElementById('dropZone');
const fileInput = document.getElementById('galleryImages');
const previewContainer = document.getElementById('imagePreviewContainer');
const uploadBtn = document.getElementById('uploadBtn');

['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    dropZone.addEventListener(eventName, preventDefaults, false);
    document.body.addEventListener(eventName, preventDefaults, false);
});

['dragenter', 'dragover'].forEach(eventName => {
    dropZone.addEventListener(eventName, () => dropZone.classList.add('dragover'), false);
});

['dragleave', 'drop'].forEach(eventName => {
    dropZone.addEventListener(eventName, () => dropZone.classList.remove('dragover'), false);
});

dropZone.addEventListener('drop', handleDrop, false);
dropZone.addEventListener('click', () => fileInput.click(), false);
fileInput.addEventListener('change', handleFiles, false);

function preventDefaults(e) {
    e.preventDefault();
    e.stopPropagation();
}

function handleDrop(e) {
    const dt = e.dataTransfer;
    const files = dt.files;
    handleFiles({ target: { files: files } });
}

function handleFiles(e) {
    const files = Array.from(e.target.files);
    files.forEach(file => {
        if (!file.type.startsWith('image/')) return;
        selectedFiles.push(file);
    });
    updateFileInput();
    renderPreviews();
}

function updateFileInput() {
    const dataTransfer = new DataTransfer();
    selectedFiles.forEach(file => dataTransfer.items.add(file));
    fileInput.files = dataTransfer.files;
}

function renderPreviews() {
    previewContainer.innerHTML = '';
    selectedFiles.forEach((file, index) => {
        const reader = new FileReader();
        reader.onload = function(e) {
            const div = document.createElement('div');
            div.className = 'col-lg-3 col-md-4 col-sm-6';
            div.innerHTML = `
                <div class="preview-card h-100">
                    <div class="preview-image">
                        <img src="${e.target.result}" alt="Preview">
                    </div>
                    <div class="p-3">
                        <input type="text" name="titles[${index}]" class="form-control form-control-sm mb-2" placeholder="Image Title" required>
                        <input type="text" name="categories[${index}]" class="form-control form-control-sm mb-2" placeholder="Category" required value="General">
                        <textarea name="descriptions[${index}]" class="form-control form-control-sm mb-2" rows="2" placeholder="Description"></textarea>
                        <div class="d-flex justify-content-between align-items-center">
                            <input type="number" name="orders[${index}]" class="form-control form-control-sm" style="width:70px" placeholder="Order" value="${index}">
                            <button type="button" class="btn btn-sm btn-outline-danger rounded-circle" onclick="removeFile(${index})" style="width:30px;height:30px;padding:0;">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            `;
            previewContainer.appendChild(div);
        };
        reader.readAsDataURL(file);
    });
    updateUploadButton();
}

function removeFile(index) {
    selectedFiles.splice(index, 1);
    updateFileInput();
    renderPreviews();
}

function clearUploads() {
    selectedFiles = [];
    fileInput.value = '';
    previewContainer.innerHTML = '';
    updateUploadButton();
}

function updateUploadButton() {
    uploadBtn.disabled = selectedFiles.length === 0;
    uploadBtn.innerHTML = selectedFiles.length > 0
        ? `<i class="bi bi-cloud-upload me-2"></i>Upload ${selectedFiles.length} Image${selectedFiles.length > 1 ? 's' : ''}`
        : `<i class="bi bi-cloud-upload me-2"></i>Upload All Images`;
}

function previewEditImage(input, imgId) {
    const img = document.getElementById(imgId);
    if (input.files && input.files[0]) {
        img.src = URL.createObjectURL(input.files[0]);
    }
}
</script>
@endsection
