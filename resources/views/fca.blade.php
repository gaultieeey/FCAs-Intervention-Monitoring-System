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
		</div>
		<div class="col-md-6">
			<div class="card mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Details</h6>
				</div>
				 <div class="card-body">
				 	<p class="card-text">Contact Person	:	{{ $fca->contact_person }}</p>
				 	<p class="card-text">Contact Number	:	{{ $fca->contact_number }}</p>
				    <p class="card-text">Number of Members	:	{{ $countmembers }}</p>
				    <p class="card-text">Number of Members Encoded to FFRS	:	{{ $countmemberswithsysgen }}</p>
				    <p class="card-tex">Number of Interventions Received	:	{{ $countinterventions }}</p>
				</div>
			</div>

			<div class="card mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Members</h6>
				</div>
				 <div class="card-body">
				    <div class="list-group">
				    	@foreach ($members as $member)
				    		<li class="list-group-item d-flex justify-content-between align-items-start">
							    <div class="ms-2 me-auto">
							      <div class="fw-bold">{{ $member->firstname }} {{ $member->lastname }} {{ $member->extensionname }}</div>
							      {{ $member->position }}
							    </div>
							    @if(!empty($member->system_gen_control_num))
							    <buton id="encoded" type="button" class="badge btn btn-success btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Encoded in FFRS">
		                            <i class="fas fa-check"></i>
		                        </button>
		                        @endif
							</li>
				    	@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
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
			                        <th>Unit</th>
			                        <th>Cost</th>
			                        <th>Year</th>
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
			                			<td>{{ $intervention->unit }}</td>
			                			<td>{{ $intervention->actualcost }}</td>
			                			<td>{{ $intervention->year_received }}</td>
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