@extends('admin.layouts.main')
@section('page_title','product Category')

@section('body')
<div class="px-3 container-fluid px-md-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" >
                    <h4 class="card-title">Product Category List</h4>
                    <p><a href="{{route('admin.product_category_create')}}" class="btn btn-success btn-sm">Add product Category</a></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="display responsive" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- use your script code here -->
@section('script')
<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            order: [
                [0, 'asc']
            ],
            ajax: "{{ route('admin.product_category_data') }}",
            columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'status' },
                { data: 'action' },
            ]
        });
    });
</script>
@endsection