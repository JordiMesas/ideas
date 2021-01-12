let fields = document.getElementsByClassName("btn btn-primary");
for (let i = 0; i < fields.length; i++) {
    fields[i].addEventListener("click", ()=>{
        document.getElementsByClassName("modal")[i].style.display = "block";
    });

    document.getElementsByClassName('fa-times-circle')[i].addEventListener("click", () => {
            document.getElementsByClassName("modal")[i].style.display = "none";
    });
}



