var calculatorContainer = document.getElementById('container');
var calculatorDisplay = document.getElementById('display');
var memoryIcon = document.getElementById('memoryIcon');
var clearDisplayFlag = true;
var firstValue, operator, secondValue, memoryValue;

calculatorContainer.addEventListener('click', processClick, false);

function processClick(e) {
    if (e.target.className === 'button') {
        switch (e.target.id) {
            case 'backspace':
                backspace();
                break;
            case 'clear':
                clearAll();
                break;
            case 'recallFromMemory':
                recallFromMemory();
                break;
            case 'changeSign':
                changeSign();
                break;
            case 'squareRoot':
                squareRoot();
                break;
            case 'percentage':
                percentage();
                break;
            case 'reciprocal':
                reciprocal();
                break;
            case '':
                appendValue(e.target.innerHTML.trim());
                break;
            default:
                prepareOperation(e.target.id);
        }
    }
}

function appendValue(newValue) {
    let currentDisplayValue = calculatorDisplay.innerHTML.trim();
    if (clearDisplayFlag) {
        currentDisplayValue = clearDisplay();
        clearDisplayFlag = false;
    }

    if (currentDisplayValue.length < 11) {
        calculatorDisplay.innerHTML = currentDisplayValue.concat(newValue);
    } else {

        const decimalIndex = currentDisplayValue.indexOf('.');
        if (decimalIndex !== -1) {
            let decimalPart = currentDisplayValue.substring(decimalIndex + 1);
            if (decimalPart.length < 11) {
                calculatorDisplay.innerHTML = currentDisplayValue.concat(newValue);
            }
        }
    }
}



function clearDisplay() {
    clearedValue = '';
    calculatorDisplay.innerHTML = clearedValue;
    calculatorDisplay.style.fontSize = '40px';
    return clearedValue;
}

function prepareOperation(elementId) {
    if (firstValue) {
        result = performCalculation(elementId);
        if (result) {
            calculatorDisplay.innerHTML = result;
            if (elementId === 'calculate') {
                resetVariableList();
            } else {
                firstValue = result;
                operator = elementId;
                clearDisplayFlag = true;
            }
        }
    } else {
        operator = elementId;
        firstValue = getDisplayValue();
        clearDisplayFlag = true;
    }
}

function getDisplayValue() {
    let currentDisplayValue = calculatorDisplay.innerHTML.trim();
    return parseFloat(currentDisplayValue);
}

function addition(firstValue, secondValue) {
    return firstValue + secondValue;
}

function subtraction(firstValue, secondValue) {
    return firstValue - secondValue;
}

function multiplication(firstValue, secondValue) {
    return firstValue * secondValue;
}

function division(firstValue, secondValue) {
    return firstValue / secondValue;
}

function backspace() {
    let currentDisplayValue = calculatorDisplay.innerHTML.trim();
    let backspacedValue = currentDisplayValue.length - 1;
    calculatorDisplay.innerHTML = currentDisplayValue.substring(0, backspacedValue);
}

function changeSign() {
    let currentDisplayValue = calculatorDisplay.innerHTML.trim();
    if (currentDisplayValue[0] == '-') {
        calculatorDisplay.innerHTML = currentDisplayValue.substring(1);
    } else {
        calculatorDisplay.innerHTML = '-'.concat(currentDisplayValue);
    }
}

function addToMemory() {
    if (calculatorDisplay.innerHTML.trim() != 'Калькулятор') {
        memoryValue = getDisplayValue();
        memoryIcon.style.display = 'block';
        clearDisplayFlag = true;
    }
}

function recallFromMemory() {
    if (memoryValue) {
        calculatorDisplay.innerHTML = memoryValue;
    }
}

function squareRoot() {
    let currentValue = getDisplayValue();
    if (currentValue >= 0) {
        let result = Math.sqrt(currentValue);

        result = result.toFixed(10);
        calculatorDisplay.innerHTML = result;
    } else {
        calculatorDisplay.innerHTML = 'Error';
    }
    clearDisplayFlag = true;
}


function percentage() {
    let currentValue = getDisplayValue();
    calculatorDisplay.innerHTML = firstValue * (currentValue / 100);
    clearDisplayFlag = true;
}

function reciprocal() {
    let currentValue = getDisplayValue();
    if (currentValue !== 0) {
        calculatorDisplay.innerHTML = 1 / currentValue;
    } else {
        calculatorDisplay.innerHTML = 'Error';
    }
    clearDisplayFlag = true;
}

function performCalculation() {
    secondValue = getDisplayValue();
    let function_name = window[operator];
    if (typeof function_name === 'function') {
        return function_name(firstValue, secondValue);
    } else {
        resetVariableList();
        return false;
    }
}

function resetVariableList() {
    firstValue = undefined;
    secondValue = undefined;
    operator = undefined;
    clearDisplayFlag = true;
}

function clearAll() {
    firstValue = undefined;
    secondValue = undefined;
    operator = undefined;
    memoryValue = undefined;
    clearDisplay();
    memoryIcon.style.display = 'none';
}