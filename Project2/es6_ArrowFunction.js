// Arrow Function

// แบบเดิม

function fullname(fname,lname){
    return fname+lname
}

console.log(fullname("kop",12))

// แบบใหม่ Arrow

fullname=(fname,lname)=>fname+lname

console.log(fullname("eiei",10))