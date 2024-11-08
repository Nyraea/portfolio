@extends('layouts.app')

@section('title', 'Votes')

@section ('content')

        <div class=" row">
            
            <div class = "table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Voter ID</th>
                            <th>Candidate ID</th>
                            <th>Vote Timestamp</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($votes as $vote)
                            <tr>
                                <td>{{ $vote->mgVoteID }}</td>
                                <td>{{ $vote->mgVoterID }}</td>
                                <td>{{ $vote->mgCandidateID }}</td>
                                <td>{{ $vote->mgTimestamp }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
                
        </div>
@endsection
