@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('create') }}" class="btn btn-primary btn-xs">Add</a>
                </div>

                <div class="card-body">
                 <table class="table table-responsive table-striped">
                     <tr>
                         <th>ID</th>
                         <th>Name</th>
                         <th>Agency # State</th>
                         <th>Agency # Henschen</th>
                         <th>Agency Type</th>
                         <th>Address</th>
                         <th>City</th>
                         <th>State</th>
                         <th>Zip Code</th>
                         <th>County</th>
                         <th>Phone Number</th>
                         <th>Fax Number</th>
                         <th>Comments</th>
                         <th>Created At</th>
                         <th>Updated At</th>
                     </tr>
                     @foreach($agencies as $agency)
                         <tr>
                             <td>{{ $agency->id }}</td>
                             <td><a href="/home/{{ $agency->id }}">{{ $agency->name }}</a></td>
                             <td>{{ $agency->agency_number_s }}</td>
                             <td>{{ $agency->agency_number_h }}</td>
                             <td>{{ $agency->agency_type }}</td>
                             <td>{{ $agency->address }}</td>
                             <td>{{ $agency->city }}</td>
                             <td>{{ $agency->state }}</td>
                             <td>{{ $agency->zip_code }}</td>
                             <td>{{ $agency->county }}</td>
                             <td>{{ $agency->phone_number }}</td>
                             <td>{{ $agency->fax_number }}</td>
                             <td>{{ $agency->comments }}</td>
                             <td>{{ $agency->created_at }}</td>
                             <td>{{ $agency->updated_at }}</td>
                         </tr>
                     @endforeach
                 </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
