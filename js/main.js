let ham_btn=document.querySelector(".hamburger")

ham_btn.addEventListener("click", ()=>{
    
    document.querySelector(".nav-bar").classList.toggle("open-nav")

    document.querySelector(".hamburger").classList.toggle("toggled")
    document.querySelector(".ham-line1").classList.toggle("toggled")
    document.querySelector(".ham-line2").classList.toggle("toggled")
})