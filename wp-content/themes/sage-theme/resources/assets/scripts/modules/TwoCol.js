export default class TwoCol {
  constructor() {
    this.$html = $('html')
  }
  test1() {
    console.log('test3')
  }
  init() {
    this.test1();
    console.log('test4', this.$html)
    $('body').addClass('abc')
  }
  addSlick() {
    this.$this.find('.lick-slider-demo').slick({
      rows: 0,
      adaptiveHeight: true,
      infinite: true,
      prevArrow: '<button type="button" class="slick-prev arrows"><span class="icomoon h1 icon-chevron-left"></span></button>',
      nextArrow: '<button type="button" class="slick-next arrows"><span class="icomoon h1 icon-chevron-right"></span></button>',
    })
  }
  addSlick() {
    this.$this.find('.the-latest-p-3').slick({
      rows: 0,
      adaptiveHeight: true,
      infinite: true,
      prevArrow: '<button type="button" class="slick-prev arrows"><span class="icomoon h1 icon-chevron-left"></span></button>',
      nextArrow: '<button type="button" class="slick-next arrows"><span class="icomoon h1 icon-chevron-right"></span></button>',
    })
  }
}

$(document).ready(function () {
  $(".slick-slider-demo").slick({
    slidesToShow: 1,
    // slidesToScroll: 1,
    // content: "\e910",
    // infinite: true,
    // speed: 1,
    // color: red,
    // arrows: false,
    // draggble: false,
  });
});

$(document).ready(function () {
  $(".the-latest-span").slick({
    slidesToShow: 1,
    // slidesToScroll: 1,
    // content: "\e910",
    // infinite: true,
    // speed: 1,
    // color: red,
    // arrows: false,
    // draggble: false,
  });
});
new TwoCol().init()
