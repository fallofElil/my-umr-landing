ymaps.ready(function() {
    var myMap = new ymaps.Map('map', {
        center: [45.034222, 38.912215],
        zoom: 15
    });

    myMap.geoObjects
        .add(new ymaps.Placemark([45.032871, 38.916306], {
            balloonContent: 'Развёрнутая инфа',
            iconCaption: 'Памятник Чернобальцам Кубани'
        }, {
            preset: 'islands#greenDotIconWithCaption'
        }))
        .add(new ymaps.Placemark([45.030785, 38.911241], {
            balloonContent: 'Памятник чекистам на Платановом бульваре',
            iconCaption: 'Памятник Чекистам'
        }, {
            preset: 'islands#greenDotIconWithCaption'
        }));
});