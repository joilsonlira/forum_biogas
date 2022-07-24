//MODAL SCRIPT
function open_modal(modal_name){
    let modal = document.getElementById(modal_name);
    console.log(modal)
    if (typeof modal == 'undefined' || modal === null)
        return;

        modal.style.display = 'flex';
}
function close_modal(modal_name){
    let modal = document.getElementById(modal_name);

    if (typeof modal == 'undefined' || modal === null)
        return;

        modal.style.display = 'none';
}