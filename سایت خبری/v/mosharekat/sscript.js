function truncateText(element, length) {
    let text = element.textContent;
    let truncatedText = "..." + text.slice(0, length) ;
    return truncatedText;
}

let postElements = document.querySelectorAll(".post");

postElements.forEach(postElement => {
    let truncatedText = truncateText(postElement, 60);
    postElement.innerHTML = truncatedText;
});
let table = document.getElementById('mymediya');
table.addEventListener('click', function(event) {
    let cellValue = event.target.textContent;
    console.log(cellValue);
});