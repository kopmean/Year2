// Block scope (let/constant)

// test (let,var)

let x = 10
let y = 50
if (x === 10) {
    //ใช้ let จะไม่ข้ามขอบเขต
    let y = 500
    console.log("y = ใน" + y)
}
console.log("y = นอก" + y)

//test constant ถ้าเปลี่ยนก็จะ error เหมือนใน code

const z = 20
// z = 10
console.log("z = "+ z)