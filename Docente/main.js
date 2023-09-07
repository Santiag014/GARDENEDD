let desplegables = document.querySelectorAll('.list-button--click ');

desplegables.forEach(desplegables => {
    desplegables .addEventListener('click', ()=>{
        desplegables.classList.toggle('arrow');

        let height = 0;
        let menu = desplegables.nextElementSibling;
        console.log(menu.scrollHeight)
        if(menu.clientHeight == "0"){
            height=menu.scrollHeight;
        }

        menu.style.height = `${height}px`;

    })
});