!function(){"use strict";let e=document.querySelectorAll(".requires-validation");Array.from(e).forEach(function(e){e.addEventListener("submit",function(t){e.checkValidity()||(t.preventDefault(),t.stopPropagation()),e.classList.add("was-validated")},!1)})}();let cheshsm=1;document.querySelector("#cheshm").addEventListener("click",function(){0==cheshsm?(this.classList="bi bi-eye-fill",cheshsm=1,document.querySelector("#password").type="password"):(cheshsm=0,this.classList="bi bi-eye-slash",document.querySelector("#password").type="text")}),document.querySelector("#password").addEventListener("input",function(){let e=this.value.length,t=document.querySelector("#passwordLength");t.textContent=`تعداد کاراکتر: ${e}`,t.style.transition="all 0.3s ease"});