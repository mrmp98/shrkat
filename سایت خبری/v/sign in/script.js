// document.querySelector("#pass").addEventListener("input", function () { let e = this.value.length; let t = document.querySelector("#passwordLength"); t.textContent = `تعداد کاراکتر: ${e}`, t.style.transition = "all 0.3s ease" }); let CHESHM = 1; document.querySelector("#cheshm").addEventListener("click", function () { 1 === CHESHM ? (this.innerHTML = '<p class="bi bi-eye-slash"></p>', document.querySelector("#pass").type = "text", CHESHM = 0) : (this.innerHTML = '<p class="bi bi-eye-fill"></p>', document.querySelector("#pass").type = "password", CHESHM = 1) });