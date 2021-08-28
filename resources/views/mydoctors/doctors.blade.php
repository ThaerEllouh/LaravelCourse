@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">الأطباء</h1>

        @if (isset($doctors) && $doctors -> count() > 0)
        <div class="table-responsive">
            <table class="table text-center table-bordered ">
              <tr>
                  <td>#</td>
                  <td>name</td>
                  <td>title</td>
                  <td>gender</td>
                  <td>operation</td>
                </tr>
      
                @foreach ($doctors as $doctor)
                <tr>
                  <td class="success">{{ $doctor -> id}}</td>
                  <td class="warning">{{ $doctor -> name}}</td>
                  <td class="warning">{{ $doctor -> title}}</td>
                  <td class="warning">
                    @if ($doctor -> gender == 0)
                        {{"ذكر"}}
                    @else
                        {{"انثى"}}
                    @endif
                  </td>
                  <td class="default">
                    <a href="{{route('doctor.services', $doctor -> id)}}"  class="btn btn-success">
                        عرض الخدمات
                    </a>
                </td>
                </tr>
                @endforeach
            </table>
        </div>
        @else
            {{ "لا يوجد اطباء فى هذه المستشفى ..لاضافة طبيب " }}
            <a href="#">اضغط هنا</a>
        @endif
    </div>
@endsection