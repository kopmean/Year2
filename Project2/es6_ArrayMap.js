// Array Map

const number = [10,20,30,40]
console.log(`number = ${number}`)

const result = number.map(e=>{
    const a = e*2
    return a
})

console.log(`number = ${result}`)




const data = ["ฝนตก","แดดร้อน","ฝนฟ้าคะนอง","อากาศดี",]

const temperator = data.map(
    (e,i)=>{
        return `วันที่ ${i+1}, สภาพอากาศ = ${e}`
    }
)

console.log(temperator);



const temp = [
    {day:"01/05/2564", weather:"แดดออก",temp:27},
    {day:"03/05/2564", weather:"ฝนตก",temp:23},
    {day:"04/05/2564", weather:"หมอก",temp:18}
]

const weather = temp.map(e=>e.weather)

console.log(...weather);
