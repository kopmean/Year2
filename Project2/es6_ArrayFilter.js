// Array Filter คือการคัดกรองสมาชิกใน array ที่ผ่านเงื่อนไข
const data = [
    { name: "ก้อง", salary: 25000, department: "โปรแกรมเมอร์" },
    { name: "โจโจ้", salary: 30000, department: "การตลาด" },
    { name: "นัท", salary: 10000, department: "ฝึกงาน" },
    { name: "เบล", salary: 50000, department: "การตลาด" },
    { name: "จอย", salary: 10000, department: "ฝึกงาน" },

]

const result = data.filter(e => e.salary > 10000).filter(e=>e.department==="การตลาด")

console.log(result)
