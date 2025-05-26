const passingScore = 60;

const students = [
  {
    name: "Alice",
    subjects: {
      Math: 85,
      English: 79,
      Science: 90
    }
  },
  {
    name: "Bob",
    subjects: {
      Math: 50,
      English: 70,
      Science: 65
    }
  },
  {
    name: "Charlie",
    subjects: {
      Math: 55,
      English: 58,
      Science: 61
    }
  },
  {
    name: "Diana",
    subjects: {
      Math: 95,
      English: 92,
      Science: 88
    }
  },
  {
    name: "Evan",
    subjects: {
      Math: 40,
      English: 55,
      Science: 45
    }
  }
];

let output = "";

students.forEach(student => {
  const subjectEntries = Object.entries(student.subjects);
  let failedSubjects = subjectEntries.filter(([subject, score]) => score < passingScore);
  let status = failedSubjects.length > 0 ? "Failed" : "Passed";
  let statusClass = failedSubjects.length > 0 ? "status-fail" : "status-pass";

  output += `<div class="student ${statusClass}">
    <h2>${student.name}</h2>
    <div class="subject-scores">`;

  subjectEntries.forEach(([subject, score]) => {
    output += `<div>${subject}: ${score}</div>`;
  });

  output += `</div>
    <div class="status">Status: ${status}</div>`;

  if (status === "Failed") {
    const reasons = failedSubjects.map(([subject]) => subject).join(", ");
    output += `<div class="reason">Reason: Failed due to low scores in ${reasons}.</div>`;
  }

  output += `</div>`;
});

document.getElementById("studentScores").innerHTML = output;
