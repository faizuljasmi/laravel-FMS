@extends('layouts.app')

@section('content')
<div class ="container">
  <div class ="row">
    <div class="col-md-12">
      <h1 class="page-header">New Complain</h1>
        @include('complaints.partials.form', ['action' => route('complaints_store')])
    </div>
  </div>
</div>
@endsection
