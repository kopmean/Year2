// join คือ แปลง Array ให้เป็น String 
// concat คือ นำ Array มาต่อกัน
const data = [100,200,300]
const data2 = [400,500]


// 100,200,300
console.log(data.join())

// 100*200*300
console.log(data.join("*"))

// [ 100, 200, 300, 400, 500 ]
console.log(data.concat(data2))
