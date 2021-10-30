//Destructuring

//Array

const colors = ["เขียว","แดง","เหลือง","น้ำเงิน"]
const [a,b,c] = colors
const [,,,blue] = colors // กรณีที่ไม่ต้องการสร้างตัวแปลทุกตัวเอาแค่ blue

console.log(a)
console.log(b)
console.log(c)
console.log(blue)

// Object
const product = {
    productName:"คอมพิวเตอร์",
    price:3000,
    stock:10
}

const {productName:n,price:p,stock:s} = product //property:ตัวแปล
const {productName,price,stock} = product // สั้นกว่า ใช้ property กับ ตัวแปลชื่อเดียวกัน

console.log(n)
console.log(p)
console.log(s)
console.log(productName)

