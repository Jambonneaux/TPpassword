(function() {

    let passReg = /^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{12,}$/,
        elInput = document.querySelectorAll(['input']),
        isValid = true;

        console.log(elInput);

    for (var i = 0; i < elInput.length; i++) {

        console.log(elInput[i].value);

        if (elInput[i].dataset == "password") {
                console.log(elInput.value);

                if (passReg.test(elInput.value)) {

                }
                else if (elInput[i].required && elInput[i].value == '') {

                    isValid = false
                    elInput[i].classList.add('error');
                }
            }

        }
})();
