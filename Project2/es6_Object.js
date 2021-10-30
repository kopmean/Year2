// Object


const customer = {
    customerName:"ศิรา",
    age:19,
    address:"กรุงเทพ"
}

console.log(customer);


// แบบเรียกใช้ตัวแปรสั้นๆ

const customerName="นะ"
const age=50
const address="กรุงเทพ"
const customer1 = {
    customerName,
    age,
    address,
    showData(){
        console.log("ข้อมูลลูกค้าชื่อ =" + customerName)
    }
}

console.log(customer1);
customer1.showData();

