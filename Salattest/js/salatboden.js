
function increaseFontSize(objId) {
obj = document.getElementById(objId);
//get current font size of obj
currentSize = parseFloat(obj.style.fontSize); //parseFloat gives you just the numerical value, i.e. strips the 'em' bit away
obj.style.fontSize = (currentSize + .1) + "em";
}

function decreaseFontSize(objId) {
obj = document.getElementById(objId);
//get current font size of obj
currentSize = parseFloat(obj.style.fontSize); //parseFloat gives you just the numerical value, i.e. strips the 'em' bit away
obj.style.fontSize = (currentSize - .1) + "em";
}