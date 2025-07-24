function abrirModalGanhos() {
    const modalGanhos = document.getElementById('btModalGanhos');
    carregarModal = document.getElementById('ganho-modal');

    modalGanhos.addEventListener('click', ()=>{
    carregarModal.showModal();
});
}
abrirModalGanhos();

function fecharModalGanhos() {
    const modalGanhos = document.getElementById('ganho-modal');
    const btsair = document.getElementById('btsair');

    btsair.addEventListener('click', () => {
        modalGanhos.close();
    });
}
fecharModalGanhos();