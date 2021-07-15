@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-6">
			<div class="card mb-4">
			  <img class="card-img-top" src="{{ asset('img/group-placeholder.png') }}" alt="Card image cap">
			  <div class="card-body">
			    <h4 class="card-title font-weight-bold">{{ $fca->fca_name }}</h4>
			    <p class="card-text">{{ $fca->municipality }}, {{ $fca->province }}</p>
			  </div>
			</div>

			<div class="card mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Details</h6>
				</div>
				 <div class="card-body">
				    <h5 class="card-title">Number of Members			: 	{{ $countmembers }}</h5>
				    <h5 class="card-title">Number of Interventions Received		:	{{ $countinterventions }}</h5>
				</div>
			</div>

			<div class="card mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Members</h6>
				</div>
				 <div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card shadow mb-4">
			    <div class="card-header py-3">
			        <h6 class="m-0 font-weight-bold text-primary">Interventions Received</h6>
			    </div>
			    <div class="card-body">
			        <div class="table-responsive">
			            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			                <thead>
			                    <tr>
			                        <th>Program</th>
			                        <th>Activity</th>
			                        <th>Type</th>
			                        <th>Description</th>
			                        <th>Commands</th>
			                    </tr>
			                </thead>
			                <tbody>
			                	@foreach ($interventions as $intervention)
			                		<tr>
			                			<td>{{ $intervention->program }}</td>
			                			<td>{{ $intervention->activity }}</td>
			                			<td>{{ $intervention->type }}</td>
			                			<td>{{ $intervention->description }}</td>
			                			<td>
			                				<a href="#" class="btn btn-info btn-circle btn-sm">
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
		</div>
	</div>
@endsection