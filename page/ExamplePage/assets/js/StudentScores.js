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

if (document.getElementById("resultList")) {
  const list = document.getElementById("resultList");
  for (let i = 0; i < names.length; i++) {
    const li = document.createElement("li");
    if (scores[i] >= 60) {
      li.textContent = names[i] + " - PASS";
    } else {
      li.textContent = names[i] + " - FAIL";
    }
    list.appendChild(li);
  }
}