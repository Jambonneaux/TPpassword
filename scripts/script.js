(function() {

    let passRegex = /^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{12,}$/,
        elInput = document.querySelectorAll(['input']),
        elBtnSignup = document.querySelector('[data-js-signup]'),
        isValid = true;

        console.log(elInput);



    elBtnSignup.addEventListener('click', errorRed);


    function errorRed(e) {
        e.preventDefault();
        let isValid = true;

        for (let i = 0; i < elInput.length; i++) {

            let pass = elInput[i].value;

            if (elInput[3].name == 'password' && elInput[i].value != '') {

            }
            else {
                isValid = false;
                elInput[3].closest.classList.add('error');
            }

            if (passRegex.test(pass) ) {

            }
            else {
                isValid = false;
                elInput[3].closest.classList.add('error');
            }
        }


        return isValid
    }





})();
