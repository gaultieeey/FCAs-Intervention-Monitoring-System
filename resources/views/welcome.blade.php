@extends('layout')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>FCA Name</th>
                        <th>Members</th>
                        <th>Interventions Received</th>
                        <th>Barangay</th>
                        <th>Municipality</th>
                        <th>Province</th>
                    </tr>
                </thead>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection