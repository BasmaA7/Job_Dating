<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Annoucement</title>
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
  <header>
    
<nav class="bg-green-100 dark:bg-gray-700 mb-4">
    <div class="max-w-screen-xl px-4 py-3 mx-auto flex flex-wrap justify-between">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                <li>
                    <a href="/Home" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Home</a>
                </li>
                <li>
                    <a href=" /companies" class="text-gray-900 dark:text-white hover:underline">Company</a>
                </li>
               
                <li>
                    <a href="/announcements" class="text-gray-900 dark:text-white hover:underline">Annoucements</a>
                </li>
            </ul>
        </div>
        <div class="flex items-center space-x-6 rtl:space-x-reverse pr-4 ">
        <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 
        focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">          
          <a href="#" class="text-sm  text-white dark:text-blue-500 hover:underline">Login</a>
</button>

            
        </div>
    </div>
</nav>
  </header>
  @yield('content')

  </body>

</html>