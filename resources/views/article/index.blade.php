@extends ('layouts.app')

@section('content')

@include ('layouts.carousel')

<div class="row">
        <div class="col-sm-4">
            <h3>Laravel</h3>
            <p>Laravel is what you want when doing some web work</p>
            <p>its easy to use and also secure</p>
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            @include ('shared.contact')
            {{--  the contact information has been move to shared folder under the name contact  --}}
        </div>
    </div>

{{--  this is the home section of the web, or the first page that you will see  --}}
{{--  remember to never forget in adding @endsection after all the code  --}}
@endsection