let fields = document.getElementsByClassName("btn btn-primary");
for (let i = 0; i < fields.length; i++) {
    fields[i].addEventListener("click", ()=>{
        document.getElementById("myModal").style.display = "block";
    });
}

window.addEventListener("click", (e) => {
    console.log(e.target);
    if(e.target.id == 'myModal'){
        document.getElementById("myModal").style.display = "none";
    }
});


