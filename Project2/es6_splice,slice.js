// splice , slice
// splice(ตำแหน่งที่จะลบ,จำนวนที่จะลบ,สมาชิกที่ต้องการแทรกในตำแหน่งที่)
// slice(ตำแหน่งเริ่มต้น,ตำแหน่งสุดท้าย-1)

const data = [10,20 ,30 ,40, 50]

data.splice(1,1,999);
console.log(data);

const lastdata = data.slice(0,2); // slice ต้องมีตัวแปลมารองรับ
console.log(lastdata)