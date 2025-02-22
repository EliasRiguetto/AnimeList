function initModal() {
  const botaoAbrir = document.querySelector('[data-modal="abrir"]');
  const containerModal = document.querySelector('[data-modal="container"]');
  
  if(botaoAbrir && containerModal) {
    
    function toggleModal(event) {
      event.preventDefault();
      containerModal.classList.toggle('ativo');
    }
    function cliqueForaModal(event) {
      if(event.target === this) {
        toggleModal(event);
      }
    }
  
    botaoAbrir.addEventListener('click', toggleModal);
    containerModal.addEventListener('click', cliqueForaModal);
  }
}
initModal() 