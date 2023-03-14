const tabs = (selectorTrigers, selectorContents) => {

    const trigers = document.querySelectorAll(selectorTrigers);
    const content = document.querySelectorAll(selectorContents);


    function hiddenTabs() {
        content.forEach(elm => {
            elm.classList.remove('content-show');     
            elm.classList.add('content-hidden');
        });

        trigers.forEach(elem => {
            elem.classList.remove('accordions__nav-item--active')
        })
    }

    function showTabs(i) {
        trigers[i].classList.add('accordions__nav-item--active');
        content[i].classList.add('content-show');
        content[i].classList.remove('content-hidden');
    }

    hiddenTabs();

    trigers.forEach((elem, i = 0) => {
       elem.addEventListener('click', function(e) {

        hiddenTabs()
        showTabs(i);
       });
    });

    showTabs(0);

}

export default tabs;