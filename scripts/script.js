(function() {

    let passRegex = /^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{12,}$/,
        elInput = document.querySelectorAll(['input']),
        elLabel = document.querySelectorAll(['label']),
        elBtnSignup = document.querySelector('[data-js-signup]'),
        isValid = true;

        console.log(elInput);



    elBtnSignup.addEventListener('click', errorRed);


    function errorRed(e) {
        let isValid = true;

        for (let i = 0; i < elInput.length; i++) {
            for (let l = 0; l < elLabel.length; l++) {


                let pass = elInput[3].value;

                if (elInput[3].name == 'password' && elInput[i].value != '') {

                }
                else {
                    isValid = false;
                    elInput[3].classList.add('error');
                    elLabel[3].classList.add('error');
                }

                if (passRegex.test(pass) ) {

                }
                else {
                    isValid = false;
                    elInput[3].classList.add('error');
                    elLabel[3].classList.add('error');
                }
            }
        }

        if (isValid) {

        }
        else {
            e.preventDefault();
        }
        return isValid
    }





})();
