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
                 <th>Stock</th>
               
            </tr>
        </thead>
    </table>

    <style>
        #edit1
        {
            color: black;

        }
    </style>

<button id="abc">Click</button>




@endsection

@section('scripts')

<script>
            
$(window).load(function() 
  {
    //var id= $("#edit1").attr("value");
    $("#edit1").click(function(){
         var id= $("#edit1").attr("id");
    alert(id); 
// });
   
    // $("#edit1").click(function()
    // {
    //      alert("abc");

    });
           
});


</script>



@endsection