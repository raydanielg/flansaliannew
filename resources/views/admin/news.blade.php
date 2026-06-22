@extends('admin.layouts.admin')

@section('page-title', 'News')

@section('content')
<div class="row mb-4 animate__animated animate__fadeInUp">
    <div class="col-12">
        <div class="admin-card p-4">
            <h5 class="fw-bold text-primary mb-3"><i class="bi bi-plus-circle me-2"></i>Add News Article</h5>
            <form method="POST" action="{{ route('admin.news.store') }}">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" name="title" class="form-control" placeholder="Article Title" required>
                    </div>
                    <div class="col-md-3">
                        <input type="date" name="published_at" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" name="is_active" value="1" checked id="isActive">
                            <label class="form-check-label fw-bold" for="isActive">Active</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <textarea name="content" class="form-control" rows="3" placeholder="Article content..." required></textarea>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary px-4 fw-bold"><i class="bi bi-plus-lg me-1"></i>Publish</button>
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
                <h5><i class="bi bi-newspaper me-2 text-primary"></i> All News</h5>
                <span class="badge bg-primary">{{ $news->total() }} Articles</span>
            </div>
            <div class="admin-card-body">
                <div class="table-responsive">
                    <table class="admin-table table mb-0">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Published</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($news as $item)
                            <tr>
                                <td><strong>{{ Str::limit($item->title, 40) }}</strong></td>
                                <td><small class="text-muted">{{ $item->slug }}</small></td>
                                <td>{{ $item->published_at ? \Carbon\Carbon::parse($item->published_at)->format('M d, Y') : 'Draft' }}</td>
                                <td>
                                    @if($item->is_active)
                                        <span class="status-badge status-approved">Active</span>
                                    @else
                                        <span class="status-badge status-pending">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-sm btn-outline-primary rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#editNews{{ $item->id }}"><i class="bi bi-pencil"></i></button>
                                        <form method="POST" action="{{ route('admin.news.delete', $item) }}" onsubmit="return confirm('Delete this article?');">@csrf @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr><td colspan="5" class="text-center text-muted py-5"><i class="bi bi-inbox fs-1 d-block mb-3 opacity-25"></i>No news articles yet.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="p-3 border-top">{{ $news->links() }}</div>
            </div>
        </div>
    </div>
</div>

@foreach($news as $item)
<div class="modal fade" id="editNews{{ $item->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded-4">
            <div class="modal-header">
                <h5 class="modal-title fw-bold text-primary">Edit News</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST" action="{{ route('admin.news.update', $item) }}">
                @csrf @method('PUT')
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $item->title }}" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label fw-bold">Published Date</label>
                            <input type="date" name="published_at" class="form-control" value="{{ $item->published_at ? \Carbon\Carbon::parse($item->published_at)->format('Y-m-d') : '' }}">
                        </div>
                        <div class="col-md-3">
                            <div class="form-check mt-4">
                                <input class="form-check-input" type="checkbox" name="is_active" value="1" {{ $item->is_active ? 'checked' : '' }} id="editActive{{ $item->id }}">
                                <label class="form-check-label fw-bold" for="editActive{{ $item->id }}">Active</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-bold">Content</label>
                            <textarea name="content" class="form-control" rows="4" required>{{ $item->content }}</textarea>
                        </div>
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
