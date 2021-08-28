@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">الخدمات</h1>

        @if (isset($services) && $services -> count() > 0)
        <div class="table-responsive">
            <table class="table text-center table-bordered ">
              <tr>
                  <td>#</td>
                  <td>name</td>
                </tr>
      
                @foreach ($services as $service)
                <tr>
                  <td class="success">{{ $service -> id}}</td>
                  <td class="warning">{{ $service -> name}}</td>
                </tr>
                @endforeach
            </table>
        </div>
        @else
            {{ "لا يوجد خدمات لهذا الطبيب ..لاضافة خدمة " }}
            <a href="#">اضغط هنا</a>
        @endif



        <br><br>
            @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
            @endif
        <br><br>


                <form method="POST" action="{{route('save.services')}}">
                    @csrf
                    {{-- <input name="_token" value="{{csrf_token()}}"> --}}


                    <div class="form-group">
                        <label for="exampleInputEmail1">أحتر طبيب</label>
                        <select class="form-control" name="doctorId" >
                            <option value="0">...</option>
                            @foreach($allDoctors as $allDoctor)
                                <option value="{{$allDoctor -> id}}">{{$allDoctor -> name}}</option>
                            @endforeach
                        </select>

                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">أختر الخدمات </label>

                        <select class="form-control" name="servicesIds[]" multiple>
                            @foreach($allServices as $allService)
                                <option value="{{$allService -> id}}">{{$allService -> name}}</option>
                            @endforeach
                        </select>

                    </div>

                    <button type="submit" class="btn btn-primary">حفظ</button>
                </form>


    </div>
@endsection