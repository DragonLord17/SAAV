function validaCamposLogin(){
  var id_emp = document.getElementById('id_emp').value;
  var contra = document.getElementById('contra').value;
  if(id_emp === "" || contra == ""){
    alert("Llena los campos correspondientes");
    return false;
  }
}
