



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
            <ul class="flex flex-row  font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
               logo
               
            </ul>
           
        </div>
        
        <div class="flex items-center space-x-6 rtl:space-x-reverse pr-4 ">
          <button type="button" class="text-white bg-orange-400 hover:bg-red-800 focus:outline-none focus:ring-4 
        focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">          
          <a href="#" class="text-sm  text-white dark:text-blue-500 hover:underline">SignUp</a>
</button>
        <button type="button" class="text-white bg-orange-400  hover:bg-red-800 focus:outline-none focus:ring-4 
        focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">          
          <a href="#" class="text-sm  text-white dark:text-blue-500 hover:underline">Login</a>
</button>
        

            
        </div>
    </div>
</nav>
  </header>
  @yield('content')
  <section>
   <div class="bg-red-500 ">
    
    <img class="rounded-t-lg" src="https://media.licdn.com/dms/image/D4E22AQHSeN28nXDGUA/feedshare-shrink_2048_1536/0/1705787163435?e=1709769600&v=beta&t=dnyjSUdP-KuKOcJSej3CTtyDtW2TU4NmnXhXZoAXiTw" alt="">
</div>
  
<div class="flex flex-wrap">
  @foreach($announcements as $announcement)
   <div class="max-w-sm bg-white  border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    
        <img class="rounded-t-lg" src="data:image/png;base64,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" alt="" />
   
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $announcement->name }}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $announcement->descreption }}</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>
@endforeach 
</div>


  </section>



  </body>

</html>