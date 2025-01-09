$(document).ready(function () {
    $('[data-fancybox]').fancybox({
      loop: true,
      buttons: [
        'slideShow',
        'share',
        'zoom',
        'fullScreen',
        'download',
        'thumbs',
        'close'
      ],
      thumbs: {
        autoStart: true
      }
    });
  });