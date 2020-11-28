let fields = document.getElementsByClassName("btn btn-primary");
for (let i = 0; i < fields.length; i++) {
    fields[i].addEventListener("click", ()=>{
        document.getElementById("myModal").style.display = "block";
    });
}

document.getElementById('close').addEventListener("click", () => {
        document.getElementById("myModal").style.display = "none";
});


