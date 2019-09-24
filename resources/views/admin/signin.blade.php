@extends('template.admin')
@section('content')
<section>
<div class="columns">
  <div class="column is-4"></div>
  <div class="column" style="margin-top: 10%;">
    <h3 class="title is-4" style="text-align: center;">Administrator Panel</h3>
    @if(session()->has('error'))
			<div class="field">
				<div class="notification is-danger">{{ session()->get('error') }}</div>
      </div>
    @endif
    <form action="{{URL::to('/admin/signin')}}" method="POST">
    {{ csrf_field() }}
    <div class="field">
      <p class="control has-icons-left has-icons-right">
        <input class="input" type="text" placeholder="Username" name="username">
        <span class="icon is-small is-left">
          <i class="fas fa-user"></i>
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
    </div>
    </form>
  </div>
  <div class="column is-5"></div>
</div>
</section>
@endsection