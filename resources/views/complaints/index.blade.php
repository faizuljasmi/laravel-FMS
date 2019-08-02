@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @include ('alert')
        <h1 class="page-header">Manage Complaints</h1>
        <a href="{{route('complaints_create')}}" class="btn btn-primary mb-2">New Complaint</a>
      </div>

      <div class="col-md-12">
        <h5>Displaying {{$complaints->count()}} of {{$complaints->total()}} records.</h5>
      </div>
      <table class="table table-bordered table-striped">
      <thead>
        <tr class="bg-dark text-white">
          <th>No.</th>
          <th>@sortablelink('id')</th>
          <th>@sortablelink('title')</th>
          <th>Author</th>
          <th>@sortablelink('status')</th>
          <th>@sortablelink('created_at')</th>
          <th width="19%">Actions</th>
        </tr>
      </thead>
      <tbody>
        <!-- Important formula to number item per page -->
        @php $count = ($complaints->currentPage()-1) * $complaints->perPage(); @endphp
        @foreach($complaints as $p)
          <tr>
            <td>{{++$count}}</td>
            <td>{{$p->id}}</td>
            <td>{{$p->title}}</td>
            <td>{{$p->author}}</td>
            <td>
              @if ($p->status == 'Open')
                <span class="badge badge-danger">{{$p->status}}</span>
              @elseif ($p->status == 'Pending')
                <span class="badge badge-warning">{{$p->status}}</span>
              @else
                <span class="badge badge-success">{{$p->status}}</span>
              @endif
            </td>
            <td>{{$p->submit_date}}</td>
            <td>
              <a href="{{route('complaints_edit', $p)}}" class="btn btn-success">Edit</a>
              <a href="{{route('details_view', $p)}}" class="btn btn-primary">View</a>
              <a href="{{route('complaints_delete',$p)}}" class="btn btn-danger" onclick="return confirm('Serious ah bro?')">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
    <!-- Call pagination navigation -->
      {!! $complaints->appends(\Request::except('page'))->render() !!}
    </div>
  </div>
@endsection
