document.addEventListener("DOMContentLoaded", function () {
    const editBtn = document.querySelectorAll('[data-modal-target="zone-edit"]');
    const modal = document.querySelector("#zone-edit");
    const zone = {
        name: modal.querySelector("#name"),
        price: modal.querySelector("#price"),
        numberOfSeats: modal.querySelector("#number_of_seats")
    };
    editBtn.forEach((button) =>{
        button.addEventListener("click", function () {
            zone.name.value = this.getAttribute("data-name");
            zone.price.value = this.getAttribute("data-price");
            zone.numberOfSeats.value = this.getAttribute("data-seats");
        });
    });
});
