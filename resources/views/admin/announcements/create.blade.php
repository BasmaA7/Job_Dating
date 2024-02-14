@include('layouts.app')
<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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

<div class="container bg-body-secondary">
    <div class="bg-blue-500 hover:bg-blue-700 inline-block text-white font-bold py-2 px-4 rounded-full cursor-pointer">
        <a href="{{route('announcements.index')}}" class="btn btn-primary"><- Back</a>
    </div>
    <h1 class="text-2xl font-bold text-center mb-6 text-gray-900 dark:text-white">Create  Announcement</h1>

    <div class="overflow-x-auto">

        <form name="table" action="{{ route('announcements.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Announcement Name</label>
                <input type="text" name="name" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="descreption" class="form-control" id="exampleInputPassword1"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Skills</label>
                <div id="skills-container">
                    <select class="js-example-basic-multiple" name="skills[]" multiple="multiple">
                       @foreach ($skills as $skill)
                           <option value="{{$skill->id}}">{{$skill->name}}</option>
                       @endforeach
                      </select>
                </div>
            </div>

            {{-- <div class="mb-3">
                <label class="form-label">Skills</label>
                <select class="js-example-basic-single form-control border custom-border-color" name="skills[]"
                    multiple>
                    @foreach($skills as $skill)
                        <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                    @endforeach
                </select>
            </div> --}}

            <div class="form-group">
                <label for="company_id">Company</label>
                <select name="companie_id" class="form-control border custom-border-color">
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Image</label>
                <input class="form-control border custom-border-color" type="file" name="image" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <script>
            $(document).ready(function () {
                $('.js-example-basic-single').select2();
            });
        </script>
<script>
    var i = 0;
    $('#add').click(function () {
        ++i;
        $('#skills-container').append(
            `<input type="text" name="inputs[${i}][skills]" class="form-control" placeholder="Skill ${i + 1}" required>`
        );
    });

    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>

    </div>
</div>
