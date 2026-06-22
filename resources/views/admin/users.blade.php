@extends('admin.layouts.admin')

@section('page-title', 'Users')

@section('content')
<div class="row mb-4 animate__animated animate__fadeInUp">
    <div class="col-12">
        <div class="admin-card p-4">
            <form method="GET" action="{{ route('admin.users') }}" class="row g-3 align-items-end">
                <div class="col-md-5">
                    <label class="form-label fw-bold small text-muted">Search Users</label>
                    <input type="text" name="search" class="form-control" placeholder="Name or email..." value="{{ request('search') }}">
                </div>
                <div class="col-md-auto">
                    <button type="submit" class="btn btn-primary px-4 fw-bold"><i class="bi bi-search me-2"></i>Search</button>
                    <a href="{{ route('admin.users') }}" class="btn btn-outline-secondary fw-bold"><i class="bi bi-x-lg"></i></a>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row animate__animated animate__fadeInUp animate__delay-1s">
    <div class="col-12">
        <div class="admin-card">
            <div class="admin-card-header">
                <h5><i class="bi bi-people me-2 text-primary"></i> Registered Users</h5>
                <span class="badge bg-primary">{{ $users->total() }} Total</span>
            </div>
            <div class="admin-card-body">
                <div class="table-responsive">
                    <table class="admin-table table mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Joined</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                            <tr>
                                <td><strong>#{{ $user->id }}</strong></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="admin-avatar" style="width:32px;height:32px;font-size:0.7rem;">{{ strtoupper(substr($user->name, 0, 2)) }}</div>
                                        {{ $user->name }}
                                    </div>
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at?->format('M d, Y') }}</td>
                                <td>
                                    <form method="POST" action="{{ route('admin.users.delete', $user) }}" onsubmit="return confirm('Delete this user?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3 fw-bold">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted py-5">
                                    <i class="bi bi-inbox fs-1 d-block mb-3 opacity-25"></i>
                                    No users found.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="p-3 border-top">
                    {{ $users->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
