console.log('s3')

var n=[65,22,99,33,44,54]

var a=[]
n.forEach(function(v,i,a){a[i]=v*5; console.log(n)})

console.log('n ',n)
console.log('a ',a)

var m=n.map(function(i){return i*5})

console.log('n ',n)
console.log('m ', m)
console.log(n.map(function(i){return i*5}))

// var r=n.forEach(function(v){return v*5})

// console.log('r ',r)