//string


//MultiLine String คือการใช้ ``(Blacktick)
const address = `ชื่อลูกค้า : เด็กชายก้อง
ที่อยู่ 55/154 ถนนเฮฮา อำเภอเมือง จังหวัดเรียนดี
เบอร์ติดต่อ : 012-345-6789`

console.log(address)


//Interpolation คือสามารถแทรกตัวแปลลงใน String ได้
let customerName = `เด็กชายศิรา`
let phoneNumber = `000-000-0000`
const address1 = `ชื่อลูกค้า : ${customerName}
ที่อยู่ 55/154 ถนนเฮฮา อำเภอเมือง จังหวัดเรียนดี
เบอร์ติดต่อ : ${phoneNumber}`

console.log(address1)
