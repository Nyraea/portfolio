@extends('layouts.app')

@section('title', 'Guest Data')

@section ('content')

        <div class="d-flex row dark-blue ">

            <div class="d-flex col-2 justify-content-center"></div>
            
            <div class="d-flex col justify-content-center align-items-center bright-orange rounded py-5">
                <div class = "w-75">
                    @csrf
                    <div class="row">
                        <div class="col text-center dark-blue rounded">
                            <h1 class = "text-white">Reservation Details</h1>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col">
                            <h2 class = "text-white"><b>Guest Information</b></h2>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col">
                            <h4 class = "text-white"><b>Full Name:</b> {{ $guest['maFirstname'] . ' ' . $guest['maLastname'] }}</h4>
                            <h4 class = "text-white"><b>Email:</b> {{ $guest['maEmail'] }}</h4>
                            <h4 class = "text-white"><b>Contact Number:</b> {{ $guest['maContactnumber'] }}</h4>
                            <h4 class = "text-white"><b>Address:</b> {{ $guest['maAddress'] }}</h4>
                            <
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col">
                            <h2 class = "text-white"><b>Room Reservation</b></h2>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col">
                            <h4 class = "text-white"><b>Check-in Date:</b> {{ $guest['maCheckInDate'] }}</h4>
                            <h4 class = "text-white"><b>Room Type:</b> {{ $guest['maRoom'] }}</h4>
                            <h4 class = "text-white"><b>Number of Days:</b> {{ $guest['maDays'] }}</h4>
                            <h4 class = "text-white"><b>Number of Guests:</b> {{ $guest['maPax'] }}</h4>
                            @if($guest['maSpecialRequest'] != null) 
                            {
                                <h4 class = "text-white"><b>Special Request:</b> {{ $guest['maSpecialRequest'] }}</h4>
                            }
                            @else 
                                <h4 class = "text-white"><b>Special Request:</b> None</h4>
                            @endif
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col">
                            <h2 class = "text-white"><b>Payment Details</b></h2>
                        </div>
                    </div>

                    
                    <div class="row my-3">
                        <div class="col">
                            <h4 class = "text-white"><b>Room Price:</b> {{ $guest['maRoomPrice'] }}</h4>
                            <h4 class = "text-white"><b>Total Price:</b> {{ $guest['maTotalPrice'] }}</h4>
                        </div>
                    </div>

                    <div class = "d-flex row justify-content-center dark-blue">
                        <div class = "d-flex col justify-content-center text-white"> <b>@MA2024</b> </div>
                    </div> 

                </div>
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