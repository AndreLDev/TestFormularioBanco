function limitarDigitos(input, maxDigits) {
    if (input.value.length > maxDigits) {
      input.value = input.value.slice(0, maxDigits);
    }
  }

  function formatarCPF(campo) {
    // Remove caracteres não numéricos
    var cpf = campo.value.replace(/\D/g, '');
  
    // Adiciona a máscara
    cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
  
    // Atualiza o valor do campo
    campo.value = cpf;
  }