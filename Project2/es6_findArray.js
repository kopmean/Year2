// ค้นหาข้อมูลใน Array


// indexOf(ข้อมูล) => ผมการค้นหาจะได้ตำแหน่ง Index ที่ค้นเจอ ถ้าค้นไม่เจอจะได้ -1
const colors = ["แดง","เขียว","น้ำเงิน","ม่วง","ขาว"]

const index = colors.indexOf("เหลือง");
console.log(index);

// find(ข้อมูล) => ผมการค้นหาจะได้ข้อมูลที่ค้นเจอ ถ้าค้นไม่เจอจะได้ undefined

const search = colors.find(element=>element==="เขียว")
console.log(search)

// findIndex(ข้อมูล) => ผลการค้นหาจะได้ตำแหน่ง Index ที่ค้นเจอ ถ้าค้นไม่เจอจะได้ -1
const search1 = colors.findIndex(element=>element==="เขียว")
console.log(search1)