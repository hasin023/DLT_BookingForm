<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-4.5.2/dist/js/bootstrap.min.js"></script> -->
    <script>
        $(document).ready(function() {
            $('.tt, .tf').on('change', function() {
                var tfVal = $('.tf').val();
                var ttVal = $('.tt').val();

                if (tfVal && ttVal) {
                    var tf = new Date('2000-01-01 ' + tfVal);
                    var tt = new Date('2000-01-01 ' + ttVal);

                    if (tt < tf) {
                        $('.td').val('Selection is invalid');
                    } else {
                        var diffInMillis = tt - tf;
                        var hours = Math.floor(diffInMillis / 3600000);
                        var minutes = Math.floor((diffInMillis % 3600000) / 60000);

                        $('.td').val(hours + ' hours ' + minutes + ' minutes');
                    }
                } else {
                    $('.td').val('');
                }
            });
        });
    </script>

    <script>
        // Get the input element by its ID
        // Get the input element with the "today" class
        var inputElement = document.querySelector(".today");

        // Get the current date in YYYY-MM-DD format
        var currentDate = new Date().toISOString().slice(0, 10);

        // Set the value of the input element to the current date
        inputElement.value = currentDate;

        // Make the input element read-only
        inputElement.setAttribute("readonly", "readonly");
    </script>

</body>
</html>