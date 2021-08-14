@extends('front/tanatos-template/layout/master')

@section('titel', 'tantos-aboutMe')

@section('content')
    <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita ad soluta minima blanditiis nihil, quos laborum, vero accusamus, sunt dicta minus sequi molestias facilis eius aliquid autem tempora. Quas, totam.</p>
        <br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita ad soluta minima blanditiis nihil, quos laborum, vero accusamus, sunt dicta minus sequi molestias facilis eius aliquid autem tempora. Quas, totam.</p>
        <br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita ad soluta minima blanditiis nihil, quos laborum, vero accusamus, sunt dicta minus sequi molestias facilis eius aliquid autem tempora. Quas, totam.</p>
        <br>

        <div>
            <h2>Passing Data By Array</h2>
            hello <span style="color: red;">{{$name}}</span> <br>
            your password is <span style="color: red;">{{$pass}}</span> <br> 
            And your email is <span style="color: red;">{{$email}}</span> <br>
            And your id is <span style="color: red;">{{$id}}</span> <br>
            And your age is <span style="color: red;">{{$age}}</span>
        </div>

        <br>

        <div>
            <h2>Passing Data By With</h2>
            And your age is <span style="color: red;">{{$age}}</span>
            
        </div>
    
        <br>
    
        <div>
            <h2>Passing Data By Object</h2>

            hello <span style="color: #f7600e;">{{ $obj -> name }}</span>  <br>

            you are <span style="color: #f7600e;">{{ $obj -> gender }}</span>  <br>

            your Univercity is <span style="color: #f7600e;">{{ $obj -> univ }}</span> <br> 

            And your email is <span style="color: #f7600e;">{{ $obj -> email }}</span>  <br>

            And your id is <span style="color: #f7600e;">{{ $obj -> id }}</span> 

        </div>
    
        <br>
        <div>
            <h2>if Statment</h2>
            @if ($age == 30)
            <p>yes your age is {{$age}}</p>
            @endif

            <br>

            <h2>if Statment</h2>
            @if ($age == 30 && $street === 'Salah-Aldeen')
            <p>yes your age is {{$age}}</p>
            <p>And your Street is {{$street}}</p>
            @endif

            <br>

            <h2>if else Statment</h2>
            @if ($obj -> gender === 'male')
            <p>yes your gender is {{$obj -> gender}}</p>
            @else
            <p>No your gender is Female</p>
            @endif

            <br>
            <h2>foreach </h2>
            @foreach ($infos as $inf)
                {{$inf}}  <br>
            @endforeach

            <br>

            <h2>forelse </h2>
            <p>نفس الفور ايتش ولكن هاى بنستخدمها عشان تتحقق من الاريه ازا ملانة
                بتشتغل زى الفوريتش بتلوب عليهم كلهم ..وازا فاضية ..بتطبعلك جملة تانية ..ازا كانت ايمبتى يعنى ..بتطبعلك جملة انت بتحطها فيها فى حال كانت ايمبتى 
            </p>
            @forelse ($myinfos as $myinf)
                {{$myinf}}  <br>
            @empty
                This Arry Is Empty .. Not Containes Any Info
            @endforelse

            <br>
            <hr>
            <br>

            <p>هان بشرح دالة البى اتش بى الى اسمها compact()</p>
            <p>هاى الدالة حسب ما قريت عنها ...انت بتعطيها متغيرات سواء
                سترنق او اريه او اوبجيكت ..اى حاجة ..وهى بتعرضلك اياهم ع شكل اريه 
            </p>
            <p>
                Definition and Usage
                The compact() function creates an array from variables and their values.
            </p>

            <br>
            
            <?php
                $firstname = "Peter";
                $lastname = "Griffin";
                $age = "41";

                $result = compact("firstname", "lastname", "age");

                echo "<pre>";
                print_r($result);
                echo"</pre>";
            ?>

            <br>
            <br>

            <?php
                $firstname = "Peter";
                $lastname = "Griffin";
                $age = "41";

                $name = array("firstname", "lastname");
                $result = compact($name, "age");

                echo "<pre>";
                print_r($result);
                echo"</pre>";
            ?>

            <br>
            <br>


            <?php
                $firstname = "Peter";
                $lastname = "Griffin";
                $age = "41";
                $data = array('name' => 'tato', 'age' => '29');
                $info = array('ahmed', 'yousef', 'mahmoud');

                $name = array("firstname", "lastname");
                $result = compact($name, "age", 'data', 'info');

                echo "<pre>";
                print_r($result);
                echo"</pre>";
            ?>


@php
class Myinfo
{
    
}

        $obj = new Myinfo();
        $obj-> gender = 'male';
        $obj-> name = 'teto';
        $obj-> univ = 'Al-Azher';
        $obj-> email = 't@hotmail.com';
        $obj-> id = 'teto525';

        //$datas[] = '';
        $datas = [];
        $datas['id'] = 4;
        $datas['names'] = 'teto';
        $datas['pass'] = 'thaer1475';
        $datas['email'] = 't@hotmail.com';

        $infos = ['thaer', '29years', 'GazaStip'];
        $myinfos = [];

        $name = 'eng.thaer';
        $email = 't@gmail.com';

        $result = compact('infos', 'myinfos', 'data', 'datas', 'obj', 'name', 'email');
        echo "<pre>";
        print_r($result);
        echo"</pre>";
@endphp
        </div>
            
    
        
    </div>
@endsection