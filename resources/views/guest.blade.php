@extends('layouts.app')

@section('title', 'Hotel Reservation Form')

@section('content')

<div class="dark-blue">
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <br><br><br>
</div>

<div class="d-flex row dark-blue ">

    <div class="d-flex col-2 justify-content-center"></div>
    
    <div class="d-flex col justify-content-center align-items-center bright-orange rounded py-5">
        <form method="POST" action="{{ route('registration.submit') }}" class="w-75">
            @csrf
            <div class="row">
                <div class="col text-center dark-blue rounded">
                    <h1 class="text-white">Hotel Reservation Form</h1>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col">
                    <h2 class="text-white"><b>Guest Information</b></h2>
                </div>
            </div>

            <div class="row my-3">
                <div class="col">
                    <label for="maFirstname" class="text-white bold">First Name</label>
                    <input type="text" class="form-control @error('maFirstname') is-invalid @enderror" id="maFirstname" name="maFirstname" placeholder="First name">
                    @error('maFirstname')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col">
                    <label for="maLastname" class="text-white bold">Last Name</label>
                    <input type="text" class="form-control @error('maLastname') is-invalid @enderror" id="maLastname" name="maLastname" placeholder="Last name">
                    @error('maLastname')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row my-3">
                <div class="col">
                    <label for="maEmail" class="text-white bold">Email Address</label>
                    <input type="email" class="form-control @error('maEmail') is-invalid @enderror" id="maEmail" name="maEmail" placeholder="Email">
                    @error('maEmail')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row my-3">
                <div class="col">
                    <label for="maContactnumber" class="text-white bold">Contact Number</label>
                    <input type="number" class="form-control @error('maContactnumber') is-invalid @enderror" id="maContactnumber" name="maContactnumber" minlength="11" maxlength="11" placeholder="ex. 09123456789">
                    @error('maContactnumber')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row my-3">
                <div class="col">
                    <label for="maAddress" class="text-white bold">Address</label>
                    <input type="text" class="form-control @error('maAddress') is-invalid @enderror" id="maAddress" name="maAddress" placeholder="Street, City, Province, Country">
                    @error('maAddress')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mt-5">
                <div class="col">
                    <h2 class="text-white"><b>Room Reservation</b></h2>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="maCheckInDate" class="form-label text-white">Check In Date</label>
                    <input type="date" class="form-control @error('maCheckInDate') is-invalid @enderror" id="maCheckInDate" name="maCheckInDate">
                    @error('maCheckInDate')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="text-white bold" for="maRoom">Room Preferences</label>
                <br>
                <div class="form-check form-check-inline my-3">
                    <input class="form-check-input @error('maRoom') is-invalid @enderror" type="radio" name="maRoom" id="maStandard" value="standard" data-price="1500">
                    <label class="form-check-label text-white" for="maStandard">Standard (P1500.00)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('maRoom') is-invalid @enderror" type="radio" name="maRoom" id="maDeluxe" value="deluxe" data-price="3000">
                    <label class="form-check-label text-white" for="maDeluxe">Deluxe (P3000.00)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('maRoom') is-invalid @enderror" type="radio" name="maRoom" id="maSuite" value="suite" data-price="4500">
                    <label class="form-check-label text-white" for="maSuite">Suite (P4500.00)</label>
                </div>
                @error('maRoom')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <div class="col">
                    <label for="maDays" class="form-label text-white">No. of days</label>
                    <input type="number" class="form-control @error('maDays') is-invalid @enderror" id="maDays" name="maDays">
                    @error('maDays')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="maPax" class="form-label text-white">No. of Guests</label>
                    <input type="number" class="form-control @error('maPax') is-invalid @enderror" id="maPax" name="maPax">
                    @error('maPax')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row my-3">
                <div class="col">
                    <label for="maSpecialRequest" class="text-white bold">Special Requests</label>
                    <textarea class="form-control" name="maSpecialRequest"></textarea>
                </div>
            </div>

            <div class="d-flex row my-3">
                <div class="d-flex col"></div>
                <div class="d-flex flex-column col justify-content-center">
                    <button type="submit" class="dark-blue text-white px-4 py-2 rounded-pill border-0"><b>Submit</b></button>
                </div>
                <div class="d-flex col"></div>
            </div>

            <div class="d-flex row justify-content-center dark-blue">
                <div class="d-flex col justify-content-center text-white"> <b>@MJ2024</b> </div>
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

@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const roomInputs = document.querySelectorAll('input[name="maRoom"]');
        const daysInput = document.getElementById('maDays');
        const totalPriceElement = document.getElementById('totalPrice');

        function calculateTotalPrice() {
            const selectedRoom = document.querySelector('input[name="maRoom"]:checked');
            const days = parseInt(daysInput.value) || 0;
            const roomPrice = selectedRoom ? parseInt(selectedRoom.getAttribute('data-price')) : 0;
            const totalPrice = roomPrice * days;
            totalPriceElement.textContent = `Total Price: P${totalPrice}`;
        }

        roomInputs.forEach(input => {
            input.addEventListener('change', calculateTotalPrice);
        });

        daysInput.addEventListener('input', calculateTotalPrice);
    });
</script>