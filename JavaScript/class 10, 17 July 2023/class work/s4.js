var students = [
    {name:"Pluto", age: 44, email: "pluto@mail.com"},
    { email: "pluto1@mail.com", name:"Pluto1", age: 45},
    {age: 45,  email: "pluto2@mail.com", name:"Pluto2"}
]

// for (let i in students)
// {
//     students[i].age*=2
// }


// var r=students.map(function(v)
// {
//     v.age*=2
//     return v
// })
// console.log(r);

var rr=students.map(function(v)
{
    if(v.age>44)
    v.age*=2

    return v
})
console.log(rr);


