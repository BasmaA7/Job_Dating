
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
<div class="container bg-body-secondary" >
  <div class="bg-blue-500 hover:bg-blue-700 inline-block  text-white font-bold py-2 px-4 rounded-full cursor-pointer">
    <a href="{{route('companies.index')}}" class="btn btn-primary"><- Back</a>
</div>
  <h1  class="text-2xl font-bold text-center mb-6 text-gray-900 dark:text-white">Create Company</h1>
 

  <div class="overflow-x-auto">
   
  <form action="{{ route('companies.store') }}" method="POST" >
    @csrf
    <div class="mb-3">
      <label  class="form-label">Company Name</label>
      <input type="text" name="name" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label class="form-label">Desription</label>
      <textarea name="description" class="form-control" id="exampleInputPassword1">
      </textarea>
    </div>
  
    <button type="submit" class="btn btn-primary">Add</button>
  </form>

