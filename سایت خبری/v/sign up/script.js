!function(){"use strict";let t=document.querySelectorAll(".requires-validation");Array.from(t).forEach(function(t){t.addEventListener("submit",function(e){t.checkValidity()||(e.preventDefault(),e.stopPropagation()),t.classList.add("was-validated")},!1)})}();
let cheshsm = 1 ; 
document.querySelector('#cheshm').addEventListener("click",function(){
    if(cheshsm == 0){
    this.classList = 'bi bi-eye-fill'  ;  
        cheshsm = 1 ; 
    document.querySelector('#password').type = 'password'   ; 

}else{
    cheshsm = 0
    this.classList = 'bi bi-eye-slash'  ;
    document.querySelector('#password').type = 'text'  ; 
}
 }) ; 


 document.querySelector("#password").addEventListener("input", function () 
 { let e = this.value.length;
      let t = document.querySelector("#passwordLength"); 
      t.textContent = `تعداد کاراکتر: ${e}`, t.style.transition = "all 0.3s ease" });
 

