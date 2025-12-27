let tempCelcius = [0, 14, 18, 23, 39, 47];

    tempCelcius.forEach((tempCelcius) => {
      document.writeln("Temp in Celcius: " + tempCelcius);
      document.writeln('<br>');
      // document.writeln('<br>');
    });

    let tempFehrenheit = tempCelcius.map(c => ((c * 9 / 5) + 32));

    tempFehrenheit.forEach((tempFehrenheit) => {
      document.writeln("Temp in Fehrenheit: " + tempFehrenheit);
      document.writeln('<br>');
    });



