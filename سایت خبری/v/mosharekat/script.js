function truncateText(t, e) { let n = t.innerText.slice(0, e); return n + "..." } let postElement = document.querySelector("#post"), numCharacters = 5, truncatedText = truncateText(postElement, numCharacters); postElement.innerHTML = truncatedText; 
