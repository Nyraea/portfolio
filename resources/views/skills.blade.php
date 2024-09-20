@extends('layouts.app')

@section('title', 'Skills')

@section ('content')
        
        <div class="d-flex justify-content-center align-items-end background-image4">
        </div>

        <div class="bright-orange row">
            
            <div class="col flex-column justify-content-center align-items-center mx-2">
                <img class = "d-flex img-fluid mx-auto w-50 my-2" src = "{{ asset('images/project_management.svg') }}">
                <h3 class=" archivo text-white text-center">
                    Project Management
                </h3>
                <p class=" moderustic text-white text-center px-5">
                <b>In our React Native-based LISTO crime mapping application, I utilized my project management skills to effectively lead the team. I coordinated the design and research efforts, ensuring that the project stayed on track and met its goals. My role involved setting clear objectives, delegating tasks, and maintaining open communication with the team to address challenges and keep everyone aligned with the project’s vision.</b>
                </p>
            </div>
                
            <div class="col flex-column justify-content-center align-items-center mx-2">
                <img class = "d-flex img-fluid mx-auto w-50 my-2" src = "{{ asset('images/quality.svg') }}">
                <h3 class=" archivo text-white text-center">
                    Quality Assurance
                </h3>
                <p class=" moderustic text-white text-center px-5">
                <b>During my time as a Quality Assurance specialist for the Llana's Cheesecakes web application, I applied my QA skills to ensure that the application was reliable and user-friendly. I conducted thorough testing to identify and report bugs, and I worked closely with developers to implement fixes. My attention to detail and systematic approach helped ensure that the final product met both the client’s expectations and industry standards. My team made use of Vue and Laravel for the tech stack.</b>
                </p>
            </div>
                
            <div class="col flex-column justify-content-center align-items-center mx-2">
                <img class = "d-flex img-fluid mx-auto w-50 my-2" src = "{{ asset('images/code.svg') }}">
                <h3 class=" archivo text-white text-center">
                    Full-Stack Development
                </h3>
                <p class=" moderustic text-white text-center px-5">
                <b>In the Drip or Drop project, I leveraged my fullstack development skills to build a React application that functioned similarly to Reddit, but for fashion enthusiasts. I handled both frontend and backend development, using Firebase as the backend solution. My work included developing user interfaces, managing data flow, and integrating Firebase services to create a seamless experience for users. This project showcased my ability to develop complete, end-to-end solutions for web applications. </b>
                </p>
            </div>
                
        </div>

        <div class="d-flex justify-content-center align-items-end background-image5">
        </div>
@endsection
