@extends('layouts.app')

@section('content')
    <div class="container">

    @if (isset($hospitals) && $hospitals -> count() > 0)
        <h1 class="text-center">المستشفيات</h1>
        <div class="table-responsive">
            <table class="table text-center table-bordered ">
              <tr>
                  <td>#</td>
                  <td>name</td>
                  <td>address</td>
                  <td>options</td>
                </tr>

                    @foreach ($hospitals as $hospital)
                    <tr>
                    <td class="success">{{ $hospital -> id}}</td>
                    <td class="warning">{{ $hospital -> name}}</td>
                    <td class="warning">{{ $hospital -> address}}</td>
                    <td class="default">
                        <a href="{{url('all-doctors/'.$hospital -> id)}}"  class="btn btn-success">
                            عرض الأطباء
                        </a>
                        
                        <a href="{{url('all-hospitals/'.$hospital -> id)}}"  class="btn btn-danger">
                            حذف المستشفى
                        </a>
                    </td>
                    </tr>
                    @endforeach
      
                
            </table>
        </div>
    @endif

    @if (isset($hospitals1) && $hospitals1 -> count() > 0)
        <h1 class="text-center">المستشفيات التى تحتوى اطباء</h1>
        <div class="table-responsive">
            <table class="table text-center table-bordered ">
              <tr>
                  <td>#</td>
                  <td>name</td>
                  <td>address</td>
                  <td>options</td>
                </tr>

                    @foreach ($hospitals1 as $hospital)
                    <tr>
                    <td class="success">{{ $hospital -> id}}</td>
                    <td class="warning">{{ $hospital -> name}}</td>
                    <td class="warning">{{ $hospital -> address}}</td>
                    <td class="default">
                        <a href="{{url('all-doctors/'.$hospital -> id)}}"  class="btn btn-success">
                            عرض الأطباء
                        </a>
                    </td>
                    </tr>
                    @endforeach
      
                
            </table>
        </div>
    @endif

    @if (isset($hospitals2) && $hospitals2 -> count() > 0)
        <h1 class="text-center">المستشفيات التى لا تحتوى اطباء</h1>
        <div class="table-responsive">
            <table class="table text-center table-bordered ">
              <tr>
                  <td>#</td>
                  <td>name</td>
                  <td>address</td>
                  <td>options</td>
                </tr>

                    @foreach ($hospitals2 as $hospital)
                    <tr>
                    <td class="success">{{ $hospital -> id}}</td>
                    <td class="warning">{{ $hospital -> name}}</td>
                    <td class="warning">{{ $hospital -> address}}</td>
                    <td class="default">
                        <a href="{{url('all-doctors/'.$hospital -> id)}}"  class="btn btn-success">
                            عرض الأطباء
                        </a>
                    </td>
                    </tr>
                    @endforeach
      
                
            </table>
        </div>
    @endif

    @if (isset($hospitals3) && $hospitals3 -> count() > 0)
        <h1 class="text-center">المستشفيات التى تحتوى اطباء ذكور </h1>
        <div class="table-responsive">
            <table class="table text-center table-bordered ">
              <tr>
                  <td>#</td>
                  <td>name</td>
                  <td>address</td>
                  <td>options</td>
                </tr>

                    @foreach ($hospitals3 as $hospital)
                    <tr>
                    <td class="success">{{ $hospital -> id}}</td>
                    <td class="warning">{{ $hospital -> name}}</td>
                    <td class="warning">{{ $hospital -> address}}</td>
                    <td class="default">
                        <a href="{{url('all-doctors/'.$hospital -> id)}}"  class="btn btn-success">
                            عرض الأطباء
                        </a>
                    </td>
                    </tr>
                    @endforeach
      
                
            </table>
        </div>
    @endif

    @if (isset($hospitals4) && $hospitals4 -> count() > 0)
        <h1 class="text-center">المستشفيات التى تحتوى اطباء اناث </h1>
        <div class="table-responsive">
            <table class="table text-center table-bordered ">
              <tr>
                  <td>#</td>
                  <td>name</td>
                  <td>address</td>
                  <td>options</td>
                </tr>

                    @foreach ($hospitals4 as $hospital)
                    <tr>
                    <td class="success">{{ $hospital -> id}}</td>
                    <td class="warning">{{ $hospital -> name}}</td>
                    <td class="warning">{{ $hospital -> address}}</td>
                    <td class="default">
                        <a href="{{url('all-doctors/'.$hospital -> id)}}"  class="btn btn-success">
                            عرض الأطباء
                        </a>
                    </td>
                    </tr>
                    @endforeach
      
                
            </table>
        </div>
    @endif

    <div class="text-center">
        <a href="{{url('hospital-exist-doctor')}}"  class="btn btn-success">
            عرض مستشفيات تحتوى اطباء
        </a>

        <a href="{{url('hospital-not-exist-doctor')}}"  class="btn btn-success">
            عرض مستشفيات لا تحتوى اطباء
        </a>

        <a href="{{url('hospital-exist-doctor-male')}}"  class="btn btn-success">
            عرض مستشفيات تحتوى اطباء ذكور
        </a>

        <a href="{{url('hospital-exist-doctor-Femal')}}"  class="btn btn-success">
            عرض مستشفيات تحتوى اطباء اناث
        </a>
    </div>
    
    <br>

    <div class="text-center">
        <a href="{{url('all-hospital')}}"  class="btn btn-success">
            عرض جميع مستشفيات ..الرجوع لاول صفحة
        </a>
    </div>
    

    </div>
@endsection