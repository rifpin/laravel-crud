@extends('templates.main')
@section('title','Customers')
@section('content')
	<div class="container">
		<div class="row" style="margin-top: 20px;">
			<div class="col-md-12">
	
				<div class="card">
					<div class="card-header">
						<h4>List of Customer</h4> 
					</div> 
					<div class="card-body">
						<a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#create"
							style="margin-bottom: 20px;">Add Customer</a> 
						<table class="table table-hover table-striped" id="example">
							<thead>
								<tr>	
									<th>#</th> 
									<th>Name</th> 
									<th>Address</th> 
									<th>Phone Number</th> 
									<th>Action</th> 
								</tr> 
							</thead>
							<tbody>
								@foreach($customers as $customer)
									<tr>
										<td>{{$loop->iteration}}</td> 
										<td>{{$customer->name}}</td> 
										<td>{{$customer->address}}</td> 
										<td>{{$customer->phone}}</td> 
										<td>	
											<a href="" class="btn btn-info btn-sm"
												 data-toggle="modal" 
												 data-target="#detail"
												 data-name="{{$customer->name}}"
												 data-address="{{$customer->address}}"
												 data-phone="{{$customer->phone}}" title="Customer Detail">
												 <i class="fa fa-search"></i> 
											</a> 

											<a href="" class="btn btn-warning btn-sm"
												 data-toggle="modal" 
												 data-target="#edit"
												 data-id="{{$customer->id}}"
												 data-name="{{$customer->name}}"
												 data-address="{{$customer->address}}"
												 data-phone="{{$customer->phone}}" title="Edit Customer">
												 <i class="fa fa-pencil"></i> 
											</a> 

											<a href="" class="btn btn-danger btn-sm"
												data-toggle="modal"
												data-target="#destroy"
												data-id="{{$customer->id}}" title="Delete customer">
												<i class="fa fa-trash"></i> 
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
	
	@include('customer.create')
	@include('customer.show')
	@include('customer.edit')
	@include('customer.destroy')

@endsection
@section('script')
	<script>
     $(document).ready(function(){   
        $('#detail').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget)
            var name = button.data('name')
            var address = button.data('address')
            var phone = button.data('phone')

            var modal = $(this)

            modal.find('.modal-body #name').html(name)
            modal.find('.modal-body #address').html(address)
            modal.find('.modal-body #phone').html(phone)
        })
            })
   
     $(document).ready(function(){   
        $('#edit').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')
            var address = button.data('address')
            var phone = button.data('phone')

            var modal = $(this)

            modal.find('.modal-body #id').val(id)
            modal.find('.modal-body #name').val(name)
            modal.find('.modal-body #address').val(address)
            modal.find('.modal-body #phone').val(phone)
        })
            })

      $(document).ready(function(){   
        $('#destroy').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget)
            var id = button.data('id')
            
            var modal = $(this)

            modal.find('.modal-footer #id').val(id)
            
        })
            })
    </script>
@endsection