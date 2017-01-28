var numOne = document.getElementById("num-one");
var numTwo = document.getElementById("num-two");
var addSum = document.getElementById("add-sum");


numOne.addEventListener("input", add);
numTwo.addEventListener("input", add);

function add()
{
	var one = numOne.value;
	var two = numTwo.value;
	addSum.innerHTML = one + two;
}


