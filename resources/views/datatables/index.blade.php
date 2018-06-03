@extends('master')

@section('content')
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                 <th>Action</th>
            </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,

        ajax: '{!! route('datatables.data') !!}',
        columns: [
            { data:'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
           
            
        ]
    });
});
</script>
@endpush