document.addEventListener("DOMContentLoaded", function () {
    const num1Input = document.getElementById("num1");
    const num2Input = document.getElementById("num2");
    const operationSelect = document.getElementById("operation");
    const calculateBtn = document.getElementById("calculate-btn");
    const resultOutput = document.getElementById("result");

    calculateBtn.addEventListener("click", function () {
        const num1 = parseFloat(num1Input.value) || 0;
        const num2 = parseFloat(num2Input.value) || 0;
        const operation = operationSelect.value;
        let result = 0;

        switch (operation) {
            case "add":
                result = num1 + num2;
                break;
            case "subtract":
                result = num1 - num2;
                break;
            case "multiply":
                result = num1 * num2;
                break;
            case "divide":
                result = num2 !== 0 ? num1 / num2 : "Error (Divide by Zero)";
                break;
            default:
                result = "Invalid Operation";
        }

        resultOutput.textContent = isNaN(result) ? "Error" : result;
    });
});
