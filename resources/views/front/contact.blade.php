<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <h1>Hello {{$name}} Your Id is {{$id}}</h1> --}}

    <div>
        hello {{$name}} <br>
        your password is {{$pass}} <br> 
        And your email is {{$email}} <br>
        And your id is {{$id}}
    </div>

    <br>

    <div>
        hello {{ $obj -> name }} <br>
        you are {{ $obj -> gender }} <br>
        your Univercity is {{ $obj -> univ }} <br> 
        And your email is {{ $obj -> email }} <br>
        And your id is {{ $obj -> id }}
    </div>

    

</body>
</html>