(function(){
    //start
    //tick
    let spans = document.getElementsByClassName("check");
    for (let span of spans){
        let newText = span.textContent === "true" ? '✓' : '✗';
        span.textContent = newText;
    }
    //end
})();