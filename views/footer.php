<script>
    // This sample uses the Autocomplete widget to help the user select a
    // place, then it retrieves the address components associated with that
    // place, and then it populates the form fields with those details.
    // This sample requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script
    // src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    var placeSearch, autocomplete;

    var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };

    function initAutocomplete() {
        // Create the autocomplete object, restricting the search predictions to
        // geographical location types.
        autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('owner_region'), {types: ['geocode']});

        // Avoid paying for data that you don't need by restricting the set of
        // place fields that are returned to just the address components.
        autocomplete.setFields(['address_component']);

        // When the user selects an address from the drop-down, populate the
        // address fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
    }

    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details,
        // and then fill-in the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }

    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var circle = new google.maps.Circle(
                    {center: geolocation, radius: position.coords.accuracy});
                autocomplete.setBounds(circle.getBounds());
            });
        }
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIrId_5K3xS1-uW7IykNIhm-3euwLISzw&libraries=places&callback=initAutocomplete"
        async defer></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/jsValid/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="../js/jsValid/dist/additional-methods.min.js"></script>
<script type="text/javascript" src="../js/jsValid/dist/localization/messages_ru.js"></script>
<script>
    $(document).ready(function () {
        $("#calculate__form").validate({
            rules: {
                'vehicle_manufacture_year':{
                    pattern : '[0-9]{4}',
                    minlength: 4,
                    maxlength: 4,
                },
                'vehicle_id_number':{
                    pattern : '[A-Za-zА-Яа-яЁё0-9]{,15}',
                },
                'vehicle_serial':{
                    pattern : '[0-9A-ZА-Я]{4}',
                    maxLength: 4,
                    minLength: 4,
                },
                'vehicle_number':{
                    pattern: "[0-9]{6}",
                    maxLength: 6,
                    minLength: 6,
                },
                'diagnostic_card_number':{
                    pattern: '[0-9]+',
                    maxLength: 15,
                    minLength: 12,
                },
                'owner_first_name':{
                    pattern: '[а-яА-Я]+',
                    maxLength: 50,
                    minLength: 1,
                },
                'owner_last_name':{
                    pattern: '[а-яА-Я]+',
                    maxLength: 50,
                    minLength: 1,
                },
                'owner_middle_name':{
                    pattern: '[а-яА-Я]+',
                    maxLength: 50,
                    minLength: 1,
                },
                'owner_full_address':{
                    maxLength: 500,
                    minLength: 1,
                },
                'owner_serial':{
                    pattern: '[0-9]{4}',
                    maxLength: 4,
                    minLength: 4,
                },
                'owner_number':{
                    pattern: '[0-9]{6}',
                    maxLength: 6,
                    minLength: 6,
                },
                'owner_issued_by':{
                    maxLength: 500,
                    minLength: 1,
                },
                'owner_phone':{
                    pattern: '[7-9][0-9]{9}',
                    maxLength: 18,
                    minLength: 1,
                },
                'drivers_1_first_name':{
                    pattern: '[а-яА-Я]+',
                    maxLength: 50,
                    minLength: 1,
                },
                'drivers_1_last_name':{
                    pattern: '[а-яА-Я]+',
                    maxLength: 50,
                    minLength: 1,
                },
                'drivers_1_middle_name':{
                    pattern: '[а-яА-Я]+',
                    maxLength: 50,
                    minLength: 1,
                },
                'drivers_1_serial':{
                    pattern: '[0-9]{2}[0-9А-Я]{2}',
                    maxLength: 4,
                    minLength: 4,
                },
                'drivers_1_number':{
                    pattern: '[0-9]{6}',
                    maxLength: 6,
                    minLength: 6,
                },

            },
            messages : {
                'vehicle_manufacture_year':{
                    pattern : 'Введите 4-х значное значение года ыпуска автомобиля',
                },
                'vehicle_id_number':{
                    pattern : 'Можно ввести только буквы или цифры',
                },
                'vehicle_serial':{
                    pattern : 'Можно ввести только заглавные буквы или цифры',
                    minLength: 'Значение должно иметь 4 симвла',
                    maxLength: 'Значение должно иметь 4 симвла',
                },
                'vehicle_number':{
                    pattern: 'Можно ввести только цифры',
                    maxLength: 'Значение должно иметь 6 симвла',
                    minLength: 'Значение должно иметь 6 симвла',
                },
                'diagnostic_card_number':{
                    pattern: 'Можно ввести только цифры',
                    maxLength: 'Значение должно иметь не белее 15 симвлов',
                    minLength: 'Значение должно иметь не мение 12 симвлов',
                },
                'owner_first_name':{
                    pattern: 'Можно ввести только буквы',
                    maxLength: 'Значение должно иметь не белее 50 симвлов',
                },
                'owner_last_name':{
                    pattern: 'Можно ввести только буквы',
                    maxLength: 'Значение должно иметь не белее 50 симвлов',
                },
                'owner_middle_name':{
                    pattern: 'Можно ввести только буквы',
                    maxLength: 'Значение должно иметь не белее 50 симвлов',
                },
                'owner_full_address':{
                    maxLength: 'Значение должно иметь не белее 500 симвлов',
                },
                'owner_serial':{
                    pattern : 'Можно ввести только цифры',
                    minLength: 'Значение должно иметь 4 симвла',
                    maxLength: 'Значение должно иметь 4 симвла',
                },
                'owner_number':{
                    pattern: 'Можно ввести только цифры',
                    maxLength: 'Значение должно иметь 6 симвла',
                    minLength: 'Значение должно иметь 6 симвла',
                },
                'owner_issued_by':{
                    maxLength: 'Значение должно иметь не белее 500 симвлов',
                },
                'owner_phone':{
                    pattern: 'Введите номер в формате 7ХХХХХХХХХ',
                    maxLength: 'Значение должно иметь не белее 18 симвлов',
                },
                'drivers_1_first_name':{
                    pattern: 'Можно ввести только буквы',
                    maxLength: 'Значение должно иметь не белее 50 симвлов',
                },
                'drivers_1_last_name':{
                    pattern: 'Можно ввести только буквы',
                    maxLength: 'Значение должно иметь не белее 50 симвлов',
                },
                'drivers_1_middle_name':{
                    pattern: 'Можно ввести только буквы',
                    maxLength: 'Значение должно иметь не белее 50 симвлов',
                },
                'drivers_1_serial':{
                    pattern : 'Можно ввести только заглавные буквы или цифры',
                    minLength: 'Значение должно иметь 4 симвла',
                    maxLength: 'Значение должно иметь 4 симвла',
                },
                'drivers_1_number':{
                    pattern: 'Можно ввести только цифры',
                    maxLength: 'Значение должно иметь 6 симвла',
                    minLength: 'Значение должно иметь 6 симвла',
                }
            }
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js" defer></script>
</body>
</html>