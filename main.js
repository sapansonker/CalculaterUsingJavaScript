console.log('Working successfully');
function Addition() {
    event.preventDefault();
    let firstNum = document.getElementById('first').value;
    let secondNum = document.getElementById('second').value;
    let result = (parseInt(firstNum) + parseInt(secondNum));
    let add = result;
    document.getElementById('Add').innerHTML = add;
}
function Substract() {
    event.preventDefault();
    let firstNum = document.getElementById('first').value;
    let secondNum = document.getElementById('second').value;
    let result = (parseInt(firstNum) - parseInt(secondNum));
    var substract = result;
    document.getElementById('Add').innerHTML = substract;
}
function Divide() {
    event.preventDefault();
    let firstNum = document.getElementById('first').value;
    let secondNum = document.getElementById('second').value;
    if (firstNum >= secondNum) {
        let result = (parseInt(firstNum) / parseInt(secondNum));
        var divide = result;
        document.getElementById('Add').innerHTML = divide;
    }else{
        alert('First value must be greater then second..!');
    }
}
function Multiply() {
    event.preventDefault();
    let firstNum = document.getElementById('first').value;
    let secondNum = document.getElementById('second').value;
    let result = (parseInt(firstNum) * parseInt(secondNum));
    var multiply = result;
    document.getElementById('Add').innerHTML = multiply;
}
function Percentage(){
    event.preventDefault();
    let firstNum = document.getElementById('first').value;
    let secondNum = document.getElementById('second').value;
    let result = ((parseInt(firstNum) / 100) * parseInt(secondNum));
    var percent = result;
    document.getElementById('Add').innerHTML = percent;
}
function Reset(){
    document.getElementById('Add').value = "";
//     document.getElementById('Multiply').innerHTML = "";
//     document.getElementById('Divide').innerHTML = "";
//     document.getElementById('Substract').innerHTML = "";
//     document.getElementById('Add').innerHTML = "";
}