// Declarations
let students = [
  { name: "Alice", score: 85 },
  { name: "Bob", score: 62 },
  { name: "Charlie", score: 55 },
  { name: "Diana", score: 90 },
  { name: "Evan", score: 40 }
];

let resultHTML = "";

// Looping through students
for (let i = 0; i < students.length; i++) {
  let status = "Failed";

  // Conditional check
  if (students[i].score >= 70) {
    status = "Passed";
  }

  resultHTML += `<li>${students[i].name} - Score: ${students[i].score} - <strong>${status}</strong></li>`;
}

// Output to the page
document.getElementById("studentList").innerHTML = resultHTML;
