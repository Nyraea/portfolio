@extends('layouts.app')

@section('title', 'Student Registration')

@section ('content')

        <div class="dark-blue">
            <br><br><br><br><br><br>
            <br><br><br><br><br><br>
            <br><br><br>
        </div>

        <div class="d-flex row dark-blue ">

            <div class="d-flex col-2 justify-content-center"></div>
            
            <div class="d-flex col justify-content-center align-items-center bright-orange rounded py-5">
                <form method="POST" action="/profile">
                    @csrf
                    <div class="row">
                        <div class="col text-center">
                            <h1 class = "text-white">Student Registration</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2"></div>

                        <div class="col">
                            <p class = "text-white bold"> Thank you for applying to our college. Please fill in the form below to complete the registration process for admission.</p>
                        </div>

                        <div class="col-2"></div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="maFirstname" class="text-white">First Name</label>
                            <input type="text" class="form-control" id ="" name="maFirstname" required>
                        </div>

                        <div class="col">
                            <label for="maLastname" class="text-white">Last Name</label>
                            <input type="text" class="form-control" id ="" name="maLastname" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="maStudentnumber"nu class="text-white">Student Number</label>
                            <input type="number" class="form-control" id ="" name="maStudentnumber" minlength = "10" maxlength = "10"required>
                        </div>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name = "maGender" id="" value="female">
                        <label class="form-check-label" for="maFemale">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name = "maGender" id="" value="male">
                        <label class="form-check-label" for="maMale">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name = "maGender" id="" value="others">
                        <label class="form-check-label" for="maOthers">Others</label>
                    </div>

                </form>
            </div>
            
            <div class="d-flex col-2 justify-content-center"></div>
        
        </div>

        
        <div class="dark-blue">
            <br><br><br><br><br><br>
        </div>

        <div class="dark-blue">
            <br><br><br><br><br><br>
            <br><br><br>
        </div>
        
    </div>

@endsection