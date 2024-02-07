 
@include('layouts.app')

<main class="mt-8 ml-0 smXl:ml-64 dark:border-gray-700 ">
 <!--Company-->
 <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased">
    <div class="p-3 mb-2 bg-body-secondary  text-dark">
     <h1 class="text-2xl font-bold text-center mb-6 text-gray-900 dark:text-white">
        Company Table
     </h1>

     <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
         <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">

         <div class="flex justify-end items-center w-full md:w-full">
             
                     
                 </div>
             </div> 

             <div class="overflow-x-auto">
                 <div class="bg-blue-500 hover:bg-blue-700 inline-block  text-white font-bold py-2 px-4 rounded-full cursor-pointer">
                     <a href="{{route('companies.create')}}"class="btn btn-primary">Add +</a>
                 </div>

               
                 <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Descreption</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($companies as $c)
                      <tr>
                        <td>{{$c->id}}</td>
                        <td>{{$c->name}}</td>
                        <td>{{ $c->description }}</td>
                        <td class="d-flex " >
                            <a class="btn btn-primary mx-1" href="{{route('companies.edit',$c->id)}}">Edit</a>
                           <span >
                            <form  action="{{route('companies.destroy', $c->id) }}" method="POST">
                                @csrf
                                @method('DELETE') 
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </span>
                        </td>
                      </tr>
                      @endforeach
                    
                    </tbody>
                  </table>
                 {{$companies->links()}}

             </div>
</div>
         </div>
     </div>
 </section>
</div> 
    




</main>


