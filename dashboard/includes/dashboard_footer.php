    <script>
        // Get the current year
        var currentDate = new Date().getDate();
        var currentMonth = new Date().getMonth();
        var currentYear = new Date().getFullYear();

        var yrr = currentDate + " / " + currentMonth + " / " + currentYear;

        // Find the element with the ID "yr"
        var yearSpan = document.getElementById("yr");

        // Set the content of the span to the current year
        yearSpan.textContent = yrr;
    </script>



    <!-- script for table -->
    <script>
        new DataTable('#stable');
    </script>
</body>
</html>