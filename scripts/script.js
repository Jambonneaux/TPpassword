(function() {

    let passReg = /^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{12,}$/,
        elInput = document.querySelectorAll(['input']);

        console.log(elInput);

    for (var i = 0; i < elInput.length; i++) {

        console.log(elInput[i].dataset.jsInput.value);

        if (elInput[i].dataset == "password") {
                console.log(elInputs.value);
            }

        }
})();
