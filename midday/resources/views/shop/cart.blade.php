@extends ('layouts.master')

@section ('content')
	<div class="container container-fluid">
		<h2 class="display-4 text-center py-3 my-3" id="menu">Food Cart</h2>
		<div class="row">
			<h3>{{ Cart::count() }} item's Selected</h3>
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Item Name</th>
                  <th>Item Price</th>
                  <th>Qty</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach(Cart::content() as $item)
                    <tr>
                      <td><img class="card-img-top" src="{{ asset('img/'.$item->model->slug.'.jpg') }}" alt="Card image cap" height="50" width="20"></td>
                      <td>{{ $item->model->name }}</td>
                      <td>{{ $item->model->price }}</td>
                      <td>@mdo</td>
                      <td>
                          <form method="post" action="cart/{{ $item->rowId }}">
                              {{ csrf_field() }}
                              {{ method_field('delete') }}

                              <button type="submit" class="btn btn-danger">Remove</button>
                          </form>
                      </td>
                    </tr>
                @endforeach

                <tr>
                    <td>Total Price</td>
                    <td>{{ Cart::total() }}</td>
                    <td>
                        <!-- <form method="get" action="/myorder">
                            {{ csrf_field() }}

                            <button type="submit" class="btn btn-success">CheckOut</button>
                        </form> -->

                        <a href="" class="btn btn-success">CheckOut</a>
                    </td>
                </tr>
              </tbody>
            </table>
		</div>
	</div>
@endsection