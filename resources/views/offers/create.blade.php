<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
              </div>
          
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                  <li><a href="#">Link</a></li>
                  
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                     <li>
                         <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                         {{ $properties['native'] }}
                        </a>
                    </li>

                    @endforeach

                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>

          <ul>
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach
        </ul>

        {{-- camara package helpers --}}
        <div>
            {{-- <span> {{ LaravelLocalization::getSupportedLocales() }} </span>
            <span> {{ LaravelLocalization::getLocalesOrder() }} </span> --}}

            <span> {{ LaravelLocalization::getCurrentLocale() }} </span> | 
            <span> {{ LaravelLocalization::getCurrentLocaleName() }} </span> | 
            <span> {{ LaravelLocalization::getCurrentLocaleNative() }} </span> | 
            <span> {{ LaravelLocalization::getCurrentLocaleDirection() }}
            </span>
        </div>
        

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{ __('messages.Add Your Offer')}}
                </div>

                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                <form method="POST"  action="{{ route('offers.store')}}">

                    @csrf

                    <div class="form-group">
                      <label for="offername">{{ __('messages.offer name')}}</label>
                      <input type="text" class="form-control" name="name" id="offername" placeholder="{{ __('messages.offer name')}}">

                      @error('name')
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
                        <label for="offerdetails">{{ __('messages.offer details')}}</label>
                        <input type="text" class="form-control" name="details" id="offerdetails" placeholder="{{ __('messages.offer details')}}">

                        @error('details')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror

                      </div>

                    <button type="submit" class="btn btn-default">{{ __('messages.send')}}</button>
                  </form>
            </div>
        </div>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>
