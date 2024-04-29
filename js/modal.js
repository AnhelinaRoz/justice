const open_modal = (modal_name) => {
    const modal_wrapper = document.querySelector('.modal_wrapper');
    const modal_block = document.querySelector('.' + modal_name);
    if (modal_block){
        modal_wrapper.classList.toggle('open');
        setTimeout(()=>{
            modal_block.classList.toggle('active');
        },100)
    }else {
        console.error('Модальный блок не найден');
    }
}