// image slider script


    // In this code, it is used to select all elements with the class name 'slide'.
    const slides = document.querySelectorAll('.slide')


    // it is used to select the left and right buttons.
    const leftBtn = document.getElementById('left')
    const rightBtn = document.getElementById('right')

    let activeSlide = 0


    // it is used to listen for the 'click' event on the left and right buttons.
    rightBtn.addEventListener('click', () => {

      // activeSlide: This variable keeps track of the currently active slide. It is initially set to 0.
      activeSlide++


      // it is used to check if the active slide index exceeds the total number of slides or goes below 0.
      if (activeSlide > slides.length - 1) {
        activeSlide = 0
      }

      // setActiveSlide: This function is responsible for updating the active slide by adding or removing the 'active' class. 
      // It uses a loop to remove the 'active' class from all slides and then adds the 'active' class to the slide at the current
      // activeSlide index.
      setActiveSlide()
    })

    leftBtn.addEventListener('click', () => {
      activeSlide--

      if (activeSlide < 0) {
        activeSlide = slides.length - 1
      }

      setActiveSlide()
    })

    function setActiveSlide() {
      slides.forEach((slide) => slide.classList.remove('active'))

      slides[activeSlide].classList.add('active')
    }

 
