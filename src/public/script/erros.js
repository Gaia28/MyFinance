const erroLogin = sessionStorage.getItem('erroLogin');
  if (erroLogin) {
    document.getElementById('mensagem-erro').innerText = erroLogin;
    sessionStorage.removeItem('erroLogin');
  }

  const erroCadastro = sessionStorage.getItem('erroCadastro');
  if (erroCadastro) {
    document.getElementById('mensagem-erro').innerText = erroCadastro;
    sessionStorage.removeItem('erroCadastro');
  }

  const erroFinanca = sessionStorage.getItem('erroFinanca');
  if (erroCadastro) {
    document.getElementById('mensagem-erro').innerText = erroCadastro;
    sessionStorage.removeItem('erroFinanca');
  }