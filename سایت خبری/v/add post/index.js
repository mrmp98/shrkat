var x=document.querySelectorAll(".dropdown-item"),y=document.querySelector("#y");x.forEach(e=>{e.addEventListener("click",function(){let e=this.textContent;y.innerHTML=e})});
