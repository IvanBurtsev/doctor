const buttonElem = document.querySelector('.write_button');
const modalElem = document.querySelector('.popups_inner');

modalElem.style.cssText = `
display: flex;
visibility:hidden;
opacity:0;
transition: opacity 300ms ease-in-out;
`;

const closeModal = event => {
    const target = event.target;

    if (target === modalElem || target.closest('.close_popup')) {
        modalElem.style.opasity = 0;

        setTimeout(() => {
            modalElem.style.visibility = 'hidden';
        }, 300);
    }
}

const openMoodal = () => {
    modalElem.style.visibility = 'visible';
    modalElem.style.opacity = 1;
};
 buttonElem.addEventListener('click', openMoodal);
 modalElem.addEventListener('click', closeModal)