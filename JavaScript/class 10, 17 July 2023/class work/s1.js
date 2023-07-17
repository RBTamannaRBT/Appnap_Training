var n=['pluto','wolrd',43,45.98,32,false,43,true]

var nn=n.map(function(v){
    if(typeof (v)=='number'){
        return v*5
      }
      return v
})

console.log(nn)