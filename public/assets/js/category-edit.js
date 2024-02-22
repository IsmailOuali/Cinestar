document.addEventListener("DOMContentLoaded", function () {
    const editBtn = document.querySelectorAll('[data-modal-target="category-edit"]');
    const modal = document.querySelector("#category-edit");
    const category = {
        id: modal.querySelector("#id"),
        name: modal.querySelector("#name"),
        description: modal.querySelector("#description"),
    };
    editBtn.forEach((button) =>{
        button.addEventListener("click", function () {
            category.name.value = this.getAttribute("data-name");
            category.description.value = this.getAttribute("data-description");
        });
    });
});

