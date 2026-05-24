(function () {
     const cssFiles = ['https://cdn.mauwebsite.online/1_PHP/DUAN_TRASUA1101010/styles/clients/bootstrap.min.css', 'https://cdn.mauwebsite.online/1_PHP/DUAN_TRASUA1101010/styles/clients/style.css'];

     cssFiles.forEach(function (url) {
          const preload = document.createElement('link');

          preload.rel = 'preload';
          preload.as = 'style';
          preload.href = url;

          document.head.appendChild(preload);

          const css = document.createElement('link');

          css.rel = 'stylesheet';
          css.href = url;

          document.head.appendChild(css);
     });
})();
