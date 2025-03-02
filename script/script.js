//function ajax(url, method, functionName, dataArray)


document.addEventListener('click', function(e) {
    

    const closed = e.target.closest('div.new');
    if (closed != null)
    {
        
        id_click_new = closed.id; 
    }
   

});




document.addEventListener('mousemove', function(e) {
    const closed = e.target.closest('div.new');
    if (closed != null)
    {
        t = document.querySelector('.main-wrap-top_text');
        t.children[0].textContent = closed.children[2].textContent;
        t.children[2].textContent = closed.children[4].textContent;
        document.querySelector('.main-wrap-top').style.backgroundImage = 'url(BD/images/' + closed.children[0].textContent;
    }
    
})

document.addEventListener('mouseout', function(e) {
    const closed = e.target.closest('div.new');
    if (closed != null)
    {
        t = document.querySelector('.main-wrap-top_text');
        t.children[0].textContent = document.getElementsByClassName('new')[0].children[2].textContent;
        t.children[2].textContent = document.getElementsByClassName('new')[0].children[4].textContent;
        document.querySelector('.main-wrap-top').style.backgroundImage = 'url(BD/images/' + document.getElementsByClassName('new')[0].children[0].textContent;
    }
    
})


