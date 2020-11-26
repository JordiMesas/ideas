document.getElementById("update").addEventListener("click", ()=>{
    document.getElementById("myModal").style.display = "block";
});

window.addEventListener("click", (e) => {
    console.log(e.target);
    if(e.target.id == 'myModal'){
        document.getElementById("myModal").style.display = "none";
    }
});


