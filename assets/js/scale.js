
    const images = document.querySelectorAll('.scale');
    let enlargedImage = null;

    images.forEach(image => {
      image.addEventListener('click', function(event) {
        if (enlargedImage && enlargedImage !== image) {
          // Если другое изображение было увеличено, возвращаем его в исходное состояние
          enlargedImage.classList.remove('enlarged');
        }
        if (image.classList.contains('enlarged')) {
          // Если текущее изображение уже увеличено, возвращаем его в исходное состояние
          image.classList.remove('enlarged');
          enlargedImage = null;
        } else {
          // Увеличиваем текущее изображение
          image.classList.add('enlarged');
          enlargedImage = image;
        }
        // Предотвращаем всплытие события, чтобы клик по изображению не вызывал обработчик на родительском элементе
        event.stopPropagation();
      });
    });

    // Обработчик клика по документу для возврата всех изображений в исходное состояние
    document.addEventListener('click', function() {
      if (enlargedImage) {
        enlargedImage.classList.remove('enlarged');
        enlargedImage = null;
      }
    });