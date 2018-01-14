@extends ('layouts.master')

@section ('content')
	<div class="container container-fluid">
		<h2 class="display-4 text-center py-3 my-3" id="menu">Food Menu</h2>
		<div class="row">
			@foreach ($products as $item)
				<div class="col-md-3">
					<div class="card" style="width: 17.5rem;">
						<img class="card-img-top" src="{{ asset('img/'.$item->slug.'.jpg') }}" alt="Card image cap" height="200">
						  <div class="card-body">
						    <h5 class="card-title">{{$item->name}}</h5>
						    <h6 class="card-subtitle mb-2 text-muted">BDT {{$item->price}}</h6>
						    <form action="/cart" method="post">
						    	{{ csrf_field() }}
						    	<input type="hidden" name="id" value="{{ $item->id }}">
                                <input type="hidden" name="name" value="{{ $item->name }}">
                                <input type="hidden" name="price" value="{{ $item->price }}">
						    	<button type="submit" class="btn btn-primary btn-sm">Add to Cart</button>
						    </form>
						  </div>
					</div>
				</div>
			@endforeach
		</div>
		
		<div class="py-3 my-3"></div>

	</div>
@endsection