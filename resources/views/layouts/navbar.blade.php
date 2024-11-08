<nav class = "">
    <div class = "d-flex justify-content-evenly dark-purple py-3 fixed-top">

        <div class="d-flex justify-content-center align-items-center">
          <a href = "{{ route('voters.index') }}" class = "moderustic text-white text-decoration-none border border-3 rounded-pill border-white px-5">
            Voters
          </a>
        </div>

        <div class="d-flex justify-content-center align-items-center">
          <a href = "{{ route('candidates.index') }}" class = "moderustic text-white text-decoration-none border border-3 rounded-pill border-white px-5">
            Candidates
          </a>
        </div>

        <div class="d-flex justify-content-center align-items-center">
          <a href = "{{ route('votes.index') }}" class = "moderustic text-white text-decoration-none border border-3 rounded-pill border-white px-5">
            Votes
          </a>
        </div>

    </div>

</nav>