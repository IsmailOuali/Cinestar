document.addEventListener("DOMContentLoaded", function () {
    const editBtn = document.querySelectorAll('[data-modal-target="film-edit"]');
    const modal = document.getElementById("film-edit");
    const film = {
        id: modal.querySelector("#id"),
        title: modal.querySelector('#title'),
        description: modal.querySelector('#description'),
        genre: modal.querySelector('#genre'),
        actors: modal.querySelector("#actors"),
        duration: modal.querySelector("#duration"),
        year: modal.querySelector("#year"),
        screening_date: modal.querySelector("#screening_date"),
        category_id: modal.querySelector("#category_id"),
        room_id: modal.querySelector("#room_id"),
        country: modal.querySelector("#country"),
        language: modal.querySelector("#language"),
    }

    editBtn.forEach((button) => {
        button.addEventListener("click", function () {
            film.title.value = this.getAttribute("data-title");
            film.description.value = this.getAttribute("data-description");
            film.genre.value = this.getAttribute("data-genre");
            film.actors.value = this.getAttribute("data-actors");
            film.duration.value = this.getAttribute("data-duration");
            film.year.value = this.getAttribute("data-year");
            film.screening_date.value = this.getAttribute("data-screening_date");
            film.category_id.value = this.getAttribute("data-category");
            film.room_id.value = this.getAttribute("data-room");
            film.country.value = this.getAttribute("data-country");
            film.language.value = this.getAttribute("data-language");
        });
    });
});
