ymaps.ready(init); //Инициализация карты и добавление объектов из json-файла

function init () {
    var myMap = new ymaps.Map('map', {
            center: [53.757553, 87.136046],
            zoom: 13
    }, {
        searchControlProvider: 'yandex#search'
        }),
    objectManager = new ymaps.ObjectManager({
        //Кластеризация меток
        clusterize: true,
        // ObjectManager принимает те же опции, что и кластеризатор.
        gridSize: 80,
        clusterDisableClickZoom: true
    });
    //Задание стилей меток и кластеров
    objectManager.objects.options.set('preset', 'islands#blueDotIcon');
    objectManager.clusters.options.set('preset', 'islands#blueClusterIcons');
    myMap.geoObjects.add(objectManager);

    $.ajax({
        url: "scripts/data.json"
    }).done(function(data) {
        objectManager.add(data);
    });
}