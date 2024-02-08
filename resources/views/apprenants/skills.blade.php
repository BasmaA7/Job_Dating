@extends('layouts.app')
<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@section('content')
    <h1>List of Skills</h1>

    <form action="{{url('addskills')}}" method="post">
        @csrf
        <div class="form-group">
            <select class="js-example-basic-single form-control border custom-border-color" name="skill_ids[]" multiple>
                @foreach($skills as $skill)
                    <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
    <script>
      $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
    </script>
@endsection


