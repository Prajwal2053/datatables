@extends('master')

@section('content')
     <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Code</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Default Price</th>
                <th>Stock</th>
                <th>Edit</th>
             </tr>
        </thead>
     </table>
    @if($products)
     @foreach($products as $product)

  <div id="editproduct{{$product->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog follow_up">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Update Product</h4>
      </div>
      <div class="modal-body">
        <form  role="form" method="POST" action="{{URL::to('/')}}/product/update" enctype="multipart/form-data">
        <input type="hidden" name="_token" class="token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{$product->id}}" />
        <div class="form-group">
          <label for="product_code">Product Code  {{$product->code}}</label>
        </div>
        <div class="form-group">
          <label for="name">product Name </label>
          <input type="text" name="name" value="{{$product->name}}" class="form-control" />
        </div>
        <div class="form-group">
          <label for="brand">Brand </label>
          <input type="text" name="brand" value="{{$product->brand}}" class="form-control" />
        </div>
        <div class="form-group">
          <label for="default_price"> Default Price </label>
          <input type="text" name="default_price" value="{{$product->default_price}}" class="form-control" />
        </div>
        <div class="form-group">
          <label for="stock">Stock  </label>
          <input type="text" name="stock" value="{{$product->stock}}" class="form-control" />
        </div>
        <div class="form-group text-center">
          <button type="submit" name="submit" class="btn btn-primary" > Update </button>
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
@endforeach
@endif
@endsection

@section('scripts')
<script>

    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,

            ajax: '{!! route('datatables.data') !!}',
            columns: [
                { data:'id', name: 'id' },
                { data:'code', name:'code' },
                { data: 'name', name: 'name' },
                { data: 'brand', name: 'brand' },
                { data: 'default_price', name: 'default_price' },
                { data: 'stock', name: 'stock' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
                ]
        });
        });
    
</script>

<script>
        $('#users-table').on('click','.btn-edit[data-id]',function()
    {
        var id=$(this).attr("data-id");
        //alert(id);
        $("#"+id).modal("show");

    });


    
           



</script>



@endsection