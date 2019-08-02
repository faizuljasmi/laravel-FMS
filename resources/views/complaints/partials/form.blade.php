<form action="{{$action}}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="">Title</label>
                                                                                                                                        <!-- Edit                    Create -->
      <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" name="title" value="{{isset($complaint) ? old('title', $complaint->title ): old('title')}}">
      <div class="invalid-feedback">
        {{$errors->first('title')}}
      </div>
    </div>
    <div class="form-group">
      <label for="">Complaint</label>
      <textarea name="body" id="" cols="30" rows="10" class="form-control {{$errors->has('body') ? 'is-invalid' : ''}}">{{isset($complaint) ? old('body', $complaint->body): old('body')}}</textarea>
      <div class="invalid-feedback">
        {{$errors->first('body')}}
      </div>
    </div>

    <div class="form-group">
      <label for="">Status:</label>
      <select name="status" id="" class="custom-select">
        <option value="1" {{isset($complaint) && $complaint->status == "Open" ? 'selected':''}}>Open</option>
        <option value="2" {{isset($complaint) && $complaint->status == "Pending" ? 'selected':''}}>Pending</option>
        <option value="3" {{isset($complaint) && $complaint->status == "Completed" ? 'selected':''}}>Completed</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    <a href="{{route('complaints_index')}}" class="btn btn-link">Cancel</a>
</form>
