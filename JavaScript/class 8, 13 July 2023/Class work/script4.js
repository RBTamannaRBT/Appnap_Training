var a = [22,33,44,54];

console.log(a[0]+a[1]+a[2]+a[3]);

var s = 0;
for (let i = 0; i < a.length; i++) 
{
    s+= a[i];
}

console.log(s);
var sum = 0;
a.map(i => sum+=i);

console.log(sum);