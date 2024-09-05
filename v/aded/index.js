
var items = document.querySelectorAll('.dropdown-item');
var dropdownToggle = document.querySelector('.dropdown-toggle');
var vorodi = document.querySelector('#vorodi');

items.forEach(function (item) {
    item.addEventListener('click', function () {
        vorodi.value = (this.innerHTML);

        dropdownToggle.innerHTML = this.innerHTML;
        console.clear();
    });
});