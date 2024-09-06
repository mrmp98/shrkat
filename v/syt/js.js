function truncateText(text) {
    // بررسی طول متن
    if (text.length >= 5) {
        // برش متن و اضافه کردن سه نقطه
        return text.slice(0, 5) + '...';
    }
    // اگر طول متن ۵ کاراکتر یا کمتر باشد، متن را همان‌طور که هست برمی‌گرداند
    return text;
}

// مثال استفاده

function truncateText() {

    var elements = document.querySelectorAll('#p');


    elements.forEach(element => {
        var text = element.innerHTML;


        element.innerHTML = text.slice(0, 500) + '...';

    });
}


truncateText();
