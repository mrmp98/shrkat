!function(){"use strict";let t=document.querySelectorAll(".requires-validation");Array.from(t).forEach(function(t){t.addEventListener("submit",function(e){t.checkValidity()||(e.preventDefault(),e.stopPropagation()),t.classList.add("was-validated")},!1)})}();



