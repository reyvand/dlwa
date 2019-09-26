@extends('template.admin')
@section('content')
<h4 class="subtitle is-4">User Messages</h4>
<table class="table is-hoverable is-fullwidth">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Messages</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($data as $d)
      <tr>
        <td>{{$d->contacts_id}}</td>
        <td>{{$d->contacts_name}}</td>
        <td>{{$d->contacts_email}}</td>
        <td>{!!$d->contacts_message!!}</td>
      <td><a href="{{ URL::to('/admin/messages/delete') }}/{{ $d->contacts_id }}"><i class="fas fa-trash"></i></a></td>
      </tr>
  @endforeach
  </tbody>
</table>
@endsection