function clearURLhash() {
    const url = new URL(window.location);
    url.hash = ''; // Убираем хэш
    window.history.pushState({}, '', url); // Обновляем URL без перезагрузки
}