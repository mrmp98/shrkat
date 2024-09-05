var submit = document.querySelector("#submit");
var dropdownItems = document.querySelectorAll(".dropdown-item");
var collapss = document.querySelector('#y');

dropdownItems.forEach(item => {
    item.addEventListener("click", function () {
        collapss.innerHTML = this.textContent;
    });
});

submit.addEventListener("click", function (event) {
    event.preventDefault();
    var myTextarea = document.querySelector("#myTextarea").value;
    var selectedText = collapss.innerHTML;

    if (myTextarea.trim() === '' || selectedText.trim() === 'انتخاب موضوع') {
        alert('لطفا تمام اینپوت هارا پر کنید');
    } else {
        // اینجا می‌توانید عملی که می‌خواهید انجام دهید را اضافه کنید

    }
});