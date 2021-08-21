@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="alert alert-success" id="success_msg" style="display: none;">
        تم الحفظ بنجاح
        </div>

        <form id="offerForm" method="POST"  action="" enctype="multipart/form-data">

            @csrf

            <div class="form-group">

              <label for="offername">{{ __('messages.offer name in ar')}}</label>
              <input type="text" class="form-control" name="name_ar" id="offername" placeholder="{{ __('messages.offer name in ar')}}">

              @error('name_ar')
                <small class="form-text text-danger">{{$message}}</small>
              @enderror

            </div>

            <div class="form-group">
                
                <label for="offername">{{ __('messages.offer name in en')}}</label>
                <input type="text" class="form-control" name="name_en" id="offername" placeholder="{{ __('messages.offer name in en')}}">

                @error('name_en')
                  <small class="form-text text-danger">{{$message}}</small>
                @enderror

              </div>

            <div class="form-group">
              <label for="offerprice">{{ __('messages.offer price')}}</label>
              <input type="text" class="form-control" name="price" id="offerprice" placeholder="{{ __('messages.offer price')}}">

              @error('price')
                <small class="form-text text-danger">{{$message}}</small>
              @enderror

            </div>

            <div class="form-group">

                <label for="offerdetails">{{ __('messages.offer details in ar')}}</label>	
                <input type="text" class="form-control" name="details_ar" id="offerdetails" placeholder="{{ __('messages.offer details in ar')}}">

                @error('details_ar')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror

              </div>

              <div class="form-group">
                
                <label for="offerdetails">{{ __('messages.offer details in en')}}</label>	
                <input type="text" class="form-control" name="details_en" id="offerdetails" placeholder="{{ __('messages.offer details in en')}}">

                @error('details_en')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror

              </div>

              <div class="form-group">
                        
                <label for="offerphoto">{{ __('messages.offer photo')}}</label>	
                <input type="file" class="form-control" name="photo" id="offerphoto" >

                @error('photo')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror

              </div>



            <button id="save_offer" class="btn btn-primary">{{ __('messages.send')}}</button>
          </form>
    </div>
@endsection

@section('scripts')
<script>
    $(document).on('click', '#save_offer', function(e) {
        e.preventDefault();

        var formData = new FormData($('#offerForm')[0]);

    $.ajax({
        type: 'post',
        enctype: 'multipart/form-data',
        url: "{{ route('ajax.offer.store')}}",
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        success:function(data){
            if(data.status == true)
                $('#success_msg').show();
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