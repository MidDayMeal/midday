<!DOCTYPE html>
<html>
<head>
	<title>Todays Order</title>
</head>
<body>
	<div class="container">
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
                      <th scope="row"></th>
                      <td>{{ $item->model->name }}</td>
                      <td>{{ $item->model->price }}</td>
                      <td>@mdo</td>
                      <td>
                      </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</body>
</html>