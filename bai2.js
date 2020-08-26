let array =[1,4,5,7,3,7,4,8,3,33,66,44,66]


array.sort(function(a, b) {
  return a - b;
});
let array_last =array.splice(-2)
const reducer = (accumulator, currentValue) => accumulator + currentValue;
let result = array_last.reduce(reducer)
console.log(result);

