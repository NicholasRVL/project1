function addTask() {
    const input = document.getElementById("taskInput");
    const taskText = input.value.trim();

    if (taskText === "") return;

    const list = document.getElementById("taskList");
    const li = document.createElement("li");

    li.className = "task-item";
    li.innerHTML = `
      <div>
        <input type="checkbox" class="form-check-input me-2">
        <span>${taskText}</span>
      </div>
      <button class="btn btn-sm btn-danger" onclick="removeTask(this)">🗑️</button>
    `;

    list.appendChild(li);
    input.value = "";
  }

  function removeTask(button) {
    button.closest("li").remove();
}