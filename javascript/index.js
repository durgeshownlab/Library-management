console.log("hii");

function menuToggle()
{
    const menuBtn=document.querySelector(".menu-profile-box");
    if(menuBtn.style.display=="flex")
    {
        menuBtn.style.display="none";
        console.log("menu hide");
    }
    else
    {
        menuBtn.style.display="flex";
        console.log("menu shown");
    }
    console.log("button clicked");
}