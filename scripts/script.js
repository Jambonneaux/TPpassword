(function() {

    let passRegex = /^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{12,}$/,
        elInput = document.querySelectorAll(['input']),
        elBtnSignup = document.querySelector('[data-js-signup]'),
        isValid = true;

        console.log(elInput);



    elBtnSignup.addEventListener('click', errorRed);


    function errorRed(e) {
        let isValid = true;

        for (let i = 0; i < elInput.length; i++) {

            let pass = elInput[i].value;

            if (elInput[i].name == 'password' && elInput[i].value != '') {

            }
            else {
                isValid = false;
                elInput[i].classList.add('error');
            }
            
            if (passRegex.test(pass)) {

            }
            else {
                isValid = false;
                elInput[i].classList.add('error');
            }
        }


        return isValid
    }

















    for (var i = 0; i < elInput.length; i++) {

        console.log(elInput[i].value);

        if (elInput[i].name == 'password') {

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
