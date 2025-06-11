@extends('layout.master')

@section('content')

<div class="shadow-sm py-2 mb-3 rounded-2 p-2" style="margin: 0; width: 100%; background-color: rgb(224, 231, 236); display: flex; justify-content: space-between;">

        <h1 class="m-3" style="color: rgb(120, 154, 187); font-family: Raleway;">Dev Home</h1>

        <div>
           
        </div>
        

    </div>



<div class="d-flex flex-wrap my-4 shadow-sm rounded-2  " style="height: max-content; width: 100%; margin: 0; padding: 20px; background-color: rgb(224, 231, 236); justify-content: space-between;">

    <div class="d-flex shadow-sm" style="height: max-content; background-color: rgba(244, 247, 247, 0.719);" >

        <div class="button-item p-2" style="height: max-content">
             <a href="/admlist" class="  shadow-sm rounded-2 icon-link icon-link-hover justify-content-center align-item-center p-4" id="delete-notes" style="min-height: max-content; width: 17vh; background-color: rgb(230, 188, 188); --bs-icon-link-transform: translate3d(0, -.125rem, 0);">
                <i class="bi bi-person-rolodex mb-3" style="font-size: 2em; color:rgb(167, 58, 58);"></i>
                <p class=" mb-0 text-center" style="font-size: 2em; color:rgb(167, 58, 58);">{{ $jumAdm }}</p>
            </a>
            <p class=" mb-0 text-center">Admin</p>
        </div>

        <div class="button-item p-2" style="height: max-content">
            <a href="/userlist" class="  shadow-sm rounded-2 icon-link icon-link-hover justify-content-center align-item-center p-4" id="edit-notes" style="min-height: max-content; width: 17vh; background-color: rgb(230, 224, 176); --bs-icon-link-transform: translate3d(0, -.125rem, 0);">
                <i class="bi bi-person-fill mb-3" style="font-size: 2em; color:rgb(161, 163, 59);"></i>
                <p class=" mb-0 text-center" style="font-size: 2em; color:rgb(161, 163, 59);">{{ $jumUser }}</p>
            </a>
            <p class=" mb-0 text-center">Users</p>
            
        </div>

        {{-- <div class="button-item p-2" style="height: max-content">
            <a href="#" class="shadow-sm rounded-2 icon-link icon-link-hover justify-content-center align-item-center" id="add-notes" style="height: 8vh; width: 17vh; background-color: rgb(178, 201, 221); --bs-icon-link-transform: translate3d(0, -.125rem, 0);"><i class="bi bi-plus-lg mb-3" style="font-size: 2em;"></i></a>
            <p class=" mb-0 text-center">Label 1</p>
        </div> --}}
    </div>



    <div class="d-flex flex-wrap my-4 shadow-sm rounded-2 table-responsive " style="height: max-content; width: 100%; margin: 0; padding: 20px; background-color: rgb(206, 216, 221); justify-content: space-between;">

      <h3 class="m-1" style="color: rgb(130, 153, 177); font-family: Raleway;">Table</h3>

     <div class="shadow-sm bg-light table-responsive mb-5 mt-5">

        <h3 class="m-3" style="color: rgb(130, 153, 177); font-family: Raleway;">Complete Tasks</h3>

        <div class=" table-responsive p-0" >
                <table class="table table-head-fixed text-nowrap" style="max-height: 20vh;">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>User_Id</th>
                      <th>Title</th>
                      <th>Notes</th>
                      <th>Status</th>
                      <th>Created_At</th>
                      <th>Update_At</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($taskUdahDone as $task) 
                    <tr>
                    
                     <td>{{ $task->id }}</td>
                      <td>{{ $task->user_id }}</td>
                      <td>{{ $task->title }}</td>
                      <td>{{ $task->notes }}</td>
                      <td>{{ $task->is_done ? 'Complete' : 'Incomplete' }}</td>
                      <td>{{ $task->created_at }}</td>
                      <td>{{ $task->updated_at }}</td>
                      @empty
                     <li class="list-group-item text-muted">Empty</li>
                    
                    </tr>
                    @endforelse
            
        
        

                  </tbody>
                </table>
              </div>

             <h3 class="m-3" style="color: rgb(120, 154, 187); font-family: Raleway;">Incomplete Tasks</h3>


              <div class="card-body table-responsive p-0" >
                <table class="table table-head-fixed text-nowrap " style="max-height: 20vh;">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>User_Id</th>
                      <th>Title</th>
                      <th>Notes</th>
                      <th>Status</th>
                      <th>Created_At</th>
                      <th>Update_At</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($taskBelumDone as $task) 
                    <tr>
                    
                     <td>{{ $task->id }}</td>
                      <td>{{ $task->user_id }}</td>
                      <td>{{ $task->title }}</td>
                      <td>{{ $task->notes }}</td>
                      <td>{{ $task->is_done ? 'Complete' : 'Incomplete' }}</td>
                      <td>{{ $task->created_at }}</td>
                      <td>{{ $task->updated_at }}</td>
                      @empty
                     <li class="list-group-item text-muted">Empty</li>
                    
                    </tr>
                    @endforelse

                  </tbody>
                </table>
              </div>

    </div>



    <div class="shadow-sm bg-light table-responsive">

      <h3 class="m-3" style="color: rgb(130, 153, 177); font-family: Raleway;">User Tasks</h3>

        <div class="table-responsive p-0" >
                <table class="table table-head-fixed text-nowrap" style="max-height: 20vh;">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>User_Id</th>
                      <th>Title</th>
                      <th>Notes</th>
                      <th>Status</th>
                      <th>Created_At</th>
                      <th>Update_At</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($tasks as $task) 
                    <tr>
                    
                     <td>{{ $task->id }}</td>
                      <td>{{ $task->user_id }}</td>
                      <td>{{ $task->title }}</td>
                      <td>{{ $task->notes }}</td>
                      <td>{{ $task->is_done ? 'Complete' : 'Incomplete' }}</td>
                      <td>{{ $task->created_at }}</td>
                      <td>{{ $task->updated_at }}</td>
                      @empty
                     <li class="list-group-item text-muted">Empty</li>
                    
                    </tr>
                    @endforelse
            
        
        

                  </tbody>
                </table>
              </div>
            </div>
          </div>

</div>




@endsection

