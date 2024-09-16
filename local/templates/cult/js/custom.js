//selects
const selects = document.querySelectorAll('.select-smartfilter');

selects && selects.forEach(select => {
    selectEvent(select);
})

function selectEvent(select) {
    if (select.classList.contains('disabled')) {
        return false;
    }

    const selectHead = select.querySelector('.select-head');
    const selectText = select.querySelector('.select-head-text');
    const selectInput = select.querySelector('.select-input');
    const selectItems = select.querySelectorAll('.select-item > a');

    document.addEventListener('click', function (e) {
        if (!(select == e.target || select.contains(e.target))) {
            select.classList.remove('active');
        }
    })

    selectHead.addEventListener('click', function (e) {
        e.preventDefault();
        select.classList.toggle('active');
    })

    selectItems.forEach(el => {
        el.addEventListener('click', function (e) {
            e.preventDefault();
            selectText.innerText = el.innerText;
            selectInput.value = 'Y';
            selectInput.name = el.dataset.controlName;
            select.classList.remove('active');
        })
    })
}