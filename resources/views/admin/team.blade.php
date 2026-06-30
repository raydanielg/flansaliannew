@extends('admin.layouts.admin')

@section('page-title', 'Team Management')

@section('content')
<div class="row mb-4 animate__animated animate__fadeInUp">
    <div class="col-12">
        <div class="admin-card p-4">
            <h5 class="fw-bold text-primary mb-3"><i class="bi bi-plus-circle me-2"></i>Add Team Member</h5>
            <form method="POST" action="{{ route('admin.team.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-3"><input type="text" name="name" class="form-control" placeholder="Full Name" required></div>
                    <div class="col-md-3"><input type="text" name="position" class="form-control" placeholder="Position / Role" required></div>
                    <div class="col-md-3"><input type="file" name="photo" class="form-control" accept="image/*" required></div>
                    <div class="col-md-1"><input type="number" name="order" class="form-control" placeholder="Order" value="0" required></div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary fw-bold w-100"><i class="bi bi-cloud-upload me-1"></i>Add</button>
                    </div>
                    <div class="col-md-4"><input type="email" name="email" class="form-control" placeholder="Email"></div>
                    <div class="col-md-4"><input type="text" name="phone" class="form-control" placeholder="Phone"></div>
                    <div class="col-md-4">
                        <div class="form-check form-switch mt-2">
                            <input class="form-check-input" type="checkbox" name="is_active" value="1" checked>
                            <label class="form-check-label">Active</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <textarea name="bio" class="form-control" rows="2" placeholder="Short bio..."></textarea>
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
                <h5><i class="bi bi-people me-2 text-primary"></i> Team Members</h5>
                <span class="badge bg-primary">{{ $team->total() }} Members</span>
            </div>
            <div class="p-4">
                <div class="row g-3">
                    @forelse($team as $member)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card border-0 rounded-4 shadow-sm overflow-hidden" style="transition: transform 0.2s;" onmouseover="this.style.transform='translateY(-4px)'" onmouseout="this.style.transform='translateY(0)'">
                            <div style="height: 200px; background: #f0f0f0; overflow: hidden; position: relative;">
                                <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}" class="w-100 h-100" style="object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x200?text=No+Photo'">
                                @if(!$member->is_active)
                                <span class="badge bg-secondary position-absolute top-0 end-0 m-2">Inactive</span>
                                @endif
                            </div>
                            <div class="card-body p-3">
                                <h6 class="fw-bold mb-1 text-truncate">{{ $member->name }}</h6>
                                <p class="text-primary small fw-bold mb-2 text-truncate">{{ $member->position }}</p>
                                <p class="text-muted small mb-2" style="font-size: 0.75rem; line-height: 1.4;">{{ Str::limit($member->bio, 60) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-light text-dark">#{{ $member->order }}</span>
                                    <div class="d-flex gap-1">
                                        <button class="btn btn-sm btn-outline-primary rounded-circle" style="width:30px;height:30px;padding:0;" data-bs-toggle="modal" data-bs-target="#editTeam{{ $member->id }}"><i class="bi bi-pencil" style="font-size:0.7rem;"></i></button>
                                        <form method="POST" action="{{ route('admin.team.delete', $member) }}" onsubmit="return confirm('Delete this team member?');">@csrf @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger rounded-circle" style="width:30px;height:30px;padding:0;"><i class="bi bi-trash" style="font-size:0.7rem;"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center text-muted py-5">
                        <i class="bi bi-people fs-1 d-block mb-3 opacity-25"></i>
                        No team members yet.
                    </div>
                    @endforelse
                </div>
                <div class="mt-4">{{ $team->links() }}</div>
            </div>
        </div>
    </div>
</div>

@foreach($team as $member)
<div class="modal fade" id="editTeam{{ $member->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded-4">
            <div class="modal-header">
                <h5 class="modal-title fw-bold text-primary">Edit Team Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST" action="{{ route('admin.team.update', $member) }}" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6"><label class="form-label fw-bold">Full Name</label><input type="text" name="name" class="form-control" value="{{ $member->name }}" required></div>
                        <div class="col-md-6"><label class="form-label fw-bold">Position</label><input type="text" name="position" class="form-control" value="{{ $member->position }}" required></div>
                        <div class="col-md-6"><label class="form-label fw-bold">Email</label><input type="email" name="email" class="form-control" value="{{ $member->email }}"></div>
                        <div class="col-md-6"><label class="form-label fw-bold">Phone</label><input type="text" name="phone" class="form-control" value="{{ $member->phone }}"></div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Change Photo</label>
                            <input type="file" name="photo" class="form-control" accept="image/*">
                        </div>
                        <div class="col-md-3"><label class="form-label fw-bold">Order</label><input type="number" name="order" class="form-control" value="{{ $member->order }}" required></div>
                        <div class="col-md-3">
                            <label class="form-label fw-bold">Status</label>
                            <div class="form-check form-switch mt-2">
                                <input class="form-check-input" type="checkbox" name="is_active" value="1" {{ $member->is_active ? 'checked' : '' }}>
                                <label class="form-check-label">Active</label>
                            </div>
                        </div>
                        <div class="col-12"><label class="form-label fw-bold">Bio</label><textarea name="bio" class="form-control" rows="2">{{ $member->bio }}</textarea></div>
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
