const form = document.getElementById("registar-visita");
const name = document.getElementById("name");
const company = document.getElementById("company");
const reason = document.getElementById("reson");
const hour = document.getElementById("hour");
const photo = document.getElementById("photo");

form.addEventListener("submit",(e)=>{
    e.preventDefault();

    if (company.value.trim().length != 8){
        alert("Ingrese un nombre valido");
    }
});