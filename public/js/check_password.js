function CheckPassword() {

  const pw1 = document.getElementById("pw1").value;
  const pw2 = document.getElementById("pw2").value;
  
  if (pw1 !== pw2) {
      alert("As senhas não coincidem. Tente novamente.");
      return false; 
  }
  return true; 
}