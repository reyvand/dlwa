@extends('template.master')
@section('content')
<section>
<div class="columns">
  <div class="column is-4"></div>
  <div class="column" style="margin-top: 10%;">
    <h4 class="title is-4">Signup</h4>
    <form action="{{URL::to('/signup')}}" method="POST">
    {{ csrf_field() }}
    <div class="field">
      <label class="label">Name</label>
      <p class="control has-icons-left has-icons-right">
        <input class="input" type="text" placeholder="Your Name" name="name">
        <span class="icon is-small is-left">
          <i class="fas fa-user"></i>
        </span>
      </p>
    </div>
    <div class="field">
      <label class="label">Password</label>
      <p class="control has-icons-left has-icons-right">
        <input class="input" type="email" placeholder="Your Email" name="email">
        <span class="icon is-small is-left">
          <i class="fas fa-envelope"></i>
        </span>
      </p>
    </div>
    <div class="field">
      <label class="label">Password</label>
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
          Signup
        </button>
      </p>
    </div>
    </form>
  </div>
  <div class="column is-5"></div>
</div>
</section>
@endsection
