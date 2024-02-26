document.addEventListener("DOMContentLoaded", function () {
    const editBtn = document.querySelectorAll('[data-modal-target="schedule-edit"]');
    const modal = document.querySelector("#schedule-update");
    const screening_date = modal.querySelector("#screening_date");

    editBtn.forEach((button) => {
        button.addEventListener("click", function () {
            screening_date.value = this.getAttribute("data-screening-date");
            let id = this.getAttribute("data-id");
            modal.action = `http://localhost/dashboard/schedules/${id}`;
        });
    });
});
