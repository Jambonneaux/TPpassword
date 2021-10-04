(function() {

    let passReg = /^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{12,}$/,
        elInput = document.querySelector(['data-js-input']);

        console.log(elInput);

    for (let i = 0; i < elInput.length; i++) {

        console.log(elInput[i].dataset.jsInput);


        if (elInput[i].dataset.jsInput == 'password') {
                    products.push(elInputs[i].value);
                }
    }

})();
