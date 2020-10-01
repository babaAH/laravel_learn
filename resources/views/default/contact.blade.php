@extends('default.layouts.layout')


@section('navbar')
    @parent
@endsection

@section('header')
    @parent
    
@endsection

@section('content')
<div class="container">
  <p>
    {{ $request->method() }}
  </p>
  
  @if ($errors->any())
  <h2>asdasdasd</h2>
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>
            {{ $error }}
          </li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="post" action="{{ route('contact') }}">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="inputEmail4" placeholder="Email">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" name="password" class="form-control" value="{{ old('password') }}" id="inputPassword4" placeholder="Password">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" name="password_confirmation" class="form-control" value="{{ old('password') }}" id="inputPassword4" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" name="text" class="form-control" value="{{ old('text') }}" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input name="city" type="text" value="{{ old('city') }}" class="form-control" id="inputCity">
      </div>
    </div>
    <div class="form-group">
      
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
</div>
@endsection