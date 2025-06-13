@extends('layout.master')

@section('title', 'List User')

@section('content')

<div class="shadow-sm py-2 mb-3 rounded-2 p-2" style="margin: 0; width: 100%; background-color: rgb(224, 231, 236); display: flex; ">

        <a href="{{ url()->previous() }}" ><i class="bi bi-arrow-bar-left navHover" style="font-size: 3em; color: rgb(120, 154, 187);"></i></a>

        <h1 class="m-3" style="color: rgb(120, 154, 187); font-family: Raleway;">User</h1>

        <div>
           
        </div>
        

    </div>



<div class="d-flex flex-wrap my-4 shadow-sm rounded-2" style="height: 75vh; width: 100%; margin: 0; padding: 20px; background-color: rgb(224, 231, 236); justify-content: space-between;">

    


    <div class="shadow-sm bg-light container-fluid">

        <h3 class="m-3" style="color: rgb(120, 154, 187); font-family: Raleway;">List User</h3>

        <div class="card-body table-responsive p-0">
            <div class="card-body table-responsive p-0" style="height: 30vh;">
                <table class="table table-head-fixed text-no-wrap">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Level</th>
                      <th>Created_At</th>
                      <th>Update_At</th>
                      <th>Delete</th>
                      <th>Tasks</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($users as $user) 
                    <tr>
                    
                     <td>{{ $user->id}}</td>
                      <td>{{ $user->name}}</td>
                      <td>{{ $user->email}}</td>
                      <td>{{ $user->level}}</td>
                      <td>{{ $user->created_at }}</td>
                      <td>{{ $user->updated_at }}</td>
                      <td>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Hapus?')">
                          @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger shadow-sm hapusBtn " id="conTrash"><i class="bi bi-trash"></i></button>
                        </form>
                      </td>
                      <td>
                       <a href="{{ route('tasks.user', $user->id) }}" class="btn btn-sm btn-info"><i class="bi bi-card-text"></i></i></a>
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

    

</div>

@endsection