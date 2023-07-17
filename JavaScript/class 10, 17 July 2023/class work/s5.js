var students = [
    {name:"Pluto", age: 44, email: "pluto@mail.com"},
    { email: "pluto1@mail.com", name:"Pluto1", age: 45},
    {age: 45,  email: "pluto2@mail.com", name:"Pluto2"}
]

var students2 = students.filter(function(v)
{
    
    return v.age>44
})

console.log(students2);
