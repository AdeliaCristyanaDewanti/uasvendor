@extends('layouts.app')

@section('title', 'Data Project')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Data Project</h1>
        <a href="#" class="btn btn-primary">+ Add New Vendor</a>
    </div>
    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kontak</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Adel</td>
                <td>08122343434</td>
                <td>Adel@staff.com</td>
                <td>
                    <a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#detailModal1">Detail</a> |
                    <a href="#" class="text-warning">Update</a> |
                    <a href="#" class="text-danger">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
<!-- Modal for Details -->
<div class="modal fade" id="detailModal1" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Detail Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Nama:</strong> Adelia Cristyana Dewanti</p>
                <p><strong>Kontak:</strong> 081111111111</p>
                <p><strong>Email:</strong> adeladmin@gmail.com</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
