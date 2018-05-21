@extends('client.master')
@section('content')
<div class="container">
<form  method="POST" action="{{ url('/feedback') }}" novalidate class="form-horizontal">
  <div class="col-md-9">             
    <label for="current-password" class="col-sm-4 control-label" require>Email</label>
    <div class="col-sm-8">
      <div class="form-group">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
        <input type="email" class="form-control"" name="email" placeholder="email" required="required">
        @if ($errors->has('email'))
                     <span style="color: red;">
                     <strong>{{ $errors->first('email') }}</strong>
                    </span>
                 @endif
      </div>
	    </div>
	    <label for="password" class="col-sm-4 control-label">Họ tên</label>
	    <div class="col-sm-8">
	      <div class="form-group">
	        <input type="text" class="form-control"  name="name" placeholder="name" required="required">
	        @if ($errors->has('name'))
	                     <span class="invalid-feedback" style="    color: red;">
	                     <strong>{{ $errors->first('name') }}</strong>
	                    </span>
	                 @endif
	      </div>
	    </div>
	    <label  class="col-sm-4 control-label">Feedback</label>
	    <div class="col-sm-8">
	      <div class="form-group">
	        <textarea class="form-control" name="feedback" required="required"> </textarea> 
	        @if ($errors->has('feedback'))
	                     <span class="invalid-feedback" style="    color: red;">
	                     <strong>{{ $errors->first('feedback') }}</strong>
	                    </span>
	                 @endif
	      </div>
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-5 col-sm-6">
	      <button type="submit" class="btn btn-danger">Submit</button>
	    </div>
	  </div>
</form>

	
</div>

@endsection