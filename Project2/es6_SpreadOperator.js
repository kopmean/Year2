//Spread Operator 
//คือ การเติม...ลงในหน้าตัวแปลเพื่อให้ตัวแปรกระจายสมาชิกใน Array

const num = [10, 3 , 4]
const add = [20,1]
num.push(...add)
console.log(num)