

function truncateText(element, length) {
    let text = element.textContent;
    let truncatedText = "..." + text.slice(0, length);
    return truncatedText;
}

let postElements = document.querySelectorAll(".post");

postElements.forEach(postElement => {
    let truncatedText = truncateText(postElement, 20);
    postElement.innerHTML = truncatedText;

});
function api() {
    let p = document.querySelectorAll('.x');
    p.forEach(pp => {
        pp.addEventListener('click', function () {


            $.ajax({
                type: 'POST',
                url: 'process.php',
                data: { id: pp.id },
                success: function (response) {

                    $('#response').html(response);
                },

            })
            location.reload();
        })
    })


}

api();

