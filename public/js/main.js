console.log("hao");
function showCarIcon() {
    console.log("Car button clicked");
    document.getElementById("car-icon").classList.remove("hidden");
    document.getElementById("motor-icon").classList.add("hidden");
}

function showMotorIcon() {
    console.log("Motor button clicked");
    document.getElementById("car-icon").classList.add("hidden");
    document.getElementById("motor-icon").classList.remove("hidden");
}
