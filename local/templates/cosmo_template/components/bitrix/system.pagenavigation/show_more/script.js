document.addEventListener('click', function (event) {
    if (event.target.classList.contains('load_more')) {
        let targetContainer = document.querySelector('.support-items'),          //  Контейнер, в котором хранятся элементы
            url = document.querySelector('.load_more').getAttribute('data-url');    //  URL, из которого будем брать элементы
        if (url !== undefined) {
            let ajax = new XMLHttpRequest();
            ajax.open("GET", url, true);
            ajax.onload = function () {
                let content = new DOMParser().parseFromString(this.response, "text/html"),
                    bodyPart = content.body,
                    fragmentElement = document.createDocumentFragment(),
                    result = fragmentElement.appendChild(bodyPart);

                document.querySelector('.support-bottom').remove();
                let elements = result.getElementsByClassName('support-card'),
                    pagination = result.querySelector('.support-bottom');
                [...elements].forEach((e) => {
                    targetContainer.insertAdjacentHTML('beforeend', e.outerHTML);
                });
                if (pagination) {
                    targetContainer.insertAdjacentHTML('beforeend', pagination.outerHTML);
                }
            }
            ajax.send();
        }
    }
});








