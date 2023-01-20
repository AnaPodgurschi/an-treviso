export default function examples () {
  const numbers = [1, 2, 3, 4, 5, 6, 3, 2, 3, 3, 2, 5, 6, 7, 3, 2, 2, 34];
  const teachers = [
    {
      username: "Galya",
      status: "teacher"
    },
  ];
  const students = [
    {
      username: "Galya",
      lesson: "History"
    },
    {
      username: "Galya",
      lesson: "History"
    },
    {
      username: "Galya",
      lesson: "English"
    },
    {
      username: "Galya",
      lesson: "English"
    },
    {
      username: "Galya",
      lesson: "Geometry"
    },
  ];
  
  function getGalyasLessons (students) {
    return students.map(item => {
      return item.lesson;
    });
  }
  
  console.log(getGalyasLessons(students));
  
  function getAverage (numbers) {
    const sum = numbers.reduce((sum, number) => {
      return sum + number;
    }, 0);
    return sum / numbers.length;
  }
  
  function countTeachers (teachers) {
    return teachers.reduce((count, teacher) => {
      if (teacher.status === "teacher") {
        return (count += 1);
      }
      return count;
    }, 0);
  }
  
  function getArrayOnlyTeachers (teachers) {
    return teachers.reduce((teachersArr, teacher) => {
      if (teacher.status === "teacher") {
        teachersArr.push(teacher);
      }
      return teachersArr;
    }, []);
  }
}
