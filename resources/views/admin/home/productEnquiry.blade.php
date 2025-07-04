@extends('admin.layouts.main')
@section('page_title','ProductEnquiry')

@section('body')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header" >
                <h4 class="card-title">Product Enquiry List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="display responsive" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Transaction ID</th>
                                <th>Quantity</th>
                                <th>Amount</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
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
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
            order: [[0, 'asc']],
            ajax: {
                url: "{{ route('admin.ProductEnquiry_data') }}",
                type: "GET",
                error: function(xhr, error, thrown) {
                    console.log("AJAX Error:", xhr.responseText);
                    alert("AJAX Error! Check console for details.");
                }
            },
            columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'email' },
                { data: 'phone' },
                { data: 'subject' },
                { data: 'quantity' },
                { data: 'price' },
                { data: 'message' },
                { data: 'action', orderable: false, searchable: false }
            ]
        });
    });
</script>

@endsection