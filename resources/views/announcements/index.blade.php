 
@include('layouts.app')

   <main class="mt-8 ml-0 smXl:ml-64 dark:border-gray-700 ">
    <!-- Announcement-->
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased">
        <h1 class="text-2xl font-bold text-center mb-6 text-gray-900 dark:text-white">
           Announcement Table
        </h1>

        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">

            <div class="flex justify-end items-center w-full md:w-full">
                
                        
                    </div>
                </div> 

                <div class="overflow-x-auto">
                    <div class="bg-blue-500 hover:bg-blue-700 inline-block  text-white font-bold py-2 px-4 rounded-full cursor-pointer">
                        <a href="{{route('announcements.create')}}">add</a>
                    </div>

                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr class="bg-red-100">
                                <th scope="col" class="text-center px-4 py-3">ID</th>
                                <th scope="col" class=" text-center px-4 py-4"> Name</th>
                                <th scope="col" class=" text-center px-4 py-3">Description </th>
                                <th scope="col" class=" text-center px-4 py-3">Skills</th>
                                <th scope="col" class=" text-center px-4 py-3">Companie Id</th>
                                <th scope="col" class="text-center px-4 py-3 ">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($announcements as $a)
               
                                       <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3 text-center">{{$a->id}}</td>
                                    <td class="px-4 py-3 text-center">{{$a->name}}</td>
                                    <td class="px-4 py-3 text-center"> {{$a->descreption}} </td>
                                    <td class="px-4 py-3 text-center">{{$a->skills}}</td>
                                    <td>
                                        @foreach($companies as $company)
                                            @if($company->id == $a->companie_id)
                                                {{ $company->name }}
                                            @endif
                                        @endforeach
                                    </td>

                                    <td class="px-4 py-3 text-center">
                                        <a href="{{route('announcements.edit',$a->id)}}">Edit</a>

                                        <form action="{{route('announcements.destroy', $a->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE') 
                                            <button type="submit" class="bg-red-500">Supprimer</button>
                                        </form>

                                      </div>
                                    </td>
                                </tr>
 
                       </tbody>
                       @endforeach
                    </table>
                    {{$announcements->links()}}
                </div>


            </div>
        </div>
    </section>
</div> 
       


   

</main>


