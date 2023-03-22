//contact name validálása (ha rossz billentyű érkezik, nem engedi beírni azt)
let prevVal = "";

document.querySelector('.contact-name').addEventListener('input', function (e) {
    if (this.checkValidity()) {
        prevVal = this.value;
    } else {
        this.value = prevVal;
    }
});