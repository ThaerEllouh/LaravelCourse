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

              <small id="name_ar_error" class="form-text text-danger"></small>

            </div>

            <div class="form-group">
                
                <label for="offername">{{ __('messages.offer name in en')}}</label>
                <input type="text" class="form-control" name="name_en" id="offername" placeholder="{{ __('messages.offer name in en')}}">

                  <small id="name_en_error" class="form-text text-danger"></small>

              </div>

            <div class="form-group">
              <label for="offerprice">{{ __('messages.offer price')}}</label>
              <input type="text" class="form-control" name="price" id="offerprice" placeholder="{{ __('messages.offer price')}}">

                <small id="price_error" class="form-text text-danger"></small>

            </div>

            <div class="form-group">

                <label for="offerdetails">{{ __('messages.offer details in ar')}}</label>	
                <input type="text" class="form-control" name="details_ar" id="offerdetails" placeholder="{{ __('messages.offer details in ar')}}">

                <small id="details_ar_error" class="form-text text-danger"></small>

              </div>

              <div class="form-group">
                
                <label for="offerdetails">{{ __('messages.offer details in en')}}</label>	
                <input type="text" class="form-control" name="details_en" id="offerdetails" placeholder="{{ __('messages.offer details in en')}}">

                <small id="details_en_error" class="form-text text-danger"></small>

              </div>

              <div class="form-group">
                        
                <label for="offerphoto">{{ __('messages.offer photo')}}</label>	
                <input type="file" class="form-control" name="photo" id="offerphoto" >

                <small id="photo_error" class="form-text text-danger"></small>

              </div>



            <button id="save_offer" class="btn btn-primary">{{ __('messages.send')}}</button>
          </form>
    </div>
@endsection

@section('scripts')
<script>
    $(document).on('click', '#save_offer', function(e) {
        e.preventDefault();

        $("#name_ar_error").text("");
        $("#name_en_error").text("");
        $("#price_error").text("");
        $("#details_ar_error").text("");
        $("#details_en_error").text("");
        $("#photo_error").text("");

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

            var response = $.parseJSON(reject.responseText);
            $.each(response.errors, function(key, val){
                $("#" + key + "_error").text(val[0]);
            });

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