//subcriptionBtn
import MODAL from "./libs/modal.js"


const subcriptionBtn = document.getElementById('subcriptionBtn')
console.log(subcriptionBtn)
const modalContent = () => {
    const modalContent = document.createDocumentFragment()
    const modalBody = document.createElement('div')
    modalBody.className = 'wdg-modal_body wdg-modal_body--full'
    modalBody.innerHTML = '<p style="text-align:center;padding:10px;">Bientôt disponible</p>'
    modalContent.appendChild(modalBody)
    return modalContent
}
  
subcriptionBtn.addEventListener('click', (e) =>{
    e.preventDefault()
    const modal = new MODAL({
        id: '',
        className: 'wdg-modal--default',
        modalContent: modalContent(),
        width: '500px',
        callBack: (context) => {
            console.log(context)
        }
    })
})
