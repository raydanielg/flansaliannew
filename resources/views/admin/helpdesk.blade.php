@extends('admin.layouts.admin')

@section('page-title', 'Help Desk')

@section('content')
<div class="row mb-4 animate__animated animate__fadeInUp">
    <div class="col-12">
        <div class="admin-card p-4">
            <h5 class="fw-bold text-primary mb-3"><i class="bi bi-plus-circle me-2"></i>Add FAQ</h5>
            <form method="POST" action="{{ route('admin.helpdesk.store') }}">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" name="question" class="form-control" placeholder="Question" required>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="category" class="form-control" placeholder="Category" required>
                    </div>
                    <div class="col-md-2">
                        <input type="number" name="order" class="form-control" placeholder="Order" value="0" required>
                    </div>
                    <div class="col-12">
                        <textarea name="answer" class="form-control" rows="2" placeholder="Answer..." required></textarea>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary px-4 fw-bold"><i class="bi bi-plus-lg me-1"></i>Add FAQ</button>
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
                <h5><i class="bi bi-question-circle me-2 text-primary"></i> All FAQs</h5>
                <span class="badge bg-primary">{{ $faqs->total() }} FAQs</span>
            </div>
            <div class="admin-card-body">
                <div class="table-responsive">
                    <table class="admin-table table mb-0">
                        <thead>
                            <tr>
                                <th>Order</th>
                                <th>Question</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($faqs as $faq)
                            <tr>
                                <td><span class="badge bg-secondary">{{ $faq->order }}</span></td>
                                <td><strong>{{ Str::limit($faq->question, 50) }}</strong><br><small class="text-muted">{{ Str::limit($faq->answer, 60) }}</small></td>
                                <td>{{ $faq->category }}</td>
                                <td>
                                    @if($faq->is_active)
                                        <span class="status-badge status-approved">Active</span>
                                    @else
                                        <span class="status-badge status-pending">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-sm btn-outline-primary rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#editFaq{{ $faq->id }}"><i class="bi bi-pencil"></i></button>
                                        <form method="POST" action="{{ route('admin.helpdesk.delete', $faq) }}" onsubmit="return confirm('Delete this FAQ?');">@csrf @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr><td colspan="5" class="text-center text-muted py-5"><i class="bi bi-inbox fs-1 d-block mb-3 opacity-25"></i>No FAQs yet.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="p-3 border-top">{{ $faqs->links() }}</div>
            </div>
        </div>
    </div>
</div>

@foreach($faqs as $faq)
<div class="modal fade" id="editFaq{{ $faq->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded-4">
            <div class="modal-header">
                <h5 class="modal-title fw-bold text-primary">Edit FAQ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST" action="{{ route('admin.helpdesk.update', $faq) }}">
                @csrf @method('PUT')
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6"><label class="form-label fw-bold">Question</label><input type="text" name="question" class="form-control" value="{{ $faq->question }}" required></div>
                        <div class="col-md-3"><label class="form-label fw-bold">Category</label><input type="text" name="category" class="form-control" value="{{ $faq->category }}" required></div>
                        <div class="col-md-3"><label class="form-label fw-bold">Order</label><input type="number" name="order" class="form-control" value="{{ $faq->order }}" required></div>
                        <div class="col-12"><label class="form-label fw-bold">Answer</label><textarea name="answer" class="form-control" rows="3" required>{{ $faq->answer }}</textarea></div>
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
