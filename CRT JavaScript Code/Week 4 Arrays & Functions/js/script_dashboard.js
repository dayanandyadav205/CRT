let readings = [];

    function addReadings(index) {
      let value = (Math.random() * 100).toFixed(2);
      let timeStamp = new Date().toLocaleTimeString();

      let newReading = `Reading: ${value}. Time: ${timeStamp}`;

      readings.unshift(newReading);

      if (readings.length > 10) {
        readings.pop();
      }
      renderReadings();

    }

    function renderReadings() {
      let readingList = document.getElementById('readingList');
      document.getElementById('readingList').innerHTML = "";

      readings.forEach((readings, index) => {
        let li = document.createElement('li');
        li.textContent = readings;
         if (index === 0) li.classList.add('latestReading');
        readingList.appendChild(li);
      });
    }
    setInterval(addReadings, 1000)

    renderReadings();