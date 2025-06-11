@extends('layout.master')

@section('content')

<div class="shadow-sm py-2 mb-3 rounded-2 p-2" style="margin: 0; width: 100%; background-color: rgb(224, 231, 236); display: flex; justify-content: space-between;">

        <h1 class="m-3" style="color: rgb(120, 154, 187); font-family: Raleway;">Admin</h1>

        <div>
           
        </div>
        

    </div>



<div class="d-flex flex-wrap my-4 shadow-sm rounded-2" style="height: 75vh; width: 100%; margin: 0; padding: 20px; background-color: rgb(224, 231, 236); justify-content: space-between;">




    <div class="shadow-sm bg-light container-fluid">

        <h3 class="m-3" style="color: rgb(120, 154, 187); font-family: Raleway;">List Admin</h3>

        <div class="card-body table-responsive p-0" style="height: 30vh;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Notes</th>
                      <th>Status</th>
                      <th>Created_At</th>
                      <th>Update_At</th>
                      <th>Delete</th>
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
                      <td>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Hapus?')">
                          @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger shadow-sm hapusBtn " id="conTrash"><i class="bi bi-trash"></i></button>
                        </form>
                      </td>
                      @empty
                     <li class="list-group-item text-muted">Empty</li>
                    
                    </tr>
                    @endforelse
        
        

                  </tbody>
                </table>
              </div>

    </div>

</div>

@endsection