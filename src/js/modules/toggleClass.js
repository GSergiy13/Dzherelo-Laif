const toggleClass = (trigerSelector, contentSelector) => {
  const btn = document.querySelectorAll(trigerSelector);
  const content = document.querySelector(contentSelector);

  btn.forEach((btn, i) => {
    btn.addEventListener('click', function() {
      this.classList.toggle('active');
      content.classList.toggle('active');
    });
  });

}

export default toggleClass;