@extends('admin.layouts.admin')

@section('page-title', 'Fees')

@section('content')
<div class="row mb-4 animate__animated animate__fadeInUp">
    <div class="col-12">
        <div class="admin-card p-4">
            <h5 class="fw-bold text-primary mb-3"><i class="bi bi-plus-circle me-2"></i>Add Fee Structure</h5>
            <form method="POST" action="{{ route('admin.fees.store') }}">
                @csrf
                <div class="row g-3">
                    <div class="col-md-3"><input type="text" name="level_en" class="form-control" placeholder="Level (EN)" required></div>
                    <div class="col-md-3"><input type="text" name="level_sw" class="form-control" placeholder="Level (SW)" required></div>
                    <div class="col-md-2"><input type="text" name="tuition_fees" class="form-control" placeholder="Tuition" required></div>
                    <div class="col-md-2"><input type="text" name="food" class="form-control" placeholder="Food" required></div>
                    <div class="col-md-2"><input type="text" name="stationery" class="form-control" placeholder="Stationery" required></div>
                    <div class="col-md-2"><input type="text" name="other_expenses" class="form-control" placeholder="Other" required></div>
                    <div class="col-md-2"><input type="text" name="total" class="form-control" placeholder="Total" required></div>
                    <div class="col-md-2"><input type="text" name="term_1" class="form-control" placeholder="Term 1"></div>
                    <div class="col-md-2"><input type="text" name="term_2" class="form-control" placeholder="Term 2"></div>
                    <div class="col-md-2"><button type="submit" class="btn btn-primary w-100 fw-bold"><i class="bi bi-plus-lg me-1"></i>Add</button></div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row animate__animated animate__fadeInUp animate__delay-1s">
    <div class="col-12">
        <div class="admin-card">
            <div class="admin-card-header">
                <h5><i class="bi bi-cash-stack me-2 text-primary"></i> Fee Structures</h5>
            </div>
            <div class="admin-card-body">
                <div class="table-responsive">
                    <table class="admin-table table mb-0">
                        <thead>
                            <tr>
                                <th>Level</th>
                                <th>Tuition</th>
                                <th>Food</th>
                                <th>Stationery</th>
                                <th>Other</th>
                                <th>Total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($fees as $fee)
                            <tr>
                                <td><strong>{{ $fee->level_en }}</strong><br><small class="text-muted">{{ $fee->level_sw }}</small></td>
                                <td>{{ $fee->tuition_fees }}</td>
                                <td>{{ $fee->food }}</td>
                                <td>{{ $fee->stationery }}</td>
                                <td>{{ $fee->other_expenses }}</td>
                                <td><strong class="text-primary">{{ $fee->total }}</strong></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-sm btn-outline-primary rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#editFee{{ $fee->id }}"><i class="bi bi-pencil"></i></button>
                                        <form method="POST" action="{{ route('admin.fees.delete', $fee) }}" onsubmit="return confirm('Delete?');">@csrf @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr><td colspan="7" class="text-center text-muted py-5"><i class="bi bi-inbox fs-1 d-block mb-3 opacity-25"></i>No fees yet.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach($fees as $fee)
<div class="modal fade" id="editFee{{ $fee->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded-4">
            <div class="modal-header">
                <h5 class="modal-title fw-bold text-primary">Edit Fee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST" action="{{ route('admin.fees.update', $fee) }}">
                @csrf @method('PUT')
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6"><label class="form-label fw-bold">Level (EN)</label><input type="text" name="level_en" class="form-control" value="{{ $fee->level_en }}" required></div>
                        <div class="col-md-6"><label class="form-label fw-bold">Level (SW)</label><input type="text" name="level_sw" class="form-control" value="{{ $fee->level_sw }}" required></div>
                        <div class="col-md-4"><label class="form-label fw-bold">Tuition</label><input type="text" name="tuition_fees" class="form-control" value="{{ $fee->tuition_fees }}" required></div>
                        <div class="col-md-4"><label class="form-label fw-bold">Food</label><input type="text" name="food" class="form-control" value="{{ $fee->food }}" required></div>
                        <div class="col-md-4"><label class="form-label fw-bold">Stationery</label><input type="text" name="stationery" class="form-control" value="{{ $fee->stationery }}" required></div>
                        <div class="col-md-4"><label class="form-label fw-bold">Other</label><input type="text" name="other_expenses" class="form-control" value="{{ $fee->other_expenses }}" required></div>
                        <div class="col-md-4"><label class="form-label fw-bold">Total</label><input type="text" name="total" class="form-control" value="{{ $fee->total }}" required></div>
                        <div class="col-md-4"><label class="form-label fw-bold">Term 1</label><input type="text" name="term_1" class="form-control" value="{{ $fee->term_1 }}"></div>
                        <div class="col-md-4"><label class="form-label fw-bold">Term 2</label><input type="text" name="term_2" class="form-control" value="{{ $fee->term_2 }}"></div>
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
