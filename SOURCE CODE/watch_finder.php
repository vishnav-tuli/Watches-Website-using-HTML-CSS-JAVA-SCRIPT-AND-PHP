<!DOCTYPE html>
<html>
<head>
    <title>Watch Finder</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box; user-select: none; font-family: Arial; background: linear-gradient(to top, rgba(11, 11, 11, 0.52), rgba(44, 94, 62, 0.73)), url(./assets/watch2.jpeg); background-repeat: no-repeat; background-position: center; background-attachment: fixed; background-size: cover; display: flex; justify-content: center; align-items: center; min-height: 100vh;">
    <form action="process_watch.php" method="post" enctype="multipart/form-data" style="border: 1px solid #53bd53; padding: 70px; background: rgba(255, 255, 255, 0.8);">
        <h2 style="font-size: 24px; text-align: center;">Watch Finder</h2>
        <label for="Brand" style="color: #53bd53; font-weight: 500; font-size: 18px; padding: 8px; display: block;">Brand:</label>
        <input type="hidden" name="SelectedBrand" id="selectedBrand"> <!-- Hidden input for selected brand -->
        <select name="Brand" required style="width: 100%; padding: 8px; border: 1px solid #53bd53;">
            <option value="Rolex">Rolex</option>
            <option value="Titan">Titan</option>
            <option value="Fossil">Fossil</option>
            <option value="Rado">Rado</option>
            <option value="Citizen">Citizen</option>
            <option value="Customised special edition">Customised special edition</option>
        </select>
        <br><br>
        <label for="color" style="color: #53bd53; font-weight: 500; font-size: 18px; padding: 8px; display: block;">Color:</label>
        <input type="text" name="color" required style="width: 100%; padding: 8px; border: 1px solid #53bd53;">
        <br><br>
        <label for="Price" style="color: #53bd53; font-weight: 500; font-size: 18px; padding: 8px; display: block;">Price:</label>
        <input type="hidden" name="SelectedPrice" id="selectedPrice"> <!-- Hidden input for selected price -->
        <select name="Price" required style="width: 100%; padding: 8px; border: 1px solid #53bd53;">
            <option value="2500-5000">2500-5000</option>
            <option value="5001-10000">5001-10000</option>
            <option value="10001-25000">10001-25000</option>
            <option value="25000-1000000">25000-1000000</option>
        </select>
        <br><br>
        <input type="submit" value="Submit" style="width: 100%; padding: 10px; background: #53bd53; color: white; border: none; cursor: pointer;">
    </form>

    <script>
        const brandSelect = document.querySelector('select[name="Brand"]');
        const priceSelect = document.querySelector('select[name="Price"]');
        const selectedBrandInput = document.querySelector('#selectedBrand');
        const selectedPriceInput = document.querySelector('#selectedPrice');

        brandSelect.addEventListener('change', function() {
            const selectedBrandOption = brandSelect.options[brandSelect.selectedIndex];
            selectedBrandInput.value = selectedBrandOption.text;
        });

        priceSelect.addEventListener('change', function() {
            const selectedPriceOption = priceSelect.options[priceSelect.selectedIndex];
            selectedPriceInput.value = selectedPriceOption.text;
        });
    </script>
</body>
</html>



