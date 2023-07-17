var n=['pluto','wolrd',43,45.98,32,false,43,true]

var nn=n.filter(function(v){
    
      return typeof v=='number'
})

console.log(nn)