@extends ('layouts.app')

@section('content')
{{--  Below is for error messages  --}}
<div class="col-sm-12 col-xs-12">
                @if( Session::has('errors') )
                <div class="alert alert-danger" role="alert" align="center">
                        <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                        </ul>
                </div>
                @endif
        </div>
        
        {{--  this is the end of error notification  --}}

              <!-- this is picture -->
            <div class="container">
<!-- this container is for both form and picture -->
                    <div class="row">
                            <div class="col-sm-4">
                                    <p class="text-center"><b>Laravel</b></p>
                                    <img alt="User Pic" src="http://code.org.pk/uploads/courses/49/58be75ee45126.png"> 
                                    </div>
                            <div class="col-sm-4">


<!-- form is in here -->
@include ('layouts.conform')               
@endsection
