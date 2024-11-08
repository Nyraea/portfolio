@extends('layouts.app')

@section('title', 'Candidates')

@section ('content')

        <div class=" row">
            
            <div class = "table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Party Affiliation</th>
                            <th>Eleciton Position</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($candidates as $candidate)
                            <tr>
                                <td>{{ $candidate->dsCandidateID }}</td>
                                <td>{{ $candidate->dsCandidateName }}</td>
                                <td>{{ $candidate->dsPartyAffiliation }}</td>
                                <td>{{ $candidate->dsElectionPosition }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
                
        </div>
@endsection
