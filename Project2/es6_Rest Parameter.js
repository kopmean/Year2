//Rest Parameter
// summation=(x,y)=>{
//     return x+y
// }


//ทำให้เรา + กี่ค่าก็ได้
summation=(...numberArr)=>{
    let total = 0
    //เอาสมาชิกใน Array มาทีละตัวเข้า number แล้วไป + เข้า total
    for( let number of numberArr) total += number
    return total
}


console.log(summation(39,49));
console.log(summation(39,49,30));
console.log(summation(39,49,30,43));

