

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
 </head>
 <body>
    @include('layouts.app')

    <main class="mt-8 ml-0 smXl:ml-64 dark:border-gray-700 ">
        <!--Announcements-->
        <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased">
           <div class="p-3 mb-2 bg-body-secondary  text-dark">
       
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
                            <a href="{{route('announcements.create')}}" class="btn btn-primary">Add +</a>
                        </div>
       
                      
                        <table class="table">
                           <thead>
                             <tr>
                               <th scope="col">ID</th>
                               <th scope="col">Name</th>
                               <th scope="col">Description</th>
                               <th scope="col">Skills</th>
                               <th scope="col">Companie </th>
                               <th scope="col">Actions</th>
                             </tr>
                           </thead>
                           <tbody>
                               @foreach($announcements as $announcement)
                             <tr>
                               <td>{{$announcement->id}}</td>
                               <td>{{$announcement->name}}</td>
                               <td>{{ $announcement->descreption }}</td>
                               <td>{{ $announcement->skills }}</td>
                               <td>
                                   @foreach($companies as $company)
                                       @if($company->id == $announcement->companie_id)
                                           {{ $company->name }}
                                       @endif
                                   @endforeach
                               </td>
       
                               <td class="d-flex " >
                                   <a class="btn btn-primary mx-1" href="{{route('announcements.edit',$announcement->id)}}">Edit</a>
                                  <span >
                                   <form  action="{{route('announcements.destroy', $announcement->id) }}" method="POST">
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
                         {{$announcements->links()}}
       
                    </div>
       
       
                </div>
            </div>
        </section>
       </div> 
       </div>
           
       </main>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

 </body>
 </html>





