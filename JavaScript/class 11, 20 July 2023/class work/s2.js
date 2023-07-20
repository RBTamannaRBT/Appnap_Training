var students = [
    {name:"Pluto", age: 44, email: "pluto@mail.com", phone: "01709090909"},
    { email: "pluto1@mail.com", name:"Pluto1", age: 45, phone: "01809090909"},
    {age: 45,  email: "pluto2@mail.com", name:"Pluto2", phone: "+8801709090909"},
    {age: 45,  email: "pluto2@mail.com", name:"Pluto2", phone: "008801709090909"},
    {name:"Pluto", age: 44, email: "pluto@mail.com", phone: "01309090909"},
    { email: "pluto1@mail.com", name:"Pluto1", age: 45, phone: "01809090909"},
    {age: 45,  email: "pluto2@mail.com", name:"Pluto2", phone: "+8801309090909"},
    {age: 45,  email: "pluto2@mail.com", name:"Pluto2", phone: "0088017309090909"},
]

var output=students.filter(function(v)
{
    var s=['+88013', '013','0088013','+0088013','88013','+88017','017','0088017','+0088017','88017']
    for (let i=0; i<s.length; i++)
    {
        if(v.phone.startsWith(s[i]))
        {
            return true
        }
    }
})

console.log(output);

