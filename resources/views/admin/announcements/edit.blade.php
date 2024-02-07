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

<div class="container  bg-body-secondary">
<form action="{{ route('announcements.update',$announcement->id) }}" method="POST" >
  @csrf
  @method('PUT')
  <div class="bg-blue-500 hover:bg-blue-700 inline-block  text-white font-bold py-2 px-4 rounded-full cursor-pointer">
    <div class="bg-blue-500 hover:bg-blue-700 inline-block  text-white font-bold py-2 px-4 rounded-full cursor-pointer">
      <a href="{{route('announcements.index')}}" class="btn btn-primary"><- Back</a>
  </div>
    <h1 class="text-2xl font-bold text-center mb-6 text-danger dark:text-white">Edit Announcement</h1>
    <div class="mb-3">
    <label for="exampleInputEmail1" class=" text-success-emphasis form-label text-success-emphasis"> Name :</label>
    <input type="text" name="name"  value="{{$announcement->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-success-emphasis">Description :</label>
    <textarea name="descreption" class="form-control" id="exampleInputPassword1">{{$announcement->descreption }} </textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class=" text-success-emphasis form-label "> Skills :</label>
    <textarea name="skills" class="form-control" id="exampleInputPassword1">  {{$announcement->skills }} </textarea>
  </div>
  <td>
    <select name="companie_id" class="form-control">
        @foreach($companies as $company)
            <option value="{{ $company->id }}" {{ $company->id == $announcement->company_id ? 'selected' : '' }}>
                {{ $company->name }}
            </option>
        @endforeach
    </select>
</td>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>