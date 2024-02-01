@include('assets.nav')


<form class="max-w-sm mx-auto">
  <h1 class="text-2xl font-bold dark:text-white pb-4">Create Announcement</h1>

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

  <div class="mb-5">
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name :</label>
    <input type="text" name="name"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
  <div class="mb-5">
    <label for="descpreption" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descreption :</label>
    <input type="text" name="descreption"
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
  <div>
    <label for="skills" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">skills :</label>
    <input type="text" name="skills"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
  <div>
    <label for="companieId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Companie :</label>
    <input type="text" id="small-input"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
</form>

