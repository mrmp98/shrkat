var x = document.querySelectorAll(".dropdown-item")
   
x.forEach(e => { e.addEventListener("click", function () { 
    let e = this.textContent; collapss.innerHTML = e }) 
});
