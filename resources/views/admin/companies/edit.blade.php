@include('layouts.app')

<div>
  @if ($errors->any())
  <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
</div>


<form action="{{ route('companies.update',$company->id) }}" method="POST" >
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="text" name="name"  value="{{$company->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"></label>
    <textarea name="description" class="form-control" id="exampleInputPassword1">{{$company->description}}</textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

