
@extends('layouts.app')

@section('content')

  <div class="container">

    <ul class="nav navbar-nav navbar-right list-unstyled">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

         <li>
             <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
             {{ $properties['native'] }}
            </a>
        </li>

        @endforeach
    </ul>

    <br><br>
    <div class="alert alert-success" id="success_delete_msg" style="display: none;">
        تم الحذف بنجاح
    </div>
    <br><br>
  
  <div class="table-responsive">
      <table class="table text-center table-bordered ">
        <tr>
            <td>#</td>
            <td>{{ __('messages.Offer Name')}}</td>
            <td>{{ __('messages.Offer Price')}}</td>
            <td>{{ __('messages.Offer Details')}}</td>
            <td>{{ __('messages.Offer Image')}}</td>
            <td>{{ __('messages.Operation')}}</td>
          </tr>

          @foreach ($offers as $offer)
          <tr class="offerRow{{ $offer -> id}}">
            <td class="success">{{ $offer -> id}}</td>
            <td class="warning">{{ $offer -> name}}</td>
            <td class="danger">{{ $offer -> price}}</td>
            <td class="info">{{ $offer -> details}}</td>
            {{-- <td class="info">{{ $offer -> photo}}</td> --}}
            <td><img  style="width: 90px; height: 90px;" src="{{ asset('images/offers/' . $offer -> photo . '')}}"></td>
            <td class="default">
                <a href="{{url('offers/edit/'.$offer->id)}}"  class="btn btn-success">
                    {{ __('messages.Edit')}}
                </a>

                <a href="{{route('offers.delete', $offer->id)}}"  class="btn btn-danger">
                    {{ __('messages.Delete')}}
                </a>

                <a href="" offer-id="{{ $offer->id }}" id="delete_btn"  class="btn btn-danger">
                    {{ __('messages.Delete Ajax')}}
                </a>
            </td>
          </tr>
          @endforeach
      </table>
  </div>

  <a class="btn btn-primary" href="{{route('ajax.offer.creat')}}">Add Offer</a>
</div>

@endsection


@section('scripts')
<script>
    $(document).on('click', '#delete_btn', function(e) {
        e.preventDefault();

        var offer_id =  $(this).attr('offer-id');

    $.ajax({
        type: 'post',
        url: "{{ route('ajax.offer.delete')}}",
        data: {
            '_token' : "{{ csrf_token() }}",
            'id' : offer_id,
        },
        
        success:function(data){
            
            if(data.status == true){
                $('#success_delete_msg').show();
            }

            $('.offerRow'+data.id).remove();
        },
        error:function(reject){
        },
    });



    // $.ajax({
    //             type: 'post',
    //             // enctype: 'multipart/form-data',
    //             url: "{{route('ajax.offer.store')}}",
                // data: {
                //     '_token' : "{{ csrf_token() }}",
                //     'name_ar' : $("input[name='name_ar']").val(),
                //     'name_en' : $("input[name='name_en']").val(),
                //     'details_ar' : $("input[name='details_ar']").val(),
                //     'details_en' : $("input[name='details_en']").val(),
                //     'price' : $("input[name='price']").val(),
                //     // 'photo' : $("input[name='photo']").val(),
                // },
                
    //             success: function (data) {
    //             }, error: function (reject) {
                    
    //             }
    //         });

    });
    
</script>
@endsection