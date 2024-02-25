const addRoomBtn = document.querySelector("#add-zone")
const zoneDetailsContainer = document.querySelector("#zone-container")
const inputGroups = document.querySelector("#input-groups");
let counter = 0;
let seatsCounter = 0
addRoomBtn.addEventListener("click", (event) => {
    counter++;
    zoneDetailsContainer.classList.remove("hidden");
    let zoneInput = document.createElement("div");
    zoneInput.classList.add("flex", "flex-col", "gap-2")
    zoneInput.innerHTML = `<h5 class="font-bold text-xl mt-2.5">Zone N°: ${counter} </h5>` +
        '<label for="name">zone name</label>' +
        '<input class="p-2.5 border-2 rounded-xl" name="names[]" placeholder="enter zone name">' +
        '<label for="seats-number">number of seats</label>' +
        '<input class="seatsNumber p-2.5 border-2 rounded-xl" name="number_of_seats[]" placeholder="enter number of seats name">' +
        '<label for="price">Zone Price</label>' +
        '<input class="p-2.5 border-2 rounded-xl" name="prices[]" placeholder="enter zone price">'
    ;
    inputGroups.appendChild(zoneInput)
    let seatsInputs = document.querySelector(".seatsNumber")
    seatsInputs.forEach((item) => {
        item.addEventListener("keyup", (event) => {
            console.log("here");
            seatsCounter += seatsInput.value
        })
    })

})

