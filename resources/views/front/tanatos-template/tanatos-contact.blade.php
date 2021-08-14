@extends('front/tanatos-template/layout/master')

@section('titel', 'tantos-contactMe')

@section('content')
    <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita ad soluta minima blanditiis nihil, quos laborum, vero accusamus, sunt dicta minus sequi molestias facilis eius aliquid autem tempora. Quas, totam.</p>

        <div>
            <h2>Passing Data By Array</h2>
            hello <span style="color: red;">{{$name}}</span> <br>
            your password is <span style="color: red;">{{$pass}}</span> <br> 
            And your email is <span style="color: red;">{{$email}}</span> <br>
            And your id is <span style="color: red;">{{$id}}</span>
        </div>
    
        <br>
    
        <div>
            <h2>Passing Data By Object</h2>

            hello <span style="color: #f7600e;">{{ $obj -> name }}</span>  <br>

            you are <span style="color: #f7600e;">{{ $obj -> gender }}</span>  <br>

            your Univercity is <span style="color: #f7600e;">{{ $obj -> univ }}</span> <br> 

            And your email is <span style="color: #f7600e;">{{ $obj -> email }}</span>  <br>

            And your id is <span style="color: #f7600e;">{{ $obj -> id }}</span> 

            {{-- hello {{ $obj -> name }} <br>
            you are {{ $obj -> gender }} <br>
            your Univercity is {{ $obj -> univ }} <br> 
            And your email is {{ $obj -> email }} <br>
            And your id is {{ $obj -> id }} --}}

        </div>
    
    </div>
@endsection