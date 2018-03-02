@if (session('status'))
<div class="alert alert-success">
    {{ session('status')}}
</div>
@else

<form data-toggle="validator" role="form" method="post" action="{{route("contact_save")}}">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="inputName" class="control-label">Name</label>
      <input type="text" class="form-control" name="name" id="inputName" placeholder="Name">
    </div>
<div class="form-group">
      <label for="inputEmail" class="control-label">Email</label>
      <input type="test" class="form-control" name="email" id="inputEmail" placeholder="Email" >
      <div class="help-block with-errors"></div>
    </div>
<div class="form-group">
        <label for="comment">Comment</label>
        <textarea class="form-control" rows="5" name="comment" id="comment" placeholder="Comment" ></textarea>
    </div>
<div class="form-group">
            <input type="submit" class="btn btn-primary" value="submit"/>
          </div>
        </form>
    </div>    
    </div>
    <div>
      @if(!empty($data))
      @foreach($data as $key => $value)
        {!! $key.": ". $value.'<br>' !!}
      @endforeach
      @endif
    </div>
    @endif