@extends('layouts.app')

@section('title', 'Voters')

@section ('content')
        
        <div class="d-flex justify-content-center align-items-end background-image4">
        </div>

        <div class="bright-orange row">
            
            <div class = "table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>Contact Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($voters as $voter)
                            <tr>
                                <td>{{ $voter->maVoterID }}</td>
                                <td>{{ $voter->maVoterName }}</td>
                                <td>{{ $voter->maDateOfBirth }}</td>
                                <td>{{ $voter->maGender }}</td>
                                <td>{{ $voter->maContactNumber }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
                
        </div>

        <div class="d-flex justify-content-center align-items-end background-image5">
        </div>
@endsection
