@extends ('layouts.master')

@section ('content')
<div class="container container-fluid">
		<div class="py-3 my-3"></div>
		<h2>CheckOut Form</h2>
		<hr>
		@include ('layouts.errors')

		<div class="row">
			<div class="col-sm-4">
				<form action="http://developer.qpay.co/module/index.php" method="post">
					{{ csrf_field() }}
					
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" value="" name="cust_email">
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Total Amount</label>
						<input type="text" class="form-control" name="amount" value="{{ Cart::total() }}">
					</div>

					<input type="hidden" value="Rashed" name="cust_name"/>
		            <!-- <input type="hidden" value="robiul1020113@gmail.com" name="cust_email"/><br> -->
		            <input type="hidden" value="1946198678" name="cust_phone"/>
		            <input type="hidden" value="BDT" name="currency">
		            <input type="hidden" value="66428570" name="store_id"/>
		            <!-- <input type="hidden" value="20" name="amount"/> -->
		            <input type="hidden" value="pen" name="product_detais"/>
		            <input type="hidden" value="middaymeal" name="store_name"/>
		            <input type="hidden" value="101" name="tran_id"/>

					<button type="submit" class="btn btn-primary">Payment</button>
				</form>
			</div>

			<div class="col-sm-2"></div>
			<div class="col-sm-6">
				<form action="/checkout" method="post">
					{{ csrf_field() }}
					
					<div class="form-group">
						<label for="exampleInputEmail1">User Name</label>
						<input type="text" class="form-control" value="" name="name">
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Mobile</label>
						<input type="text" class="form-control" value="" name="name">
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Order Location</label>
						<input type="text" class="form-control" name="address" value="">
					</div>

		            <input type="hidden" value="101" name="tran_id"/>

					<button type="submit" class="btn btn-primary">Shipment</button>
				</form>
			</div>

		</div>
		<div class="py-3 my-3"></div>
	</div>
@endsection