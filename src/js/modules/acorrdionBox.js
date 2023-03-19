const acorrdionBox = (trigerSelector) => {
  const triger = document.querySelectorAll(trigerSelector);

  triger.forEach(elem => {
      elem.addEventListener('click', function(e) {
        e.preventDefault();

          elem.classList.toggle("active");
          let panel = elem.parentNode;

          if (panel.style.maxHeight) {
              panel.style.maxHeight = null;
              panel.classList.remove('active');
          } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
              panel.classList.add('active');
          }
      })
  })
}

export default acorrdionBox;