var n = ['Jane', 87, 'Jene', '98', false, 34, 32.3, true];

var s=n.filter(function(v){
    
    return typeof v=='string'
})

console.log(s);