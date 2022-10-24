<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DatePicker</title>
    <link rel="stylesheet" href="./date-picker.css">
    <link rel="stylesheet" href="./datepicker-main.css">
</head>

<body>


    <div class="picker">
        <form action="get">
            <div class="picker__item">
                <div id="range-input">
                    <input type="text" id="input-id" value="" name="date">
                    <button type="button" id="open-datepicker" class="button">Open</button>
                    <button type="submit" class="button">Submit</button>
                </div>

            </div>
        </form>
    </div>



    <script src="./fecha.min.js"></script>
    <script src="./datepicker.js"></script>
    <script>
        (function () {
            // ------------------- SHOW DATE ------------------ //

            var today = new Date();
            var tomorrow = new Date();

            tomorrow.setDate(tomorrow.getDate() + 1);
            var input1 = document.querySelector('#range-input input');

            var startDate = fecha.format(today, 'YYYY-MM-DD');
            var endDate = fecha.format(tomorrow, 'YYYY-MM-DD');
            input1.value = startDate + ' - ' + endDate;

            // var date1 = new Date();
            // var date2 = new Date();
            // var date3 = new Date();
            // var date4 = new Date();
            // var date5 = new Date();
            // var date6 = new Date();
            // date1.setDate(date1.getDate() + 3);
            // date2.setDate(date2.getDate() + 6);
            // date3.setDate(date3.getDate() + 7);
            // date4.setDate(date4.getDate() + 8);
            // date5.setDate(date5.getDate() + 11);
            // date6.setDate(date6.getDate() + 21);

            // -------------- GET DATA FROM DATABASE USING AJAX ------------------ //
            var ajax = new XMLHttpRequest();
            ajax.open("GET", "database.php", true);
            ajax.send();
            ajax.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    var data = JSON.parse(this.responseText);
                    console.log(data);
                }
                 // var data =
                 // [["09/03/2022", "09/05/2022"],
                 // ["09/10/2022", "09/13/2022"],
                 // ["09/23/2022", "09/25/2022"],
                 // ["10/06/2022", "10/10/2022"]];

        // --------------- STORE DATA FROM JSON TO AN ARRAY ------------ //   
                 
                var bookdates = [];

            for (let i = 0; i < data.length; i++) {

                var starts = new Date(data[i].start);
                var ends = new Date(data[i].end);

                while (starts <= ends) {
                    bookdates.push(fecha.format(new Date(starts), 'YYYY-MM-DD'));
                    starts.setDate(starts.getDate() + 1);
                }
            }
        
        // --------------- ADD INPUT DATE AND DISABLE BOOK DATE ------------- //

            var picker = new Datepicker(input1, {
                autoClose: false,
                disabledDates: bookdates

                // [
                // fecha.format(date1, 'YYYY-MM-DD'),
                // fecha.format(date2, 'YYYY-MM-DD'),
                // fecha.format(date3, 'YYYY-MM-DD'),
                // fecha.format(date4, 'YYYY-MM-DD'),
                // fecha.format(date5, 'YYYY-MM-DD'),
                // fecha.format(date6, 'YYYY-MM-DD')
                // ]

            });

            // ---------------- OPEN CALENDAR --------------- //

            var open_datepicker_button = document.getElementById('open-datepicker');
            open_datepicker_button.addEventListener('click', open_datepicker_function);

            function open_datepicker_function() {
                // console.log('Open!');
                picker.open();
            }
            };

        }())
    </script>
</body>

</html>