@extends('template.master')
@section('content')
<div class="columns">
  <div class="column is-3"></div>
  <div class="column is-6">
    <section style="margin-top: 50px; margin-bottom: 50px;">
      <p class="subtitle is-3" style="text-align: center;">Contact Us</p>
    </section>
    <section>
      @if (session()->has('success'))
          <div class="field">
            <div class="notification is-success">{{ session()->get('success') }}</div>
          </div>
      @endif
      <form action="{{URL::to('/contact')}}" method="POST">
      {{ csrf_field() }}
      <div class="field">
        <label class="label">Name</label>
        <p class="control has-icons-left has-icons-right">
          <input class="input" type="text" placeholder="Name" name="name">
          <span class="icon is-small is-left">
            <i class="fas fa-user"></i>
          </span>
        </p>
      </div>
      <div class="field">
        <label class="label">Email</label>
        <p class="control has-icons-left has-icons-right">
          <input class="input" type="email" placeholder="Email" name="email">
          <span class="icon is-small is-left">
            <i class="fas fa-at"></i>
          </span>
        </p>
      </div>
      <div class="field">
        <label class="label">Message</label>
        <div class="control">
          <textarea class="textarea has-fixed-size" placeholder="Leave your message here" name="message"></textarea>
        </div>
      </div>
      <div class="field">
        <p class="control">
          <button class="button is-info">
            Submit
          </button>
        </p>
      </div>
      </form>
    </section>
  </div>
  <div class="column is-3"></div>
</div>
@endsection
