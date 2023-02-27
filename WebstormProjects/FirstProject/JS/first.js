/* Data Types:
* undefined, null , boolean string, symbol, number and  object
* */

var ourDog = {
    'name' : 'Johny',
    'legs' : 4,
    'tail' : true,
    'friends' : ["anyone"]
}
ourDog.name =  'Happy Johny'
ourDog.bark = "Woof woof"
delete ourDog.bark

function Lookup(val) {
    var result = ""


// switch(val) {
//     case "alfa":
//         result = "Adam"
//         break
//     case "beta":
//         result = "Beti";
//         break
//     case "charlie":
//         result = "Conie"
//         break
// }

    var lookup = {
        "alpha": "Adam",
        "beta": "Beti",
        "charlie": "Conie"
    }
    result = lookup[val]
    return result;
}
console.log(Lookup("beta"))


var myObj = {
    gift : "pony",
    pet : "kitten",
    bed : "kings"
}

function check(checkProp){
   if( myObj.check(checkProp)){
       return myObj[checkProp]
   }
   else{
       return "Not found"
   }
}
console.log(check("gift"))
console.log(check("money")) // Not found












