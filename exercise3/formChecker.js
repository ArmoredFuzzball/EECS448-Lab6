function checkForm() {
    try {
        let email = document.getElementsByName('email')[0].value;
        let password = document.getElementsByName('password')[0].value;
    
        let cerealA = document.getElementsByName('CerealA')[0].value;
        let cerealB = document.getElementsByName('CerealB')[0].value;
        let cerealC = document.getElementsByName('CerealC')[0].value;
        let halfMilk = document.getElementsByName('HalfMilk')[0].value;

        if (!email || !email.includes('@') || !email.includes('.')) throw "bad email";
        if (!password) throw "bad password";
    
        if (!cerealA || cerealA < 0) throw "bad amount";
        if (!cerealB || cerealB < 0) throw "bad amount";
        if (!cerealC || cerealC < 0) throw "bad amount";
        if (!halfMilk || halfMilk < 0) throw "bad amount";

        if (cerealA == 0 && cerealB == 0 && cerealC == 0 && halfMilk == 0) throw "no items";
    
        let shipping = function() {
            for (selection of document.getElementsByName('shipping')) {
                if (selection.checked) return selection.value;
            }
            throw "no shipping";
        }
        shipping();
        return true;
    } catch (error) {
        console.error(error);
        alert(`Your form is invalid. Reason: ${error}. Please try again.`);
        return false;
    }
}