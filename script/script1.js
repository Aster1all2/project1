let n = document.getElementsByClassName('new');
let selected_page = ((Number(n[3].id) + 1) / 4);



document.getElementsByClassName('qwert')[selected_page-1].classList.add('Select');
