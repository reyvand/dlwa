@extends('template.master')
@section('content')
<div class="columns">
  <div class="column is-3"></div>
  <div class="column is-6">
    <section style="margin-top: 50px; margin-bottom: 50px;">
      <p class="subtitle is-3" style="text-align: center;">
        <span class="icon is-large">
          <i class="fas fa-user-circle"></i>
        </span>
        My Profile
      </p>
    </section>
    <section>
      @if(session()->has('success'))
			<div class="field">
				<div class="notification is-success">{{ session()->get('success') }}</div>
      </div>
      @elseif(session()->has('error'))
      <div class="field">
				<div class="notification is-danger">{{ session()->get('error') }}</div>
      </div>
      @endif
      <form action="{{URL::to('/profile')}}" method="POST">
      {{ csrf_field() }}
      <div class="field">
        <label class="label">Email</label>
        <p class="control has-icons-left has-icons-right">
          <input class="input" type="email" placeholder="Email" name="email" readonly value="{{Auth::user()->users_email}}"">
          <span class="icon is-small is-left">
            <i class="fas fa-at"></i>
          </span>
        </p>
      </div>
      <div class="field">
        <label class="label">Name</label>
          <p class="control has-icons-left has-icons-right">
            <input class="input" type="text" placeholder="Name" name="name" value="{{Auth::user()->users_name}}">
            <span class="icon is-small is-left">
              <i class="fas fa-user"></i>
            </span>
          </p>
      </div>
      <div class="field">
        <p class="control">
          <button class="button is-info">
            Update
          </button>
          <a class="button is-warning">
            Change Password
          </a>
        </p>
      </div>
      </form>
    </section>
  </div>
  <div class="column is-3"></div>
</div>
<div class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Change Password</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <form action="{{URL::to('/changepass')}}" method="POST">
    {{ csrf_field() }}
    <section class="modal-card-body">
      <div class="field">
        <p class="control has-icons-left has-icons-right">
          <input class="input" type="password" placeholder="New Password" name="newpass">
          <span class="icon is-small is-left">
            <i class="fas fa-lock"></i>
          </span>
        </p>
      </div>
      <div class="field">
        <p class="control has-icons-left">
          <input class="input" type="password" placeholder="Confirm New Password" name="confpass">
          <span class="icon is-small is-left">
            <i class="fas fa-lock"></i>
          </span>
        </p>
      </div>
    </section>
    <footer class="modal-card-foot">
      <button class="button is-success">Update</button>
    </footer>
    </form>
  </div>
</div>
<script>
  $(".is-warning").click(function () {
    $(".modal").addClass("is-active");
  });
  $(".delete").click(function () {
    $(".modal").removeClass("is-active");
  });
</script>
@endsection