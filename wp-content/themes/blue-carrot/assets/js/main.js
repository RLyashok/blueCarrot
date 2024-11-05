document.addEventListener("DOMContentLoaded", function() {

    const accordion = new Accordion('.accordion-container',{
        duration: 900,
        showMultiple: false,
    });

    const checkboxes = document.querySelectorAll('.cyf-main.cyf__plates .checkbox');
    const selectedLabelsContainer = document.getElementById('selectedLabels');

    function updateSelectedLabels() {
        const selectedLabels = Array.from(checkboxes)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.nextElementSibling.textContent);
        console.log(selectedLabels);
        if (selectedLabels.length === 0) {
            selectedLabelsContainer.classList.remove("not-empty");

        }else {
            selectedLabelsContainer.classList.add("not-empty");
        }
        selectedLabelsContainer.textContent = selectedLabels.join(' / ');
    }

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateSelectedLabels);
    });

    document.querySelectorAll('.cyf__button .close-btn').forEach(button => {
        button.addEventListener('click', (event) => {
            const cyfItem = button.closest('.cyf__item');
            const trigger = cyfItem.querySelector('.ac-trigger');
            let elementID = trigger.getAttribute('id').split("-").pop();
            accordion.close(elementID)
            accordion.open(++elementID)
        });
    });
});
