@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Provider Locations</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive ">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Address</th>

                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Address</th>

                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($userlocations as $location)
                        <tr>
                            <td>{{$location->latitude}}</td>

                            <td>{{$location->longitude}}</td>
                            <td>{{$location->address}}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>
@endsection
