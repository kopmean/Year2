// การ Loop Array
// For Loop , ForEach , ForOf

const data = [10,20,30,40,50]

// for
for(let i = 0; i<data.length; i++){
    if (data[i]>=30){
        break
    }
    console.log(`ลำดับที่ ${i} = ${data[i]}`)
}


// forEach ไม่สามารถใช้ break กับ continue ได้
let sum =0
data.forEach(element =>{
    sum += element
} )
console.log(sum)

// forOf
for (const element of data) {
    console.log(element)
}