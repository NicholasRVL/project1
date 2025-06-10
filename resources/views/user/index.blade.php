@extends('layout.master')



@section('content')

<div class="shadow-sm py-2 mb-3 rounded-2 p-2" style="margin: 0; width: 100%; background-color: rgb(224, 231, 236); display: flex; justify-content: space-between;">

        <h1 class="m-3" style="color: rgb(120, 154, 187); font-family: Raleway;">Tasks</h1>

        <div>
            <a href="#" class=" tHapus shadow-sm rounded-2 icon-link icon-link-hover justify-content-center align-item-center" id="delete-notes" style="height: 8vh; width: 17vh; background-color: rgb(230, 188, 188); --bs-icon-link-transform: translate3d(0, -.125rem, 0);"><i class="bi bi-trash mb-3" style="font-size: 2em; color:rgb(167, 58, 58);"></i></a>
            <a href="#" class=" tEdit shadow-sm rounded-2 icon-link icon-link-hover justify-content-center align-item-center" id="edit-notes" style="height: 8vh; width: 17vh; background-color: rgb(230, 224, 176); --bs-icon-link-transform: translate3d(0, -.125rem, 0);"><i class="bi bi-pencil-square mb-3" style="font-size: 2em; color:rgb(161, 163, 59);"></i></a>
            <a href="#" class="shadow-sm rounded-2 icon-link icon-link-hover justify-content-center align-item-center" id="add-notes" style="height: 8vh; width: 17vh; background-color: rgb(178, 201, 221); --bs-icon-link-transform: translate3d(0, -.125rem, 0);"><i class="bi bi-plus-lg mb-3" style="font-size: 2em;"></i></a>
        </div>
        

    </div>

<div class="shadow-sm  rounded-2" style="height: 75vh; width: 100%; margin: 0; padding: 20px; background-color: rgb(224, 231, 236)">

    
    <div class="container p-4 rounded-4 shadow-sm" id="conForm" style="display: none; width: 95%; max-width: 500px; height: auto; position: fixed; z-index: 1050; top: 20%; left: 50%; transform: translateX(-50%); background-color: rgb(178, 195, 206) ;">

    
    <form action="{{ route('tasks.store') }}" method="POST" class="mb-4 ">
        @csrf
        

            <div class="mb-3">
                <label class="form-label" style="opacity: 60%;">Judul</label>
                <input type="text" name="title" class="form-control mb-3 w-100"  placeholder="Tulis task baru..." required>
                 
                <label class="form-label" style="opacity: 60%;">Catatan</label>
                <textarea name="notes" class="form-control w-100"  rows="5" required></textarea>
            </div>
            
            <a href="#" class="btn " style="background-color: rgb(235, 135, 135);" id="closeForm">Batal</a>
            <button class="btn " style="background-color: rgb(102, 138, 170);">Tambah</button>

    </form>


   </div>



 
    <ul class="list-group d-flex flex-row flex-wrap gap-3 ">
        @forelse($tasks as $task) 
            <li class="list-group-item me-2 shadow-sm" style="min-width: 25vh; max-width: 40vh;">
                <div>

                    <form id="toggle-form-{{ $task->id }}" class="m-3" action="{{ route('tasks.toggle', $task->id) }}" method="POST" style="display:inline;">
                        @csrf
                            <input class="form-check-input me-2"  type="checkbox" onchange="this.form.submit()" {{ $task->is_done ? 'checked' : '' }}> 
                    </form>

                    <span class="{{ $task->is_done ? 'text-decoration-line-through text-muted' : '' }}" style="word-wrap: break-word; overflow-wrap: break-word; white-space: normal; opacity: 80%; color: rgba(27, 27, 27, 0.904);"><strong>{{ $task->title }}</strong></span>
                    
                    <p style="font-size: 12px; color: rgba(0, 0, 0, 0.521);">{{ $task->created_at }}</p>

                    <div style="position: absolute; top: 10px; right: 10px;" class="d-flex gap-1">
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning shadow-sm editBtn" style="display: none;"><i class="bi bi-pencil-square"></i></a>
                        {{-- <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-sm btn-info"><i class="bi bi-eye"></i></a> --}}
                    </div>


                    <div class="container">
                        <span class="{{ $task->is_done ? 'text-decoration-line-through text-muted' : '' }}" style="word-wrap: break-word; overflow-wrap: break-word; white-space: normal; opacity: 70%; font-family: 'Times New Roman'">{{ $task->notes }}</span>
                    </div>
                    

                    


                </div>

            

                <div class="d-flex gap-2 cardTrash"  style="position: absolute; bottom: 10px; right: 10px; " >
                    

                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Hapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger shadow-sm hapusBtn " id="conTrash" style="display: none;"><i class="bi bi-trash"></i></button>
                    </form>
                </div>
            </li>
        @empty
            <li class="list-group-item text-muted">Belum ada catatan</li>
        @endforelse

    </ul>


    

</div>

<script>

    const addN = document.getElementById("add-notes")
    const conForm = document.getElementById("conForm")
    const closeForm = document.getElementById("closeForm")
    addN.addEventListener("click", function () {
        
        conForm.style.display = "block"

    })

    closeForm.addEventListener("click", function () {
        
        conForm.style.display = "none"

    })

    
    const toggleBtn1 = document.getElementById("delete-notes")
    let visible = false

    toggleBtn1.addEventListener('click', (e) => {
    e.preventDefault()
    visible = !visible

    document.querySelectorAll(".hapusBtn").forEach(btn => {
      btn.style.display = visible ? 'block' : 'none'
    })
    })



    
    const toggleBtn2 = document.getElementById("edit-notes")

    toggleBtn2.addEventListener('click', (e) => {
    e.preventDefault()
    visible = !visible

    document.querySelectorAll(".editBtn").forEach(btn => {
      btn.style.display = visible ? 'block' : 'none'
    })
    })




</script>


@endsection


