

function api($r, $r2) {
    $.ajax({
        type: 'POST',
        url: 'like.php',
        data: { id: $r, vaz: $r2 },
        success: function (response) {

            $('#response').html(response);
        },

    })

}
let dorost = 'true';
var like = document.querySelector('.heart');
var mader = document.querySelector('#mader');
var dislike = document.querySelector('.bi');
dislike.style.display = 'flex';
like.style.display = 'none';

mader.addEventListener('click', function () {
    if (dislike.style.display === 'none') {
        like.style.display = 'none';
        dislike.style.display = 'flex';
        dorost = 'false';;
        api(getCookie('id'), dorost);

    } else {
        like.style.display = 'flex';
        dislike.style.display = 'none';
        dorost = 'true'
        api(getCookie('id'), dorost);


    }
});


function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}
