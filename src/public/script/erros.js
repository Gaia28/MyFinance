const erro = sessionStorage.getItem('erroLogin');
  if (erro) {
    document.getElementById('mensagem-erro').innerText = erro;
    sessionStorage.removeItem('erroLogin');
  }