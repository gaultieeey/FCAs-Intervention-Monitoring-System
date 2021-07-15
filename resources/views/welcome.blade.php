@extends('layout')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Farmer Cooperatives and Associations</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>FCA Name</th>
                        <th>Members</th>
                        <th>Interventions Received</th>
                        <th>Municipality</th>
                        <th>Province</th>
                        <th>Commands</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fcas as $fca)
                        <tr>
                            <td>{{ $fca->fca_name }}</td>
                            <td>{{ $fca->members }}</td>
                            <td>{{ $fca->interventions }}</td>
                            <td>{{ $fca->municipality }}</td>
                            <td>{{ $fca->province }}</td>
                            <td>
                                <a href="/fca/{{ $fca->id }}" class="btn btn-info btn-circle btn-sm">
                                    <i class="fas fa-info-circle"></i>
                                </a>
                                <a href="#" class="btn btn-warning btn-circle btn-sm">
                                    <i class="fas fa-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection