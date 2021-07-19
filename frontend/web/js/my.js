document.addEventListener('DOMContentLoaded', function () {
    let marka = $('#carsearch-marka_id');
    let model = $('#carsearch-model_id');
    let engine = $('#carsearch-engine_type');
    let drive = $('#carsearch-drive_type');
    let gridView = $('#grid_view');

    marka.change(function (event) {
        reloadPage();
    });
    model.change(function (event) {
        reloadPage();
    });

    function reloadPage() {
        let aUrl = '/catalog/';
        if (!marka.val() && !model.val()) {
            aUrl = '/catalog';
        } else {
            if (marka.val())
                aUrl = aUrl + marka.val();
            else
                aUrl = aUrl + ' ';
            if (model.val())
                aUrl = aUrl + '/' + model.val();
            else
                aUrl = aUrl + ' ';
        }
        if (engine.val())
            aUrl = aUrl + '?engine=' + engine.val();
        if (drive.val())
            aUrl = aUrl + '&drive=' + drive.val();
        $(location).attr('href', '' + aUrl);
    }

    function urlPage() {
        let aUrl = '/catalog/';
        if (!marka.val() && !model.val()) {
            aUrl = '/catalog';
        } else {
            if (marka.val())
                aUrl = aUrl + marka.val();
            else
                aUrl = aUrl + ' ';
            if (model.val())
                aUrl = aUrl + '/' + model.val();
            else
                aUrl = aUrl + ' ';
        }
        return aUrl;
    }

    engine.change(function (event) {
        event.preventDefault();
        getTable();
        return false;
    });
    drive.change(function (event) {
        event.preventDefault();
        getTable();
    });

    function getTable() {
        let url = urlPage() + '?engine=' + engine.val() + '&drive=' + drive.val();
        $.ajax({
            url: url,
            type: 'get',
            success: function (data) {
                gridView.html(data);
            },
        });
        window.history.pushState("", "", url);
    }

});