function truncateText(element, length) {
    let text = element.textContent;
    let truncatedText = "..." + text.slice(0, length) ;
    return truncatedText;
}

let postElements = document.querySelectorAll(".post");

postElements.forEach(postElement => {
    let truncatedText = truncateText(postElement, 200);
    postElement.innerHTML = truncatedText;
    
});
