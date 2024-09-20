@extends('layouts.app')

@section('title', 'Student Data')

@section ('content')
        <div class="d-flex row dark-blue">

            <div class="d-flex col-3 justify-content-center"></div>
            
            <div class="d-flex col justify-content-center align-items-center bright-orange rounded">
                <form method="POST" action="/profile">
                    @csrf
                    <div class="row">
                        <div class="col text-center">
                            <h1 class = "text-white">Student Registration</h1>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="d-flex col-3 justify-content-center"></div>
        
        </div>

        <div class = "dark-blue d-flex flex-column justify-content-center align-items-center"> 
            <h1 class = "archivo text-white">
                Hi, I'm Mark Jearald S. Agraviador
            </h1>
            <h4 class = "moderustic text-white">
                <u>A student of Bachelor of Science in Information Technology at University of Santo Tomas</u>
            </h4>
        </div>
        
        <div class="dark-blue">
            <br><br><br><br><br><br>
        </div>

        <div class="dark-blue">
            <br><br><br><br><br><br>
        </div>

        <div class="light-purple">
            <br><br>
        </div>
        
    </div>

@endsection