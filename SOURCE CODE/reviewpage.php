

<!DOCTYPE html>
<html>
<head>
    <title>Watch Review</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box; user-select: none; font-family: Arial; background: linear-gradient(to top, rgba(11, 11, 11, 0.52), rgba(44, 94, 62, 0.73)); background-repeat: no-repeat; background-position: center; background-attachment: fixed; background-size: cover; display: flex; justify-content: center; align-items: center; min-height: 100vh; color: white;">
    <div style="text-align: center;">
        <h2 style="color: #53bd53;">Write a Review</h2>
        <form  action="db_connection.php" method="post">
            <label for="reviewText">Your Review:</label>
            <textarea name="reviewText" style="width: 100%; padding: 8px; border: 1px solid #53bd53;" rows="4"></textarea>
            <br>
            <label for="rating">Rating:</label>
            <select name="rating" style="width: 100%; padding: 8px; border: 1px solid #53bd53;">
                <option value="5">5 (Excellent)</option>
                <option value="4">4 (Good)</option>
                <option value="3">3 (Average)</option>
                <option value="2">2 (Poor)</option>
                <option value="1">1 (Terrible)</option>
            </select>
            <br>
            <input type="submit" name="submitReview" value="Submit Review" style="width: 100%; padding: 10px; background: #53bd53; color: white; border: none; cursor: pointer;">
        </form>
    </div>
</body>
</html>
