@extends('template.master')
@section('content')
<section>
<div class="columns">
  <div class="column is-4"></div>
  <div class="column" style="margin-top: 10%;">
    <h3 class="title is-4">Signin</h3>
    @if(session()->has('error'))
			<div class="field">
				<div class="notification is-danger">{{ session()->get('error') }}</div>
			</div>
    @elseif(session()->has('regis'))
      <div class="field">
				<div class="notification is-success">{{ session()->get('regis') }}</div>
			</div>
    @endif
    <form action="{{URL::to('/signin')}}" method="POST">
    {{ csrf_field() }}
    <div class="field">
      <p class="control has-icons-left has-icons-right">
        <input class="input" type="email" placeholder="Email" name="email">
        <span class="icon is-small is-left">
          <i class="fas fa-at"></i>
        </span>
      </p>
    </div>
    <div class="field">
      <p class="control has-icons-left">
        <input class="input" type="password" placeholder="Password" name="password">
        <span class="icon is-small is-left">
          <i class="fas fa-lock"></i>
        </span>
      </p>
    </div>
    <div class="field">
      <p class="control">
        <button class="button is-success">
          Signin
        </button>
      </p>
    <p>Doesn't have an account ? Signup <a href="{{URL::to('/signup')}}">here</a>.</p>
    </div>
    </form>
  </div>
  <div class="column is-5"></div>
</div>
</section>
@endsection
