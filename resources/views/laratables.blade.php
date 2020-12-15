@extends('layouts.master')

@section('title')
    CIMB Validation - Dashboard
@endsection

@section('content-top')
<div class="container">
    <div class="row mb-4"> 
        <div class="breadcrumbs col">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Customers</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
            <div class="dropdown">
                <button class="btn bg-white dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pass for GS03
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="dropdown">
                <button class="btn bg-white dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Gsave
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="dropdown">
                <button class="btn bg-white dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    17-Feb-2020
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="dropdown">
                <button class="btn bg-white dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    16-Mar-2020
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <strong class="card-title">Pass for GS03</strong>
    </div>
    <div class="card-body">
        <table id="customers-table" class="table table-sm table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Cust No.</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Date of Birth</th>
                    <th>Opened Date</th>
                    <th>Nationality</th>
                    <th>Document No.</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script>

$('#customers-table').DataTable({
    serverSide: true,
    ajax: "{{ route('admin.persons') }}",
    columns: [
        { name: 'customer_number' },
        { name: 'last_name' },
        { name: 'first_name' },
        { name: 'dob'},
        { name: 'opened_date'},
        { name: 'nationality'},
        { name: 'doc_no'},
        { name: 'action', orderable: false, searchable: false }
    ]
});

</script>
@endsection