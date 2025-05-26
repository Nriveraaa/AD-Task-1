const names = ["Alice", "Bob", "Charlie", "Diana"];
const scores = [85, 42, 73, 90];

if (document.getElementById("studentList")) {
  const list = document.getElementById("studentList");
  for (let i = 0; i < names.length; i++) {
    const li = document.createElement("li");
    li.textContent = names[i] + " - Score: " + scores[i];
    list.appendChild(li);
  }
}