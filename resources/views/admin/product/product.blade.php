@extends('admin.layouts.main')
@section('page_title','Products')

@section('body')
<div class="px-3 container-fluid px-md-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" >
                    <h4 class="card-title">Products List</h4>
                    <p><a href="{{route('admin.product_create')}}" class="btn btn-success btn-sm">Add Products</a></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="display responsive" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Name</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Image2</th>
                                    <th>Image3</th>
                                    <th>Image4</th>
                                    <th>Image5</th>
                                    {{-- <th>Banner</th> --}}
                                    <th>Date</th>
                                    <th>Author Name</th>
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
            ajax: "{{ route('admin.product_data') }}",
            columns: [
                { data: 'id' },
                { data: 'category_id' },
                { data: 'title' },
                { data: 'price' },
                { data: 'image' },
                { data: 'image2' },
                { data: 'image3' },
                { data: 'image4' },
                { data: 'image5' },
                // { data: 'banner' },
                { data: 'date' },
                { data: 'staff_id' },
                { data: 'status' },
                { data: 'action' },
            ]
        });
    });
</script>
@endsection