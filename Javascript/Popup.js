const confirmBox = document.getElementById("confirm-box");

function closeConfirmBox(){
    confirmBox.style.display = "none";
}


if (window.location.href.includes(".php?confirm")) {
    confirmBox.style.display = "block";
}
