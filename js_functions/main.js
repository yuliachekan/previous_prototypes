function messageAlert (){
    alert('My messageAlert function alert')
}
function add(a, b){
    var sum = a + b;
    console.log(a + ' + ' + b + ' = ' + sum);
}
function addWithReturn(num1, num2){
    var sum = num1 + num2;
    return sum;
}
var addWithReturnResult = addWithReturn (5, 7);
