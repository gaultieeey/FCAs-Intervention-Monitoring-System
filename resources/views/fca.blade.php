@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-6">
			<div class="card mb-4">
			  <img class="card-img-top" src="{{ asset('img/group-placeholder.png') }}" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			  </div>
			</div>

			<div class="card mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">FAC Details</h6>
				</div>
				 <div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
			                        <th>Specify</th>
			                        <th>Commands</th>
			                    </tr>
			                </thead>
			                <tbody>
			             
			                </tbody>
			            </table>
			        </div>
			    </div>
			</div>
		</div>
	</div>
@endsection