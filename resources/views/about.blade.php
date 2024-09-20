@extends('layouts.app')

@section('title', 'About Me')

@section ('content')
        
        <div class="d-flex row background-image">

        <br>
            <div class="d-flex justify-content-center align-items-end background-image2">
                <h3 class = "archivo text-white">
                ————————  About Me  ————————
                </h3>
            </div>

            <div class="light-purple row">


            <div class="col-9 justify-content-center align-items-center my-auto">
                <h5 class = "moderustic text-white p-5">
                    I am a dedicated IT professional with a Bachelor of Science in Information Technology from the University of Santo Tomas. My journey has equipped me with extensive experience in Project Management, Quality Assurance, and Full-Stack Development. I specialize in React, Java, and Kotlin, and I thrive on tackling complex technical challenges to deliver robust and innovative solutions. With a passion for technology and a focus on delivering quality results, I approach each project with a meticulous eye for detail and a dedication to achieving optimal outcomes. Whether leading a team, ensuring the quality of deliverables, or developing cutting-edge applications, I am committed to making a positive impact through hard work and determination.
                </h5>
            </div>
                
                <div class="col justify-content-center align-items-center">
                    <img class ="img-fluid rounded-circle p-5" src = "{{ asset('images/me.jpg') }}">
                </div>
            
            </div>

            <div class="d-flex justify-content-center align-items-end background-image3">
                <br>
            </div>
        
            <div class="dark-blue">
                <br><br><br><br><br><br>
            </div>

        </div>
@endsection
