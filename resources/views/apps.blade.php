@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $agency->name }} Features</div>

                <div class="card-body">
                 <table class="table table-responsive table-striped">
                     <tr>
                         <th>Agency ID</th>
                         <th>eGarnishments</th>
                         <th>siteConstants</th>
                         <th>siteInfo</th>
                         <th>userInfo</th>
                         <th>wscontrol</th>
                         <th>wsusers</th>
                         <th>eWarrants</th>
                         <th>Operating System</th>
                         <th>CaseLook</th>
                         <th>ePayments</th>
                         <th>Mobile Scheduler</th>
                         <th>Kiosk Software</th>
                         <th>Marriage Application</th>
                         <th>eFiling</th>
                         <th>Probation Check In</th>
                         <th>Court Check In</th>
                         <th>Updated At</th>
                     </tr>
                     @foreach($applications as $application)
                         @foreach($application->applications as $features)
                             <tr>
                                 <td>{{ $features->id }}</td>
                                 <td>{{ $features->eGarnishments }}</td>
                                 <td>{{ $features->siteConstants }}</td>
                                 <td>{{ $features->siteInfo }}</td>
                                 <td>{{ $features->userInfo }}</td>
                                 <td>{{ $features->wscontrol }}</td>
                                 <td>{{ $features->wsusers }}</td>
                                 <td>{{ $features->eWarrants }}</td>
                                 <td>{{ $features->operating_system }}</td>
                                 <td>{{ $features->caseLook }}</td>
                                 <td>{{ $features->epayments }}</td>
                                 <td>{{ $features->mobile_scheduler }}</td>
                                 <td>{{ $features->kiosk_software }}</td>
                                 <td>{{ $features->marriage_application }}</td>
                                 <td>{{ $features->efiling }}</td>
                                 <td>{{ $features->probation_check_in }}</td>
                                 <td>{{ $features->court_check_in }}</td>
                                 <td>{{ $features->updated_at }}</td>
                             </tr>

                         @endforeach
                     @endforeach
                 </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
