@extends('admin.layouts.admin')

@section('page-title', 'Feedback')

@section('content')
<div class="row animate__animated animate__fadeInUp">
    <div class="col-12">
        <div class="admin-card">
            <div class="admin-card-header">
                <h5><i class="bi bi-chat-left-text me-2 text-primary"></i> All Feedback</h5>
                <span class="badge bg-primary">{{ $feedbacks->total() }} Messages</span>
            </div>
            <div class="admin-card-body">
                <div class="table-responsive">
                    <table class="admin-table table mb-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($feedbacks as $fb)
                            <tr>
                                <td><strong>{{ $fb->name }}</strong></td>
                                <td><small class="text-muted">{{ $fb->email }}</small></td>
                                <td>{{ $fb->subject ?? 'N/A' }}</td>
                                <td>{{ Str::limit($fb->message, 50) }}</td>
                                <td>{{ $fb->created_at?->format('M d, Y H:i') }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-sm btn-outline-info rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#viewFeedback{{ $fb->id }}"><i class="bi bi-eye"></i></button>
                                        <form method="POST" action="{{ route('admin.feedback.delete', $fb) }}" onsubmit="return confirm('Delete this feedback?');">@csrf @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr><td colspan="6" class="text-center text-muted py-5"><i class="bi bi-inbox fs-1 d-block mb-3 opacity-25"></i>No feedback messages yet.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="p-3 border-top">{{ $feedbacks->links() }}</div>
            </div>
        </div>
    </div>
</div>

@foreach($feedbacks as $fb)
<div class="modal fade" id="viewFeedback{{ $fb->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content rounded-4">
            <div class="modal-header">
                <h5 class="modal-title fw-bold text-primary">Feedback Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p><strong class="text-muted">From:</strong> {{ $fb->name }} ({{ $fb->email }})</p>
                <p><strong class="text-muted">Subject:</strong> {{ $fb->subject ?? 'N/A' }}</p>
                <p><strong class="text-muted">Date:</strong> {{ $fb->created_at?->format('M d, Y H:i') }}</p>
                <hr>
                <p class="mb-0">{{ $fb->message }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
