const nbrStudent = prompt("How many students are there ?");
class student {
    constructor(name, result, result2) {
        this.stdName = name;
        this.result = result;
        this.result2 = result2;
        this.average = (+result + +result2) / 2;
    }
};
let students = [];
for (let s = 0; s < nbrStudent; s++) {
    students.push(new student(prompt("What is the students name?"), prompt("What is the result"), prompt("what is the other result?")));
}
for (let s = 0; s < students.length; s++) {
    if (students[s].average < 10) {
        alert(students[s].stdName + " Shall Not Pass!");
    }
}