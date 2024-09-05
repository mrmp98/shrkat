let postElements = document.querySelectorAll(".post");
function truncateText(element, length) {
    let text = element.textContent;
    let truncatedText = "..." + text.slice(0, length);
    return truncatedText;
}


postElements.forEach(postElement => {
    let truncatedText = truncateText(postElement, 20);
    postElement.innerHTML = truncatedText;

});
function api() {
    let q = document.querySelectorAll('.y');
    let p = document.querySelectorAll('.x');
    p.forEach(pp => {
        pp.addEventListener('click', function () {


            $.ajax({
                type: 'POST',
                url: 'alwoaapi.php',
                data: { id: pp.id, vaziyat: 'save' },
                success: function (response) {

                    $('#response').html(response);
                },

            })
            location.reload();
        })
    })
    q.forEach(qq => {
        qq.addEventListener('click', function () {


            $.ajax({
                type: 'POST',
                url: 'alwoaapi.php',
                data: { id: qq.id, vaziyat: 'save' },
                success: function (response) {
                    console.log('send')
                    $('#response').html(response);
                },

            })
            location.reload();
        })
    })


}

api();