// Default Parameter คือการกำหนดค่าเริ่มต้นให้กับ parameter ตัวนั้น

getDataCustomer=(customerName,customerAddress)=>{
    const address = `ชื่อลูกค้า : ${customerName}
    ที่อยู่ : ${customerAddress}`
    return address
}

getDataCustomerDefault=(customerName,customerAddress)=>{

    //ตั้งไว้จะถ้าไม่ใส่
    if(!customerAddress){
        customerAddress=`กรุงเทพมหานคร`
    }
    const address = `ชื่อลูกค้า : ${customerName}
    ที่อยู่ : ${customerAddress}`
    return address
}

// เขียนง่ายเข้าใจง่าย Default Parameter
DefaultParameter=(customerName,customerAddress='กรุงเทพมหานคร')=>{
    const address = `ชื่อลูกค้า : ${customerName}
    ที่อยู่ : ${customerAddress}`
    return address
}

console.log(getDataCustomerDefault(`ค๊อป`));
console.log(getDataCustomer(`ค๊อป`,`เชียงใหม่`));
console.log(DefaultParameter(`ค๊อป`));
