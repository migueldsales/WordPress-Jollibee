const arr = ["bestseller", "chickenjoy", "yumburger", "breakfast",];

  for (var i = 0; i < arr.length; i++) {
    tns({
      container: `#${arr[i]}`,
      items: 4,
      gutter: 150,
      mouseDrag: true,
      controls: false,
      nav: false,
    });
  }

